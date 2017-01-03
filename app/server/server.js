/**
 * Created by Dylan Goodman on 04-Dec-16.
 */

var mysql = require('mysql');
var express = require('express');
var app = express();
var server = require('http').createServer(app);
var io = require('socket.io').listen(server);
var port = process.env.PORT || 3001;
var SteamCommunity = require('steamcommunity');
var SteamTotp = require('steam-totp');
var SteamID = require('steamid');
var TradeOfferManager = require('steam-tradeoffer-manager');
var fs = require('fs');


app.get('/', function (req, res) {
    res.send('Application is live');
});

server.listen(port, function () {
    console.log('Server listening at port %d', port);
});
login();
var sharedIden = {
    bot1: 'aLyLE90KdNcKKFAxYSK\/Fcqzj3A='
};

var secretIden = {
    bot1: 'uvo3zC6I9b7TAV0M72h+BOByPVk='
};

var steam = {
    bot1: new SteamCommunity()
};

var manager = {
    bot1: new TradeOfferManager({
        'domain': 'csgohand.com',
        'language': 'en',
        'cancelTime': 120000,
        'pollInterval': 5000
    })
};

if(fs.existsSync('polldata.json')) {
    manager.pollData = JSON.parse(fs.readFileSync('polldata.json'));
}


var db = mysql.createPool({
    connectionLimit: 10,
    host: 'localhost',
    user: 'root',
    password: 'ZkyO117PpU',
    database: 'csgohand'
});

var ERROR_MESSAGE_TIMEOUT = 10;

var messages = [];

function count(arr){
    var count = 0;
    for(var i = 0; i < arr.length; i++){
        count++;
    }
    return count;
}

function strpos (haystack, needle, offset) {
    var i = (haystack+'').indexOf(needle, (offset || 0));
    return i === -1 ? false : i;
}

function startsWith(haystack, needle){
    return needle === '' || strpos(haystack, needle, -haystack.length) !== false;
}

var userCount = 43;

var config = {
    maxPostPerTimeFrame: 3,
    timeFrame: (1000 * 12)
};

var i = 45;
var x = 100;
var counterBack = setInterval(function () {
    i--;
    if (i > -1) {
        var data = {x: x, i: i};
        io.emit('rouletteTimer', data);
        x = x - 2.3;

    } else {
        clearInterval(counterBack);
    }

}, 1000);


//////STEAMBOT STUFF
function login() {
    steam.bot1.login({
        'accountName': 'marktillimkillem',
        'password': ')jMCdmBGvb=[%wF{$Rr9by_L-w2dMLn6',
        'twoFactorCode': SteamTotp.getAuthCode(secretIden.bot1)
    }, function (err, sessionID, cookies, steamguard) {
        if (err) {
            console.log('Steam Bot 1 login fail: ' + err.message);
            process.exit(1);
        }
        console.log('Bot 1 Logged in!');

        manager.bot1.setCookies(cookies, function (err) {
            if (err) {
                console.log('Bot1 API Error: ' + err);
                process.exit(1);
                return;
            }
            console.log('Bot4 has api key: ' + manager.bot1.apiKey);
        });
        steam.bot1.startConfirmationChecker(10000, sharedIden.bot1);
    });
}


io.on('connection', function (socket) {
    var userId = socket.handshake.query.userId;
    socket.userId = socket.handshake.query.userId;

    console.log('SteamID Connected:', userId);

    var userData;

    userCount = io.engine.clientsCount;
    console.log('Connected! Count:', userCount);
    io.emit('totalUsers', userCount);

    db.query("SELECT * from users WHERE steamid = ?", [userId], function(error, results){
        if(error){
            console.log(error);
        } else {
            userData = results;
            console.log(userData);
        }
    });

    var d = new Date();

    socket.user = {
        id: socket.id,
        connectedOn: +d,
        postPerTimeFrame: 0,
        startTimeFrame: 0
    };

    for(var i = 0; i < messages.length; i++){
        io.to(socket.id).emit('displayMsg', messages[i]);
    }

    socket.on('getTradeUrl', function(){
        db.query("SELECT * from users WHERE steamid = ?", [userId], function(error, result){
            if(error){
                console.log(error);
            } else {
                socket.emit('showTradeUrl', result[0].tradeUrl);
            }
        });
    });

    socket.on('updateTradeUrl', function(data){
        var pos = strpos(data.tradeUrl, 'token');
        if(pos === false || data.tradeUrl.length > 256 || !startsWith(data.tradeUrl, 'https://steamcommunity.com/') || data.steamId !== userId){
            var token = '';
            socket.emit('tradeUrlError', 'Not a valid Trade Link!');
        } else  {
            var token = data.tradeUrl.substr(pos+6);
            db.query("UPDATE users SET tradeUrl = ?, tradeToken = ? WHERE steamid = ?", [data.tradeUrl, token, data.steamId]);
            socket.emit('tradeUrlSuccess', data.tradeUrl);
        }
    });

    socket.on('newMessage', function(data){
        console.log('Got a message!');
        var user = socket.user,
            dateUnix = +(new Date()),
            endTimeFrame = user.startTimeFrame + config.timeFrame;

        if (dateUnix > endTimeFrame) {
            user.postPerTimeFrame = 0;
        }

        if (user.postPerTimeFrame < config.maxPostPerTimeFrame) {
            user.startTimeFrame = dateUnix;
            ++user.postPerTimeFrame;
            if(messages.length == 15){
                messages.shift();
                messages.push(data);
                io.sockets.emit('displayMsg', data);
            } else{
                messages.push(data);
                io.sockets.emit('displayMsg', data);
            }
        } else {
            broadcastUserError('Spam!', ERROR_MESSAGE_TIMEOUT, {
                timeoutEnds: endTimeFrame
            });
        }
    });

    function broadcastUserError(eventName, errorCode, details) {
        var detailed = details || {};
        socket.emit('userError', {
            event: eventName,
            code: errorCode,
            details: detailed
        });
    }
    socket.on('disconnect', function(){
        userCount = io.engine.clientsCount;
        console.log('Disconnected!', userCount);
        io.emit('totalUsers', userCount);
    });
});
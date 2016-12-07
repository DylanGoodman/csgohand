/**
 * Created by Dylan Goodman on 04-Dec-16.
 */

var mysql = require('mysql');
var express = require('express');
var app = express();
var server = require('http').createServer(app);
var io = require('socket.io').listen(server);
var port = process.env.PORT || 3001;

app.get('/', function (req, res) {
    res.send('Application is live');
});

server.listen(port, function () {
    console.log('Server listening at port %d', port);
});


var db = mysql.createConnection({
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
        console.log(x+'%');
        x = x - 2.3;

    } else {
        clearInterval(counterBack);
    }

}, 1000);

io.on('connection', function (socket) {
    userCount = io.engine.clientsCount;
    console.log('Connected! Count:', userCount);
    io.emit('totalUsers', userCount);

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


    socket.on('updateTradeUrl', function(data){
        var pos = strpos(data.tradeUrl, 'token');
        if(pos === false || data.tradeUrl.length > 256 || !startsWith(data.tradeUrl, 'https://steamcommunity.com/')){
            var token = '';
            socket.emit('tradeUrlError', 'Not a valid Trade Link!');
        } else  {
            var token = data.tradeUrl.substr(pos, 6);
            db.connect();
            db.query("UPDATE users SET tradeUrl = ?, tradeToken = ? WHERE steamid = ?", [data.tradeUrl, token, data.steamId]);
            db.end();
            socket.emit('tradeUrlSuccess', 'Your URL has been updated!');
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
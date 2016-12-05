/**
 * Created by Dylan Goodman on 04-Dec-16.
 */
var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var antiSpam = require('socket-anti-spam');
var mysql = require('mysql');

console.log('Server started!');
server.listen(8080);
console.log('Listening on port 8080!');

app.get('/', function (req, res) {
    res.send('Application Live!');
});

antiSpam.init({
    banTime: 30,
    kickThreshold: 2,
    kickTimesBeforeBan: 1,
    banning: true,
    heartBeatScale: 40,
    heartBeatCheck: 4,
    io: io
});

var db = mysql.createConnection({
    host: 'localhost',
    user: 'csgo_site',
    password: 'Mmx2*G224+5|R6K.|^+3n79%*_!!65!Q',
    database: 'csgo'
});

var ERROR_MESSAGE_TIMEOUT = 10;

var messages = [];

var users = [],
    usersConnected = 0,
    config = {
        maxPostPerTimeFrame: 5,
        timeFrame: (1000 * 12)
    };

function count(arr){
    var count = 0;
    for(var i = 0; i < arr.length; i++){
        count++;
    }
    return count;
}
var userCount = 43;


io.on('connection', function (socket) {
    userCount += 1;
    console.log('Connected! Count:', userCount);
    io.emit('totalUsers', userCount);
    socket.emit('initChat');

    var d = new Date();
    antiSpam.ban(socket, 1);
    socket.user = {
        id: socket.id,
        connectedOn: +d,
        postPerTimeFrame: 0,
        startTimeFrame: 0
    };

    for(var i = 0; i < messages.length; i++){
        io.to(socket.id).emit('displayMsg', messages[i]);
    }
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
    /*socket.on('disconnect', function(){
        userCount = userCount - 1;
        console.log('Disconnected!', userCount);
        io.emit('totalUsers', userCount);
    });*/
});
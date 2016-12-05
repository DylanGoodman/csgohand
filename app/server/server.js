/**
 * Created by Dylan Goodman on 04-Dec-16.
 */
var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);

console.log('Server started!');
server.listen(8080);
console.log('Listening on port 8080!');

app.get('/', function (req, res) {
    res.send('Application Live!');
});

io.on('connection', function (socket) {
    socket.emit('news', { hello: 'world' });
    socket.on('my other event', function (data) {
        console.log(data);
    });
});
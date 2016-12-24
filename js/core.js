/**
 * Created by Dylan Goodman on 05-Dec-16.
 */
var steamId = $('#steamId').val();
var server = io.connect('http://104.236.27.2:3001', {query: 'userId='+steamId});

server.on('totalUsers', function(data){
    $('#usersOnline').html(data);
});

server.on('displayMsg', function(data) {
    $('#chatbox').append('<div class="activity-row activity-row1 activity-right"><div class="chatMsg"><div class="chatHead"><h5><img style="width:18px" class="img-circle" src="'+data.userAva+'" alt=""><b>'+ data.userName +'</b> <div class="chatRole"><i class="fa fa-university"></i> 22</div></h5></div><div class="activity-desc-sub"><p>'+data.msg+'</p></div></div><div class="clearfix"> </div></div>');
    $('#chatbox').animate({scrollTop: $('#chatbox').prop("scrollHeight")}, 500);
});

server.on('userError', function(data){
    var ds = data.details.timeoutEnds;
    var newDate = new Date(ds).getTime(); //convert string date to Date object
    var currentDate = new Date().getTime();
    var millesecs = newDate-currentDate;
    var seconds = millesecs / 1000;
    $('#chattext').attr('placeholder', 'SPAM ALERT: You may send a message in '+Math.round(seconds)+' Seconds!');
});

server.on('rouletteTimer', function(data){
    $('#numTimer').html(data.i);
    $('#timer').css('width', data.x+'%');
});

server.on('tradeUrlError', function(data){
    alert(data);
});

server.on('tradeUrlSuccess', function(data){
    $('#tradeUrlWarning').fadeOut();
    $('#userTradeUrl').html(data);
    $('#tUrl').modal('toggle');
});

server.on('showTradeUrl', function(data){
    if(data !== ''){
        $('#tradeUrl').val(data);
    }
});

function getTradeUrl(){
    server.emit('getTradeUrl');
}

$('#tradeUrl').keyup(function(event){
    if(event.keyCode == 13) {
        var tradeUrl = $('#tradeUrl').val();
        if (tradeUrl !== '') {
            var data = {
                tradeUrl: tradeUrl,
                steamId: steamId
            }
            server.emit('updateTradeUrl', data);
        } else {
            console.log('Enter Something Fool!');
        }
    }
});

$('#tradeSubmit').click(function(){
    var tradeUrl = $('#tradeUrl').val();
    if(tradeUrl !== ''){
        var data = {
            tradeUrl: tradeUrl,
            steamId: steamId
        }
        server.emit('updateTradeUrl', data);
    } else {
        console.log('Enter Something Fool!');
    }
});

$('#chattext').keyup(function(event){
    if(event.keyCode == 13){
        var usrMsg = $(this).val();
        if(usrMsg !== '') {
            $('#chattext').val('');
            var data = {
                'msg' : usrMsg
            };
            $.ajax({
                type: 'POST',
                url: 'app/actions/chatMsg',
                data: data,
                dataType: 'json',
                success: function(data){
                    if(data.success === false){
                        console.log(data);
                        $('#chattext').attr('placeholder', data.error);
                    } else {
                        server.emit('newMessage', data);
                    }
                }
            });
            return false;
        } else {
            $(this).attr('placeholder', 'Enter something first!');
            return false;
        }
    }
});
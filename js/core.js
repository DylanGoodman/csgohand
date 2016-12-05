/**
 * Created by Dylan Goodman on 05-Dec-16.
 */
var server = io.connect('http://104.236.27.2:8080');

server.on('totalUsers', function(data){
    $('#usersOnline').html(data);
});

server.on('displayMsg', function(data) {
    $('#chatbox').append('<div class="activity-row activity-row1 activity-right"><div class="chatMsg"><div class="chatHead"><h5><img style="width:18px" class="img-circle" src="'+data.userAva+'" alt=""><b>'+ data.userName +'</b> <div class="chatRole"><i class="fa fa-university"></i> 22</div></h5></div><div class="activity-desc-sub"><p>'+data.msg+'</p></div></div><div class="clearfix"> </div></div>');
    $('#chatbox').animate({scrollTop: $('#chatbox').prop("scrollHeight")}, 500);
});


$('#chattext').keyup(function(event){
    if(event.keyCode == 13){
        var usrMsg = $(this).val();
        if(usrMsg !== '') {
            $('#usrMsg').val('');
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
                        $('#usrMsg').attr('placeholder', data.error);
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
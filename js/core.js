/**
 * Created by Dylan Goodman on 25-Jan-17.
 */
$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
});
$('#login').hide();
$('#register').hide();
$('#loadingGif').hide();
$('#registerError').hide();
$('#loginError').hide();
$('#registerSuccess').hide();
$('#loginSuccess').hide();
$('#accountError').hide();
$('#accountSuccess').hide();
$('#waiting').modal({
    backdrop: 'static',
    keyboard: false,
    show: false
});



$(document).ajaxStart(function () {
    $("#waiting").modal('show');
}).ajaxStop(function () {
    $("#waiting").modal('hide');
});

/*LOGIN/REGISTER CODE*/
function showRegister(){
    $('#login').fadeOut(function(){
        $('#register').fadeIn();
    });
}
function showLogin(){
    $('#register').fadeOut(function(){
        $('#login').fadeIn();
    })
}
function loginUser(){
    $('#login').fadeOut(function(){
        $('#loadingGif').fadeIn();
        var data = {
            username    : $('#username').val(),
            password    : $('#password').val(),
            token       : $('#token').val()
        };
        $.ajax({
            global: false,
            type: 'POST',
            url: 'app/action/loginUser',
            data: data,
            dataType: 'json',
            success:function(data){
                if(data.success === true){
                    $('#old-user').html($('#username').val());
                    $('#loadingGif').fadeOut(function(){
                        $('#loginSuccess').fadeIn();
                    });
                    setTimeout(function(){
                        window.location = '/insta/home';
                    }, 3500);
                } else {
                    $('#loginError').html('<strong>'+data.error+'</strong>').show();
                    $('#loadingGif').fadeOut(function(){
                        $('#login').fadeIn();
                    });
                }
            }
        });
    });
}
function registerUser(){
    $('#register').fadeOut(function(){
        $('#loadingGif').fadeIn();
        var data = {
            username    : $('#username_reg').val(),
            password    : $('#password_reg').val(),
            passwordr   : $('#passwordr_reg').val(),
            email       : $('#email_reg').val(),
            token       : $('#token').val()
        };
        $.ajax({
            global: false,
            type: 'POST',
            url: 'app/action/registerUser',
            data: data,
            dataType: 'json',
            success:function(data){
                if(data.success === true) {
                    $('#new-user').html($('#username_reg').val());
                    $('#loadingGif').fadeOut(function(){
                        $('#registerSuccess').fadeIn();
                    });
                    setTimeout(function(){
                        window.location = '/insta/home';
                    }, 3500);
                } else {
                    $('#registerError').html('<strong>'+data.error+'</strong>').show();
                    $('#loadingGif').fadeOut(function () {
                        $('#register').fadeIn();
                    });
                }
            }
        });
    });
}
$('#loginForm').click(function(){
    $('#main').fadeOut(function(){
        $('#login').fadeIn();
    });
});
$('#registerForm').click(function(){
    $('#main').fadeOut(function(){
        $('#register').fadeIn();
    });
});
$('#username').keyup(function(event){
    if(event.keyCode == 13){
        loginUser();
    }
});
$('#password').keyup(function(event){
    if(event.keyCode == 13){
        loginUser();
    }
});
$('#username_reg').keyup(function(event){
    if(event.keyCode == 13){
        registerUser();
    }
});
$('#email_reg').keyup(function(event){
    if(event.keyCode == 13){
        registerUser();
    }
});
$('#password_reg').keyup(function(event){
    if(event.keyCode == 13){
        registerUser();
    }
});
$('#passwordr_reg').keyup(function(event){
    if(event.keyCode == 13){
        registerUser();
    }
});
/*LOGIN/REGISTER CODE END*/
/*PANEL CODE*/
function updateAccount(){
    $('#accountError').hide();
    var data = {
        username: $('#username').val(),
        email: $('#email').val(),
        password: $('#password').val(),
        passwordr: $('#passwordr').val(),
        confirmPass: $('#confirmPassword').val(),
        token: $('#token').val()
    };
    $.ajax({
        type: 'POST',
        url: 'app/action/updateAccount',
        data: data,
        dataType: 'json',
        success:function(data){
            if(data.success === true){
                if(data.email !== '') {
                    $('#email').attr('placeholder', data.email).val('');
                }
                $('#password').val('');
                $('#passwordr').val('');
                $('#confirmPassword').val('');
                $('#accountSuccess').fadeIn();
            } else {
                $('#accountErrorMsg').html(data.error);
                $('#accountError').fadeIn();
            }
        }
    })
}

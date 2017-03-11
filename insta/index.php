<?php
error_reporting(E_ALL);
$init = $_SERVER['DOCUMENT_ROOT'];
require $init.'/insta/app/init.php';
if(isset($_SESSION['username'])) {
  header('Location: /insta/home');
  exit();
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Social Rocket Club - Your #1 Choice For Social Media Gains</title>

  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,700italic,900,100' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->


</head>

<body class="login-page">
<div class="se-pre-con"></div>
<input type="hidden" id="token" value="<?php echo $_SESSION['token']; ?>">
<section class="content login-page">

  <div class="content-liquid">
    <div class="container">

      <div class="row">

        <div class="login-page-container">

          <div class="boxed animated flipInY">
              <div class="inner">
                <div id="main">
                <div class="login-title text-center">
                  <h2>Welcome to the Social Rocket Club</h2>
                  <h5>The best prices to skyrocket your Social Media following!</h5>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <i class="fa fa-5x fa-rocket"></i>
                  </div>
                  <div class="col-md-6 text-center">
                    <i class="fa fa-check-circle fa-fw"></i> #1 Trusted Worldwide
                    <br>
                    <i class="fa fa-users fa-fw"></i> Followers & Subscribers
                    <br>
                    <i class="fa fa-thumbs-up fa-fw"></i> Likes, Favorites, & Views
                    <br>
                    <i class="fa fa-dollar fa-fw"></i> Unbeatable Pricing
                    <br>
                    <i class="fa fa-forward fa-fw"></i> 100% Guaranteed
                  </div>
                  <div class="col-md-6 text-center">
                    <i class="fa fa-twitter fa-fw"></i> Twitter
                    <br>
                    <i class="fa fa-instagram fa-fw"></i> Instagram
                    <br>
                    <i class="fa fa-youtube fa-fw"></i> YouTube
                    <br>
                    <i class="fa fa-facebook fa-fw"></i> Facebook
                    <br>
                    <i class="fa fa-plus fa-fw"></i> much more!
                  </div>
                  <div style="margin-top:15px;" class="col-md-12 text-center">
                    <button type="button" id="registerForm" class="btn btn-success">Join Now</button><button type="button" id="loginForm" class="btn btn-warning">Login</button>
                  </div>
                </div>
                </div>
                <div id="login">
                  <div class="login-title text-center">
                    <h4>Login to your account</h4>
                    <h5>We're happy to see you return</h5>
                  </div>
                  <div class="alert alert-danger text-center" id="loginError"></div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" id="username"/>
                  </div>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" id="password"/>
                  </div>

                  <input type="button" onclick="loginUser()" class="btn btn-lg btn-success" value="Login to your account" />

                  <p class="footer"><a href="#" onclick="showRegister()">Register</a> </p>
                </div>
                <div id="loadingGif">
                  <div class="login-title text-center">
                    <h3>Please Wait...</h3>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <img src="images/pie.gif">
                    </div>
                  </div>
                </div>
                <div id="loginSuccess">
                  <div class="login-title text-center">
                    <h3>Welcome back <span id="old-user"></span>!</h3>
                    <h5>You are being logged in! Please wait..</h5>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <i class="fa fa-5x fa-check" style="color: #1dbb62"></i>
                    </div>
                  </div>
                </div>
                <div id="registerSuccess">
                  <div class="login-title text-center">
                    <h3>Welcome <span id="new-user"></span>!</h3>
                    <h5>You are being logged in! Please wait..</h5>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <i class="fa fa-5x fa-check" style="color: #1dbb62"></i>
                    </div>
                  </div>
                </div>
                <div id="register">
                  <div class="login-title text-center">
                    <h4>Create new account</h4>

                  </div>

                  <div class="row">
                    <div class="alert alert-danger text-center" id="registerError">

                    </div>
                    <div class="col-md-12">
                      <!-- Username Input -->
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" id="username_reg"/>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <!-- E-mail Input -->
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" placeholder="E-Mail" id="email_reg"/>
                      </div>
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-md-12">
                      <!-- Password Input -->
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password" id="password_reg"/>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <!-- Password Input -->
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password Repeat" id="passwordr_reg"/>
                      </div>
                    </div>

                  </div>

                  <input type="button" onclick="registerUser()" class="btn btn-lg btn-success" value="Register your account"/>

                  <p class="footer">Have an account? <a href="#" onclick="showLogin()">Login</a> </p>
                </div>

              </div>
          </div>

        </div>

      </div>

    </div>
  </div>

</section>

<!-- Javascript -->
<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/flippy/jquery.flippy.min.js"></script>
<script src="js/core.js"></script>


<script type="text/javascript">
  jQuery(document).ready(function($){

    var min_height = jQuery(window).height();
    jQuery('div.login-page-container').css('min-height', min_height);
    jQuery('div.login-page-container').css('line-height', min_height + 'px');

    //$(".inner", ".boxed").fadeIn(500);
  });

</script>
</body>
</html>

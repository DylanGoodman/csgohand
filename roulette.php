
<!DOCTYPE HTML>
<html>
<head>
<title>CSGOHand - Roulette</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='https://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<!--//end-animate-->
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

<link rel="stylesheet" href="css/roulette.css" media="screen">
<script src="js/raphael.js"></script>
<script src="js/roulette.js"></script>
<!--//Metis Menu -->

</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="index.html"><i class="fa fa-home nav_icon"></i>Hub</a>
						</li>
						<li>
							<a class="active" href="#"><i class="fa fa-gamepad nav_icon"></i>Games <span class="nav-badge-btm pull-right">NEW</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="#"><i class="fa fa-circle"></i> Roulette</a>
								</li>
								<li>
									<a id="coming" href="#coming">Coming Soon...</a>
								</li>
								<li>
									<a id="coming" href="#coming">Coming Soon...</a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-exchange nav_icon"></i>Deposit</a>
						</li>
						<li>
							<a href="skin-shop.html"><i class="fa fa-shopping-cart nav_icon"></i>Shop</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-trophy nav_icon"></i>Leaderboards</a>
						</li>
					</ul>
					<!-- //sidebar-collapse -->
					<div class="sideNavBottom">
                        <p><a href="#">Terms</a> <a href="#">FAQ</a> <a href="#">Contact</a>
						<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-steam"></i></a></p>
                    </div>
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-star"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a class="hvr-shrink" href="index.html">
						<h1>CSGOHand</h1>
						<span>#1 SKIN PLATFORM</span>
					</a>
				</div>
				<!--//logo-->
				<ul class="nofitications-dropdown">
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-users"></i> <b>1324 Online</b></a>
						<ul class="dropdown-menu">
							<li>
								<div class="notification_header">
									<h3>Most Online: 17355</h3>
								</div>
							</li>
							<li><a href="#">
							   <div class="notification_desc">
								<p><i class="fa fa-shield"></i> Online Staff</p>
								<p><span>Haste CSGOHand.com</span></p>
								<p><span>Argyl CSGOHand.com</span></p>
								</div>
							  <div class="clearfix"></div>
							 </a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-star"></i> <b>15000</b></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>1000 Star(s) = $1.00</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="notification_desc">
									<p>Deposit</p>
									<p><span>Trade skins for Stars!</span></p>
									</div>
								  <div class="clearfix"></div>
								 </a></li>
								 <li class="odd"><a href="#">
								   <div class="notification_desc">
									<p>Skin Shop</p>
									<p><span>Buy skins for Stars!</span></p>
									</div>
								   <div class="clearfix"></div>
								 </a></li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">
					<ul>
                        <li class="hide dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-steam-square"></i> <b>Sign in with Steam</b></a>
						</li>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img style="width:48px" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""> </span>
									<div class="user-name">
										<p>Haste CSGOHand.com</p>
										<span><i class="fa fa-university"></i> Level 30</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="account.html"><i class="fa fa-user"></i> Account</a> </li>
								<li> <a href="account.html#referral"><i class="fa fa-star"></i> Referrals</a> </li>
								<li> <a href="#"><i class="fa fa-clock-o"></i> History</a> </li>
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
						<li class="dropdown head-dpdn hide">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-steam"></i> Sign in with Steam</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page row" style="margin:0;">
				<div class="col-md-8 grid_box1">
					<div style="padding:0;background-color: #F1F1F1;" class="calender text-center">
						<h4 class="title3 text-center">Next roll in 45 seconds...</h4>
						<div style="margin-top:0" class="widget_1 row elements">
							<div class="col-sm-4 widget_1_box">
								<div class="tile-progress vimeo">
									<div class="content">
										<h4><i class="fa fa-star"></i> 3578900</h4>
									</div>
								</div>
							</div>
							<div class="col-sm-4 widget_1_box">
								<div class="tile-progress bg-green">
									<div class="content">
										<h4><i class="fa fa-star"></i> 3500</h4>
									</div>
								</div>
							</div>
							<div class="col-sm-4 widget_1_box">
							   <div class="tile-progress bg-red">
									<div class="content">
										<h4><i class="fa fa-star"></i> 3500</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="progress progress-striped active">
							 <div class="bar black" style="width: 50%;"></div>
						</div>

						<div class="col-md-12 text-center">
							<h2>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#232323"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#232323"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#232323"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#232323"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#232323"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">32</strong>
								</span>
								<span class="fa-stack col-md-1">
									<i style="color:#A43741"  class="fa fa-circle fa-stack-2x"></i>
									<strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
								</span>
							</h2>
						</div>
					</div>

					<div class="row">
						<div style="margin-top:55px;" id="rouletteTable">
							<div class="col-xs-7" id="rouletteWheel"></div>
							<div class="col-xs-5" id="ballWheel"></div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 grid_box1">
					<div style="padding:0" class="calender widget-shadow">
						<h4 class="title3 text-center">Bet box</h4>

						<div style="margin-top:0" class="row">
							<button style="border-radius:0;" type="clear" class="btn col-md-4 btn-default">Black</button>
							<button style="border-radius:0;color:#55AA55" type="clear" class="btn col-md-4  btn-default">Green</button>
							<button style="border-radius:0;color:#A43741" type="clear" class="btn col-md-4  btn-default">Red</button>
						</div>

						<input  type="text" class="form-control1" placeholder="Choose bet below or type custom # here">

						<div style="margin-top:0" class="row">
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">+100</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">+1000</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">+5000</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">+10000</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-2 btn-default">1/2</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-2  btn-default">2x</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-2  btn-default">0</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">Last</button>
							<button style="border-radius:0;" type="clear" class="btn col-md-3  btn-default">Max</button>
						</div>
					</div>

					<div style="margin-top:10px;padding:0" class="calender widget-shadow">
						<h4 class="title3 text-center">Chat box</h4>
						<div class="scrollbar scrollbar1" tabindex="5000" style="overflow: hidden; outline: none;height:300px;">
							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead admin">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>Haste CSGOHand.com</b> <div class="chatRole"><i class="fa fa-star"></i> Admin</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>Test CSGOHand.com</b> <div class="chatRole"><i class="fa fa-university"></i> 22</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead mod">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>Mod CSGOHand.com</b> <div class="chatRole"><i class="fa fa-user-secret"></i> Mod</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat, this chat is so dank that some times i think i forget to light it up
										and smoke that bitch, ya feel me?</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead maxLvl">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>MaxedLVL CSGOHand.com</b> <div class="chatRole"><i class="fa fa-trophy"></i> 30</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat, this chat is so dank that some times i think i forget to light it up
										and smoke that bitch, ya feel me?</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead maxLvl">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>MaxedLVL CSGOHand.com</b> <div class="chatRole"><i class="fa fa-trophy"></i> 30</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat, this chat is so dank that some times i think i forget to light it up
										and smoke that bitch, ya feel me?</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="chatMsg">
									<div class="chatHead maxLvl">
										<h5><img style="width:18px" class="img-circle" src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/05/05aea756a7c81e54735993c220a86e73732390f1_full.jpg" alt=""><b>MaxedLVL CSGOHand.com</b> <div class="chatRole"><i class="fa fa-trophy"></i> 30</div></h5>
									</div>
									<div class="activity-desc-sub">
										<p>testing dank new chat, this chat is so dank that some times i think i forget to light it up
										and smoke that bitch, ya feel me?</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="chat-bottom">
							<form>
								<input type="text" placeholder="Say something... don't be shy!" required=""></input>
							</form>
						</div>
					</div>

					<div style="margin-top:20px;" class="	" id="controls">
						<ul>
							<li><a href="#" onclick="rouletteSpinner.doTogglePause()">Pause / Play</a></li>
							<li><a href="#" onclick="rouletteSpinner.doRollBall()">Roll Ball</a></li>
							<li><a href="#" onclick="rouletteSpinner.doTakeBall()">Take Ball</a></li>
						</ul>
					</div>
				</div>




			</div>
		</div>
		<div class="footer" id="footer">
		   <p>&copy; 2016 CSGOHand - Version 2.00.13.45</p>
		</div>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body,
                footer = document.getElementById( 'footer' );

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
                classie.toggle( footer, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};


			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}

			$(document).ready(function() {
				$("html").niceScroll({background:"#00F"});
			});

		</script>


	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>

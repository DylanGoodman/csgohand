<?php

require ('app/init.php');

?>

<!DOCTYPE HTML>
<html>
<head>
<title>CSGOHand - #1 CS:GO Skin Betting Platform</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.0.2/css/hover-min.css">
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
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
							<a href="#"><i class="fa fa-gamepad nav_icon"></i>Games <span class="nav-badge-btm pull-right">NEW</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="roulette.html"><i class="fa fa-circle"></i> Roulette</a>
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
                        <li class="dropdown head-dpdn">
							<?php echo $site->login(); ?>
						</li>
						<li class="hide dropdown profile_details_drop">
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
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-star"></i> Referrals</a> </li>
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
				<div class="col-md-12 grid_box1">
					<div style="padding:0;background-color: #232323;" class="calender widget-shadow">
						<h2 style="color:#008aff" class="title3 text-center">Welcome to CSGOHand V2.0</h2>
                        <h4 style="color:#fff;text-align:center;padding:0px 150px 0px 150px">The #1 Skin Platform is back and better than ever. We redesigned our website from the ground up
                        in order to provide the greatest CS:GO gambling experience. With a <span style="color:#008aff">never before seen life-like Roulette experience</span>, Live Chat,
                        <span style="color:#008aff">Leveling 0-30 with rewards</span>, Refferals, and a hell of a lot more on the way!  </h4>
                        <br>
						<div style="margin-top:0;" class="widget_1 row elements">
							<div class="col-sm-4 widget_1_box">
								<div style="width:100%;padding:7px;" class="widget_1_box wid-social vimeo">
								<div class="social-icon">
									<i class="fa fa-star text-light icon-xlg "></i>
								</div>
								<div class="social-info">
									<h3 class="number_counter bold count text-light start_timer counted">2,400,000</h3>
									<h4 class="counttype text-light">Won today</h4>
								</div>
								<div style="margin-top:10px;" class="tile-progress bg-success">
                                    <div class="content">
										<h4><i class="fa fa-dollar icon-sm"></i> Win Big</h4>
										<h4 style="padding-top:20px;">Our users are winning huge!</h4>
									</div>
								</div>
							</div>
							</div>
							<div class="col-sm-4 widget_1_box">
								<div style="width:100%;padding:7px;" class="col-sm-4 widget_1_box wid-social vimeo">
								<div class="social-icon">
									<i class="fa fa-user text-light icon-xlg "></i>
								</div>
								<div class="social-info">
									<h3 class="number_counter bold count text-light start_timer counted">6,100+</h3>
									<h4 class="counttype text-light">Users</h4>
								</div>
								<a href="roulette.html"><div style="margin-top:10px;" class="tile-progress bg-success">
									<div class="content">
										<h4><i class="fa fa-trophy icon-sm"></i> Roulette</h4>
										<h4 style="padding-top:20px;">Play our all new Roulette!</h4>
									</div>
								</div></a>
							</div>
							</div>
							<div class="col-sm-4 widget_1_box">
								<div style="width:100%;padding:7px;" class="col-sm-4 widget_1_box wid-social vimeo">
								<div class="social-icon">
									<i class="fa fa-star text-light icon-xlg "></i>
								</div>
								<div class="social-info">
									<h3 class="number_counter bold count text-light start_timer counted">74,145,000</h3>
									<h4 class="counttype text-light">Won all time</h4>
								</div>
								<div style="margin-top:10px;" class="tile-progress bg-success">
                                    <div class="content">
										<h4><i class="fa fa-university icon-sm"></i> Level Up</h4>
										<h4 style="padding-top:20px;">Level 0-30 and win prizes!</h4>
									</div>
								</div>
							</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>


				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer" id="footer">
		   <p>&copy; 2016 CSGOHand - Version 2.00.13.45</p>
		</div>
        <!--//footer-->
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
				$("html").niceScroll({background:"#F1F1F1"});
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


<!DOCTYPE HTML>
<html>
<head>
    <title>CSGOAlliance - #1 CS:GO Skin Betting Platform</title>
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
    <script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
    <link rel="stylesheet" href="css/roulette.css">
    <script src="js/raphael.js"></script>

</head>
<body class="cbp-spmenu-push">
<div class="main-content">
    <!--left-fixed -navigation-->
    <div class=" sidebar" role="navigation">
        <div class="navbar-collapse">
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="/"><i class="fa fa-home nav_icon"></i>Hub</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gamepad nav_icon"></i>Games<span class="nav-badge-btm pull-right">NEW</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="roulette"><i class="fa fa-circle"></i>Roulette</a>
                            </li>
                            <li>
                                <a href="boxes"><i class="fa fa-square"></i>Boxes</a>
                            </li>
                            <li>
                                <a id="coming" href="#coming">Coming Soon...</a>
                            </li>
                        </ul>
                        <!-- //nav-second-level -->
                    </li>
                    <li>
                        <a href="deposit"><i class="fa fa-exchange nav_icon"></i>Deposit</a>
                    </li>
                    <li>
                        <a href="skin-shop"><i class="fa fa-shopping-cart nav_icon"></i>Shop</a>
                    </li>
                    <li>
                        <a href="leaderboards"><i class="fa fa-trophy nav_icon"></i>Leaderboards</a>
                    </li>
                </ul>
                <!-- //sidebar-collapse -->
                <div class="sideNavBottom">
                    <p><a href="terms">Terms</a> <a href="faq">FAQ</a> <a href="#">Contact</a>
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
            <button id="showLeftPush"></button>
            <!--toggle button end-->
            <!--logo -->
            <div class="logo">
                <a class="hvr-shrink" href="/">
                    <h1>CSGOAlliance</h1>
                    <span>#1 SKIN PLATFORM</span>
                </a>
            </div>
            <!--//logo-->
            <ul class="nofitications-dropdown bounceInDown animated">
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-users"></i> <b><span id="usersOnline"></span> Online</b></a>
                </li>
            </ul>
        </div>
        <div class="header-right bounceInRight animated">
            <?php if(isset($_SESSION['steamid'])){ ?>
            <div class="profile_details_left"><!--notifications of menu start -->
                <ul class="nofitications-dropdown">
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-star"></i> <b><?php echo $userData['balance']; ?></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>1000 Star(s) = $1.00</h3>
                                </div>
                            </li>
                            <li><a href="deposit">
                                    <div class="notification_desc">
                                        <p>Deposit</p>
                                        <p><span>Trade skins for Stars!</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li class="odd"><a href="skin-shop">
                                    <div class="notification_desc">
                                        <p>Skin Shop</p>
                                        <p><span>Buy skins with Stars!</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <?php } ?>
            <!--notification menu end -->
            <div class="profile_details">
                <ul>
                    <?php if(!isset($_SESSION['steamid'])){ ?>
                        <li class="dropdown head-dpdn">
                            <?php echo $site->login(); ?>
                        </li>
                    <?php } else {?>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img class="img-circle" style="width:48px" src="<?php echo $steamprofile['avatarfull']; ?>" alt=""> </span>
                                    <div class="user-name">
                                        <p><?php echo $steamprofile['personaname']; ?></p>
                                        <span><i class="fa fa-university"></i> Level <?php echo $userData['level']; ?></span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="account"><i class="fa fa-cog"></i> Account</a> </li>
                                <li> <a href="account"><i class="fa fa-star"></i> Referrals</a> </li>
                                <li> <a href="history"><i class="fa fa-clock-o"></i> History</a> </li>
                                <?php echo $site->logout(); ?>
                                <input type="hidden" id="steamId" value="<?php echo $_SESSION['steamid']; ?>">
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //header-ends -->

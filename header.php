<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 27-Jan-17
 * Time: 11:58 PM
 */
require 'app/init.php';
if(!isset($_SESSION['username'])){
    header('Location: /insta');
}
?>
<!doctype html>
<html class="fuelux" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Social Rocket Club - Your #1 Choice For Social Media Gains</title>

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/weather-icons/weather-icons.min.css">

    <link rel="stylesheet" type="text/css" href="assets/effects/menu-effects.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100italic,100,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="assets/bootstrap/js/html5shiv.js"></script>
    <script src="assets/bootstrap/js/respond.js"></script>
    <![endif]-->

    <!-- Assets -->
    <link rel='stylesheet' type='text/css' href='assets/jquery-ui/ui-lightness/jquery-ui-1.10.3.custom.css' />
    <link rel='stylesheet' type='text/css' href='assets/morrischarts/morris.css' />
    <link rel='stylesheet' type='text/css' href='assets/fullcalendar/fullcalendar.css' />
    <link rel='stylesheet' type='text/css' href='assets/datatables/jquery.dataTables.css' />
    <link rel='stylesheet' type='text/css' href='assets/icheck/flat/_all.css' />
    <link rel='stylesheet' type='text/css' href='_demo/introjs/introjs.min.css' />

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="_demo/demo.css">

    <!-- Purchase Bar -->
    <link rel="stylesheet" type="text/css" href="css/purchase-bar.css">

    <!--[if IE 8]><script type="text/javascript" src="assets/flotcharts/excanvas.min.js"></script><![endif]-->

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <link rel="shortcut icon" href="favicon.ico" type="image/png">
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />

</head>

<body>

<section class="content">
    <div class="se-pre-con"></div>
    <!-- Sidebar Start -->
    <div class="sidebar">

        <!-- Logo Start -->
        <a href="/">
            <div class="logo-container" id="step1">
                <h1>Social Rocket Club</h1>
            </div>
        </a>
        <!-- Logo End -->

        <!-- Sidebar User Profile Start -->
        <div class="sidebar-profile">
            <div class="user-info">
                <div class="row">
                    <h3>
                        <input type="hidden" id="token" value="<?php echo $_SESSION['token']; ?>">
                        <a href="account-settings"><?php echo $_SESSION['username']; ?></a>
                    </h3>
                </div>
                <div class="row">
                    <a href="add-funds">Balance: $<?php echo $userData['balance']; ?></a>
                </div>
            </div>
        </div>

        <div class="responsive-menu">
            <a href="#"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Sidebar User Profile End -->

        <!-- Menu Start -->
        <ul class="menu">
            <li class="lightblue">
                <a href="/">
                    <span class="menu-icon"><i class="fa fa-home"></i></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="lightblue">
                <a href="/">
                    <span class="menu-icon"><i class="fa fa-dollar"></i></span>
                    <span class="menu-text">Add Funds</span>
                </a>
            </li>
            <li class="orange">
                <a href="">
                    <span class="menu-icon"><i class="fa fa-info"></i></span>
                    <span class="menu-text">Order Status</span>
                    <span class="notification lightgreen">62</span>
                </a>
            </li>
            <li class="lightred">
                <a href="">
                    <span class="menu-icon"><i class="fa fa-sticky-note"></i></span>
                    <span class="menu-text">Terms</span>
                </a>
            </li>
            <li class="lightred">
                <a href="">
                    <span class="menu-icon"><i class="fa fa-question"></i></span>
                    <span class="menu-text">FAQ</span>
                </a>
            </li>
        </ul>
        <!-- Menu End -->

    </div>
    <!-- Sidebar End -->

    <div class="content-liquid-full">
        <div class="container">

            <!-- Header Bar Start -->
            <div class="row header-bar" id="step2">

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs hidden-sm">

                </div>

                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <ul class="right-icons" id="step3">
                        <li>
                            <a href="#" class="email">
                                <i class="fa fa-support"></i>
                                <div class="notify">13</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="info">
                                <i class="fa fa-info"></i>
                                <div class="notify">2</div>
                            </a>
                            <ul class="dropdown big">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle green"></i>
                                        Uploaded successfully
                                        <span class="description">1 minute ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-comments blue"></i>
                                        Jenna commented on your link
                                        <span class="description">1 hour ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar orange"></i>
                                        Jason invited you on a event
                                        <span class="description">3 hours ago</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="settings"><i class="fa fa-cog"></i></a>
                        </li>
                        <li>
                            <a href="#" class="lock"><i class="fa fa-times-circle"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

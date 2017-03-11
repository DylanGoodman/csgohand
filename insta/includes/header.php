<!doctype html>
<html class="fuelux" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Simplicity V2</title>

  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/weather-icons/weather-icons.min.css">

  <link rel="stylesheet" type="text/css" href="assets/effects/menu-effects.css">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100italic,100,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <!-- Assets -->
  <link rel='stylesheet' type='text/css' href='assets/jquery-ui/ui-lightness/jquery-ui-1.10.3.custom.css' />
  <link rel='stylesheet' type='text/css' href='assets/morrischarts/morris.css' />
  <link rel='stylesheet' type='text/css' href='assets/fullcalendar/fullcalendar.css' />
  <link rel='stylesheet' type='text/css' href='assets/datatables/jquery.dataTables.css' />

  <!-- Theme Styles -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="_demo/demo.css">

  <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="assets/flotcharts/excanvas.min.js"></script><![endif]-->

  <!-- Google Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<style type="text/css">
  #map-canvas {
    height: 100%;
    margin: 0px;
    padding: 0px
  }

</style>

  <?php
  global $css;
  if (is_array($css)) {
  foreach ($css as $key => $file) {
    echo '<link rel="stylesheet" type="text/css" href="' . $file . '"/>';
  }}
  ?>

  <link rel="shortcut icon" href="favicon.ico" type="image/png">
  <link rel="shortcut icon" type="image/png" href="favicon.ico" />

</head>

<body>
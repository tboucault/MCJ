<?php
if(session_status() == PHP_SESSION_NONE){
	session_start();
}
require 'inc/functions.php';
require 'inc/db.php';
reconnect_from_cookie();
?>
<!DOCTYPE html>
<!--[if IE 9]> <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<title>Master Class Jazz</title>
	<meta name="keywords" content="master class jazz" />
	<meta name="description" content="Site Master Class Jazz Licence AII Thomas Boucault">

	<!-- Favicons -->
	<link rel="shortcut icon" type='image/x-icon' href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/apple-touch-icon-precomposed.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Font -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/library/bootstrap/bootstrap.css" />

	<!-- Animate -->
	<link rel="stylesheet" href="css/library/animate/animate.min.css" />

	<!-- Icons -->
	<link rel="stylesheet" href="css/fonts/awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/fonts/icomoon/style.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.min.css">
	<link rel="stylesheet" href="css/theme-components.min.css">
	<link rel="stylesheet" href="css/colors/teal.css">

	<!-- Modernizr -->
	<script type="text/javascript" src="js/library/Modernizr/modernizr.min.js"></script>

	<link rel="stylesheet" href="css/iziToast.css">
	<script src="js/iziToast.js"></script>


</head>

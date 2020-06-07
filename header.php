<?php
	session_start();
	
	if(empty($_SESSION["user_type"]))
	{
		$_SESSION["user_type"] = $_POST["user_type"];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<style type="text/css">
		html, body
		{
			height: 100vh;
		}
		body
		{
			font-family: "Roboto", sans-serif;
			font-weight: 400;
			font-size: 13px;
			overflow: hidden;
			background: url(images/bg_turistando.jpg);
			background-size: cover;
			background-position: 0px 0px;
		}
		label
		{
			font-weight: bold;
			font-size: 14px;
		}

		.btn
		{
			font-size: 0.8rem;
		}

		.pessoas h5, .pessoa h5
		{
			font-weight: 900;
			font-size: 20px;
		}
		a:hover
		{
			text-decoration: none;
		}
		p
		{
			margin-bottom: 5px;
		}
		.container, .row
		{
			margin-bottom: 10px;
		}
		img
		{
			border-radius: 5px;
		}

		.pessoas
		{
			height: 92vh;
			overflow: scroll;
		}

		.guia
		{
			height: 79vh;
			overflow: scroll;
		}

		.usuario
		{
			height: 92vh;
			overflow: scroll;
		}
		
		.pessoas .col-4
		{
			padding-right: 0;
		}

		.menu
		{
			cursor: pointer;
		}

		.menu_user
		{
			width: 85%;
			position: absolute;
			height: 568px;
			left: -300px;
			top: 0;
			background: #f3f3f3;
			z-index: 10;
			border-right: 2px solid #444;
			padding: 15px 0;

			transition: all 1s;
			-webkit-transition: all 1s;
			-moz-transition: all 1s;
			-ms-transition: all 1s;
			-o-transition: all 1s;
		}

		.menu_user img
		{
			border-radius: 100px;
		}

		.menu_user.open
		{
			left: 0px;
		}

		.detalhes
		{
			display: inline-block;
			cursor: pointer;
		}

		.chat_left
		{
			margin: 5px 0;
			float: left;
			width: 80%;
			background: #dedbdb;
			padding: 5px 10px;
			border-radius: 6px;
		}

		.chat_right
		{
			margin: 5px 0;
			float: right;
			width: 80%;
			background: #b5b3b3;
			padding: 5px 10px;
			border-radius: 6px;
		}
	</style>

	<script type="text/javascript">
		$(function(){
			$(".menu").click(function(){
				$(".menu_user").toggleClass("open");
			});

			$(".detalhes").click(function(){
				$(".support_list").hide();
				$(".support_single").fadeIn();
			});
		});
	</script>
</head>
<body>
	<img src="images/header.jpg" width="100%" style="margin-bottom: 5px;">
	<?php require_once("menu_user.php"); ?>
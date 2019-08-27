<?php
	include 'baglan.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ARBA</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="img/fav.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:800&display=swap');
		@media only screen and (min-device-width: 1024px) and (max-device-width: 1440px){
			body{
				background-image: url('img/bg.jpg');
				background-size: 100%;
			}
		}

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px){
			body{
				background-image: url('img/bg.jpg');
				background-size: 150%;
			}
		}

		@media only screen and (min-device-width: 425px) and (max-device-width: 768px){
			body{
				background-image: url('img/bg.jpg');
				background-size: 175%;
			}
		}

		@media only screen and (min-device-width: 375px) and (max-device-width: 425px){
			body{
				background-image: url('img/bg.jpg');
				background-size: 210%;
			}
		}

		@media only screen and (min-device-width: 320px) and (max-device-width: 375px){
			body{
				background-image: url('img/bg.jpg');
				background-size: 240%;
			}
		}

		.oyna{
			background-color: rgb(255, 255, 255, 0.55);
			border-radius: 20px;
			font-family: 'Montserrat';
			font-size: 70px;
			padding: 20px;
			margin-top: 100px;
		}
		.kayit{
			background-color: rgb(255, 255, 255, 0.55);
			border-radius: 20px;
			font-family: 'Montserrat';
			font-size: 70px;
			padding: 20px;
			margin-top: 100px;
		}
		.oyna a{
			text-decoration: none;
			color: black;
		}
		.oyna:hover{
			background-color: #2e78f0;
		}
		.kayit a{
			text-decoration: none;
			color: black;
		}
		.kayit:hover{
			background-color: #2e78f0;
		}
		#tg{
			position: relative;
			bottom: 260px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 oyna align-middle" align="center"><a href="home.php">
				<img src="img/oyna.png"> <b class="kal">OYNA</b>
			</a></div>
			<div class="col-md-4"></div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 kayit align-middle" align="center"><a href="kayit.php">
				<img src="img/kayit.png"> <b class="kal">KAYIT</b>
			</a></div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>
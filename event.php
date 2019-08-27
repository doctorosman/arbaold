<?php 
	session_start();
	include 'baglan.php';

	if ($_SESSION['giris'] != "ok") {
		header("Location: index.php");
	}

	$bizzat = $_SESSION['kadi'];

	### LCDP

	$fad = "lcdp";

	$fget = $baglan->query("SELECT * FROM etkinlikler WHERE etkinlik_adi = '$fad' AND uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC);

	$_SESSION['lcdpasama'] = $fget['etkinlik_asama'];

	if (!$fget) {
		$fekle = $baglan->prepare("INSERT INTO etkinlikler SET etkinlik_adi = ? , uye_kadi = ?");
		$fekl = $fekle->execute(array("lcdp", $bizzat));
		$_SESSION['lcdpasama'] = 0;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ARBA</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="img/fav.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:800&display=swap');
		body{
			background-image: url('img/bg2.jpg');
			background-size: 100%;
			background-attachment: fixed;
		}
		.ust{
			background-color: white;
			padding: 10px;
			height: 200px;
		}
		.ust h3{
			font-size: 36px;
			font-family: 'Montserrat';
			float: left;
		}
		.ust img{
			height: 30%;
			width: 30%;
		}
		.ust h3:hover{
			color: darkgreen;
			cursor: default;
		}
		.ust a{
			font-size: 25px;
			position: relative;
			top: 45px;
			right: 348px;
		}
		.vucut{
			padding: 20px;
			background-color: white;
			margin-top: 20px;
			height: 700px;
		}
		.bolum{
			width: 40%;
			float: left;
		}
		.bolum img{
			border-radius: 20px;
			width: 50%;
		}
		.bolum h4{
			position: relative;
			left: 57px;
			top: 5px;
		}
		.bolum h5{
			position: relative;
			left: 43px;
			top: 5px;
		}
		#b2{
			position: relative;
			right: 145px;
		}
		#b3{
			position: relative;
			bottom: 373px;
			left: 570px;
		}
		#b4{
			position: relative;
			bottom: 373px;
			left: 430px;
		}
		body{
			overflow-x: hidden;
		}
	</style>
</head>
<body>
	<?php if ($_GET['etkinlik'] == "lcdp"){ ?>
		<div class="container">
			<div class="ust"><center>
				<img src="img/lcdp.png"></center>
			</div>
		</div>
		<div class="container">
			<div class="vucut">
				<h4>Etkinlik Aşaması: <?php echo $_SESSION['lcdpasama']; ?></h4>
				<div class="bolum">
					<img src="img/karakter/2nairobi.png">
					<br><h4>1. Aşama</h4><h5><i>20 oyun oyna.</i></h5>
				</div>
				<div id="b2" class="bolum">
					<img src="img/karakter/2denver.png">
					<br><h4>2. Aşama</h4><h5><i>Toplamda 20 karakter al.</i></h5>
				</div>
				<div id="b3" class="bolum">
					<img src="img/karakter/2rio.png">
					<br><h4>3. Aşama</h4><h5><i>50 oyun oyna.</i></h5>
				</div>
				<div id="b4" class="bolum">
					<img src="img/karakter/2tokyo.png">
					<br><h4>4. Aşama</h4><h5><i>1</i></h5>
				</div>
				<div id="b5" class="bolum">
					<img src="img/karakter/2profesor.png">
					<br><h4>5. Aşama</h4><h5><i>20 oyun oyna.</i></h5>
				</div>
				<div id="b6" class="bolum">
					<img src="img/karakter/2berlin.png">
					<br><h4>6. Aşama</h4><h5><i>20 oyun oyna.</i></h5>
				</div>
				<div id="b7" class="bolum">
					<img src="img/anichest.png">
					<br><h4>7. Aşama</h4><h5><i>20 oyun oyna.</i></h5>
				</div>
				<div class="progress">
					<div class="progress-bar bg-info" style="width:<?php echo $_SESSION['lcdpbolum']; ?>%;"></div>
				</div>
			</div>
		</div>
	<?php } ?>
</body>
</html>
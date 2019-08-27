<?php session_start(); include 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>ARBA</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="img/fav.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:800&display=swap');

		/* Laptop L  */
		@media only screen and (min-device-width: 1024px) and (max-device-width: 1440px){
			body{
				background-image: url('img/bg2.jpg');
				background-size: 100%;
			}

			.foram{
			background-color: rgb(255, 255, 255, 0.55);
			padding: 30px;
			border-radius: 20px;
			font-size: 20px;
			margin-top: 160px;
		}
		.foram input{
			margin-bottom: 10px;
		}
		#bilgi{
			margin-top: 160px;
			background-color: white;
			padding: 15px;
			border-radius: 5px;
			max-height: 280px;
		}
		.info img{
			height: 50px;
			width: 50px;
		}
		.c1{
			height: 30%;
			width: 30%;
			position: relative;
			float: left;
			top: 50px;
		}
		.c1 img{
			border: 2px solid white;
			border-radius: 20px;
			height: 100%;
			width: 100%;
		}
		.c2{
			height: 30%;
			width: 30%;
			position: relative;
			bottom: 85px;
			left: 50px;
		}
		.c2 img{
			border: 2px solid white;
			border-radius: 20px;
			height: 100%;
			width: 100%;
		}
		.c3{
			height: 30%;
			width: 30%;
			position: relative;
			bottom: 220px;
			left: 100px;
		}
		.c3 img{
			border: 2px solid white;
			border-radius: 20px;
			height: 100%;
			width: 100%;
		}
		.c4{
			height: 30%;
			width: 30%;
			position: relative;
			bottom: 355px;
			left: 150px;
		}
		.c4 img{
			border: 2px solid white;
			border-radius: 20px;
			height: 100%;
			width: 100%;
		}
		.c5{
			height: 30%;
			width: 30%;
			position: relative;
			bottom: 490px;
			left: 200px;
		}
		.c5 img{
			border: 2px solid white;
			border-radius: 20px;
			height: 100%;
			width: 100%;
		}
		}

		/* Laptop */

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px){
			body{
				background-image: url('img/bg2.jpg');
				background-size: 140%;
			}
			.foram{
				background-color: rgb(255, 255, 255, 0.55);
				padding: 30px;
				border-radius: 20px;
				font-size: 20px;
				margin-top: 160px;
			}
			.foram input{
				margin-bottom: 10px;
			}
			#bilgi{
				margin-top: 160px;
				background-color: white;
				padding: 15px;
				border-radius: 5px;
				max-height: 280px;
			}
			.info img{
				height: 50px;
				width: 50px;
			}
			.c1{
				height: 40%;
				width: 40%;
				position: relative;
				float: left;
				top: 25px;
			}
			.c1 img{
				border: 2px solid white;
				border-radius: 15px;
				height: 100%;
				width: 100%;
			}
			.c2{
				height: 40%;
				width: 40%;
				position: relative;
				top: -122px;
				left: 25px;
			}
			.c2 img{
				border: 2px solid white;
				border-radius: 15px;
				height: 100%;
				width: 100%;
			}
			.c3{
				height: 40%;
				width: 40%;
				position: relative;
				top: -268px;
				left: 50px;
			}
			.c3 img{
				border: 2px solid white;
				border-radius: 15px;
				height: 100%;
				width: 100%;
			}
			.c4{
				height: 40%;
				width: 40%;
				position: relative;
				top: -415px;
				left: 75px;
			}
			.c4 img{
				border: 2px solid white;
				border-radius: 15px;
				height: 100%;
				width: 100%;
			}
			.c5{
				height: 40%;
				width: 40%;
				position: relative;
				top: -562px;
				left: 100px;
			}
			.c5 img{
				border: 2px solid white;
				border-radius: 15px;
				height: 100%;
				width: 100%;
			}
		}

		@media only screen and (min-device-width: 425px) and (max-device-width: 768px){
			body{
				background-image: url('img/bg2.jpg');
				background-size: 175%;
			}
		}

		@media only screen and (min-device-width: 375px) and (max-device-width: 425px){
			body{
				background-image: url('img/bg2.jpg');
				background-size: 210%;
			}
		}

		@media only screen and (min-device-width: 320px) and (max-device-width: 375px){
			body{
				background-image: url('img/bg2.jpg');
				background-size: 240%;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="foram col-md-4">
				<form method="POST">
					<label for="ad"><b>İsim - Soyisim</b></label>
					<input class="form-control" id="ad" type="text" name="adsoyad">
					<label for="kadi"><b>Kullanıcı Adı</b></label>
					<input class="form-control" maxlength="16" id="kadi" type="text" name="kadi">
					<label for="sifre"><b>Şifre</b></label>
					<input class="form-control" id="sifre" type="password" name="sifre">
					<input class="btn btn-primary" type="submit" value="Kayıt Ol" name="">
				</form>
			</div>
			<div class="col-md-4">
				
				<div id="bilgi">
					<span class="info"><img src="img/info.png"></span>
					<b>Kayıt olduğunuzda 5 adet ücretsiz karakter alacaksınız.</b>
					<div class="c1">
						<img src="img/karakter/caylak.png">
					</div>
					<div class="c2">
						<img src="img/karakter/v.png">
					</div>
					<div class="c3">
						<img src="img/karakter/lapkin.png">
					</div>
					<div class="c4">
						<img src="img/karakter/eniste.png">
					</div>
					<div class="c5">
						<img src="img/karakter/amazona.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	if ($_POST) {
		$adsoyad = $_POST['adsoyad'];
		$kadi = $_POST['kadi'];
		$sifre = $_POST['sifre'];

		if ($adsoyad && $kadi && $sifre){
			if (strlen($adsoyad) >= 3 && strlen($adsoyad) < 16){
				if(strlen($kadi) >= 3){
					if (strlen($sifre) >= 6){

						$varmi = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$kadi'")->fetch(PDO::FETCH_ASSOC);

						if ($varmi){
							echo "<script>alert('Bu kullanıcı adı daha önce alınmış!');</script>";
						}else{
							$kaydet = $baglan->prepare("INSERT INTO uyeler SET uye_adsoyad = ?, uye_kadi = ?, uye_sifre = ?, uye_para = ?");
							$kaydett = $kaydet->execute(array($adsoyad, $kadi, $sifre, 500));

							if ($kaydett){
								$satinAl = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?");
								$satinAll = $satinAl->execute(array($kadi, 1));

								$satinAl = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?");
								$satinAll = $satinAl->execute(array($kadi, 4));

								$satinAl = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?");
								$satinAll = $satinAl->execute(array($kadi, 7));

								$satinAl = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?");
								$satinAll = $satinAl->execute(array($kadi, 11));

								$satinAl = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?");
								$satinAll = $satinAl->execute(array($kadi, 12));

								$ekleKart = $baglan->prepare("INSERT INTO uye_kartlar SET uye_kadi = ?, kart1_id = ?, kart2_id = ?");
								$ekleKartt = $ekleKart->execute(array($kadi, 1, 4));

								$ekleKart2 = $baglan->prepare("UPDATE uye_kartlar SET kart3_id = ?, kart4_id = ?, kart5_id = ? WHERE uye_kadi = ?");
								$ekleKartt2 = $ekleKart2->execute(array(7, 11, 12, $kadi));


								header("Location: oyna.php");
							}
						}
					}else {
						echo "<script>alert('Şifreniz 6 haneden kısa olamaz!');</script>";
					}
				}else {
					echo "<script>alert('Kullanıcı adınız 3 haneden kısa olamaz');</script>";
				}
			}else {
				echo "<script>alert('Adınız 3 haneden kısa ve 16 haneden uzun olamaz!');</script>";
			}
		}else {
			echo "<script>alert('Boş alan bırakmayınız');</script>";
		}
	}
?>
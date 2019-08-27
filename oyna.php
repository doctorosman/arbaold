<?php session_start(); include 'baglan.php'; ?>
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
				background-image: url('img/bg2.jpg');
				background-size: 100%;
			}
		}

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px){
			body{
				background-image: url('img/bg2.jpg');
				background-size: 150%;
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
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-3 col-sm-1"></div>
			<div class="foram col-lg-4 col-md-6 col-sm-10">
				<form method="POST">
					<label for="kadi"><b>Kullanıcı Adı</b></label>
					<input class="form-control" id="kadi" type="text" name="kadi">
					<label for="sifre"><b>Şifre</b></label>
					<input class="form-control" id="sifre" type="password" name="sifre">
					<input class="btn btn-primary" type="submit" value="Giriş Yap" name="">
				</form>
			</div>
			<div class="col-lg-4 col-md-3 col-sm-1"></div>
		</div>
	</div>
</body>
</html>
<?php
	if ($_POST){
		$kadi = $_POST['kadi'];
		$sifre = $_POST['sifre'];

		if ($kadi && $sifre){
			$giris = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$kadi' AND uye_sifre = '$sifre'")->fetch(PDO::FETCH_ASSOC);

			if ($giris){
				$_SESSION['giris'] = "ok";
				$_SESSION['kadi'] = $kadi;
				$_SESSION['sifre'] = $sifre;
				$_SESSION['adsoyad'] = $giris['uye_adsoyad'];
				$_SESSION['para'] = $giris['uye_para'];
				$_SESSION['seviye'] = $giris['uye_seviye'];
				$_SESSION['xp'] = $giris['xp'];

				header("Location: home.php");
			}else {
				echo "<script>alert('Kullanıcı adı veya şifre yanlış!');</script>";
			}
		}
	}
?>
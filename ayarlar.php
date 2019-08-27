<?php
	session_start();
	include 'baglan.php';

	if ($_SESSION['giris'] != "ok"){
		header("Location: index.php");
	}

	function altTire($str){
		$string = str_replace(' ', '_', $str);
		return $string;
	}

	function raltTire($str){
		$string = str_replace('_', ' ', $str);
		return $string;
	}

	$bizzat = $_SESSION['kadi'];

	#$check = $baglan->prepare("INSERT INTO uye_kartlar SET uye_kadi = ?");
	#$ccheck =  $check->execute(array($bizzat));
?>
<!DOCTYPE html>
<html>
<head>
	<title>ARBA</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="img/fav.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:800&display=swap');
		@import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
		body{
			background-image: url('img/bg2.jpg');
			background-size: 100%;
			background-attachment: fixed;
		}
		#ayar{
			background-color: white;
			margin-top: 100px;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			height: 1000px;
		}
		.home{
			border-radius: 50px;
			background-color: rgb(255, 255, 255, 0.9);
			padding: 10px;
			width: 70px;
			float: right;
			margin-right: 10px;
		}
		.home:hover{
			cursor: pointer;
		}
		.menu{
			background-color: darkred;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			margin-top: 100px;
			height: 72px;
		}
		.bkart{
			height: 15%;
			width: 15%;
			float: left;
			background-color: rgb(255, 255, 255, 0.5);
			border-radius: 20px;
			margin: 20px;
			position: relative;
			left: 35px;
		}
		.bkart img{
			height: 100%;
			border-radius: 20px;
			width: 100%;
		}
		#secim{
			width: 200px;
			border-radius: 20px;
			font-family: 'Roboto';
			float: left;
			margin-left: 10px;
			position: relative;
			left: 20px;
		}
		h3{
			padding: 20px;
			padding-bottom: 0px;
			font-family: 'Montserrat';
		}
		.secilen input{
			position: relative;
			top: 40px;
		}
		.buton{
			width: 80px;
			margin-left: auto;
			margin-right: auto;
		}
		.sifre-deg h3{
			padding: 0px;
		}
		.sifre-deg{
			margin-top: 50px;
			padding: 20px;
			margin-right: 780px;
			position: relative;
			left: 420px;
		}
		.sifre-deg form{
			padding: 15px;
		}
		.sifre-deg form input{
			width: 250px;
		}
		.para-gonder form input{
			width: 250px;
			position: relative;
			top: 10px;
		}
		.para-gonder textarea{
			width: 250px;
		}
		.para-gonder form{
			padding: 15px;
		}
		.para-gonder{
			padding: 20px;
			margin-top: 50px;
		}
		.para-gonder h3{
			padding: 0px;
		}
		.koy img{
			height: 40px;
			width: 40px;
			position: relative;
			bottom: 39px;
			left: 206px;
		}
		.para-gonder input[type=submit]{
			position: relative;
			bottom: 40px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div id="ayar">
			<div class="menu">
				<a href="home.php">
					<div class="home">
						<img height="50" width="50" src="img/home.png">
					</div>
				</a>
			</div>
			<div class="kartlar">
				<h3>Oyunda Kullanılacak Kartlar</h3>
				<?php
					$kartV = $baglan->query("SELECT * FROM uye_kartlar WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC);
					if ($kartV){
						$_SESSION['kart1'] = $kartV['kart1_id'];
						$_SESSION['kart2'] = $kartV['kart2_id'];
						$_SESSION['kart3'] = $kartV['kart3_id'];
						$_SESSION['kart4'] = $kartV['kart4_id'];
						$_SESSION['kart5'] = $kartV['kart5_id'];
					}

					$kart1 = $_SESSION['kart1'];
					$kart2 = $_SESSION['kart2'];
					$kart3 = $_SESSION['kart3'];
					$kart4 = $_SESSION['kart4'];
					$kart5 = $_SESSION['kart5'];

					$kartS1 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kart1'")->fetch(PDO::FETCH_ASSOC);
					echo "<div class='bkart'><img src='img/karakter/".$kartS1['kart_konum']."'></div>";

					$kartS2 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kart2'")->fetch(PDO::FETCH_ASSOC);
					echo "<div class='bkart'><img src='img/karakter/".$kartS2['kart_konum']."'></div>";

					$kartS3 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kart3'")->fetch(PDO::FETCH_ASSOC);
					echo "<div class='bkart'><img src='img/karakter/".$kartS3['kart_konum']."'></div>";

					$kartS4 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kart4'")->fetch(PDO::FETCH_ASSOC);
					echo "<div class='bkart'><img src='img/karakter/".$kartS4['kart_konum']."'></div>";

					$kartS5 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kart5'")->fetch(PDO::FETCH_ASSOC);
					echo "<div class='bkart'><img src='img/karakter/".$kartS5['kart_konum']."'></div>";
				?>
			</div>
			<div class="secilen">
				<form method="POST">
					<div class="form-group">
					<select id="secim" class="form-control" name="kart1">
						<option value="x" selected>1. Kart</option>
						<?php
							$satinAlGet = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
							if ($satinAlGet) {
								foreach ($satinAlGet as $dut) {
									$kartid = $dut['alinan_urun_id'];

									if ($kartid != 0) {

										$kartGet = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kartid'")->fetch(PDO::FETCH_ASSOC);

										$kart_ad = $kartGet['karakter_adi'];

										echo "<option value='".altTire($kart_ad)."'>".$kart_ad."</option>";
									}
								}
							}
						?>
					</select>
					<select id="secim" class="form-control" name="kart2">
						<option value="x" selected>2. Kart</option>
						<?php
							$satinAlGet = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
							if ($satinAlGet) {
								foreach ($satinAlGet as $dut) {
									$kartid = $dut['alinan_urun_id'];

									if ($kartid != 0) {

										$kartGet = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kartid'")->fetch(PDO::FETCH_ASSOC);

										$kart_ad = $kartGet['karakter_adi'];

										echo "<option value='".altTire($kart_ad)."'>".$kart_ad."</option>";
									}
								}
							}
						?>
					</select>
					<select id="secim" class="form-control" name="kart3">
						<option value="x" selected>3. Kart</option>
						<?php
							$satinAlGet = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
							if ($satinAlGet) {
								foreach ($satinAlGet as $dut) {
									$kartid = $dut['alinan_urun_id'];

									if ($kartid != 0) {
										$kartGet = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kartid'")->fetch(PDO::FETCH_ASSOC);

										$kart_ad = $kartGet['karakter_adi'];

										echo "<option value='".altTire($kart_ad)."'>".$kart_ad."</option>";
									}
								}
							}
						?>
					</select>
					<select id="secim" class="form-control" name="kart4">
						<option value="x" selected>4. Kart</option>
						<?php
							$satinAlGet = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
							if ($satinAlGet) {
								foreach ($satinAlGet as $dut) {
									$kartid = $dut['alinan_urun_id'];

									if ($kartid != 0){

										$kartGet = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kartid'")->fetch(PDO::FETCH_ASSOC);

										$kart_ad = $kartGet['karakter_adi'];

										echo "<option value='".altTire($kart_ad)."'>".$kart_ad."</option>";
									}
								}
							}
						?>
					</select>
					<select id="secim" class="form-control" name="kart5">
						<option value="x" selected>5. Kart</option>
						<?php
							$satinAlGet = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
							if ($satinAlGet) {
								foreach ($satinAlGet as $dut) {
									$kartid = $dut['alinan_urun_id'];

									if ($kartid != 0){

									$kartGet = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$kartid'")->fetch(PDO::FETCH_ASSOC);

									$kart_ad = $kartGet['karakter_adi'];

									echo "<option value='".altTire($kart_ad)."'>".$kart_ad."</option>";
								}
								}
							}
						?>
					</select>
					</div>
					<div class="buton">
						<input type="submit" value="Kaydet" class="btn btn-primary" name="kartsira">
					</div>
				</form>
			</div>

			<?php if ($_SESSION['kadi'] == "dctosman" || $_SESSION['kadi'] == "admin"): ?>
				<div class="para-gonder">
					<h3>Oyunculara Bildirim Gönder</h3>
					<form method="POST">
						<div class="form-group">
							<label for="kul">Bildirim</label>
							<textarea rows="10" cols="50" class="form-control" id="kul" name="bild"></textarea>
						</div>
						<input type="submit" value="Gönder" class="btn btn-primary" name="bildgonder">
					</form>
				</div>
			<?php endif ?>
			<div class="sifre-deg">
				<h3>Şifre Değiştirme</h3>
				<form method="POST">
					<div class="form-group">
						<label for="mevcut">Mevcut Şifre</label>
						<input type="password" class="form-control" id="mevcut" name="msifre">
					</div>
					<div class="form-group">
						<label for="yeni">Yeni Şifre</label>
						<input type="password" class="form-control" id="yeni" name="ysifre">
					</div>
					<div class="form-group">
						<label for="yenit">Yeni Şifre Tekrar</label>
						<input type="password" class="form-control" id="yenit" name="ysifret">
					</div>
					<input type="submit" class="btn btn-primary" value="Değiştir" name="sifredegistir">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	if ($_POST['kartsira']){
		$k1 = raltTire($_POST['kart1']);
		$k2 = raltTire($_POST['kart2']);
		$k3 = raltTire($_POST['kart3']);
		$k4 = raltTire($_POST['kart4']);
		$k5 = raltTire($_POST['kart5']);

		if ($k1 == "x" || $k2 == "x" || $k3 == "x" || $k4 == "x" || $k5 == "x") {
			echo "<script>alert('Lütfen seçim yapınız!');</script>";
		}else {
			if ($k1 == $k2 || $k1 == $k3 || $k1 == $k4 || $k1 == $k5 || $k2 == $k3 || $k2 == $k4 || $k2 == $k5 || $k3 == $k4 || $k3 == $k5 || $k4 == $k5) {
				echo "<script>alert('İki seçim aynı olamaz');</script>";
			}else {
				$kart1Get = $baglan->query("SELECT * FROM kartlar WHERE karakter_adi = '$k1'")->fetch(PDO::FETCH_ASSOC);
				$ky1 = $kart1Get['kart_id'];

				$kart2Get = $baglan->query("SELECT * FROM kartlar WHERE karakter_adi = '$k2'")->fetch(PDO::FETCH_ASSOC);
				$ky2 = $kart2Get['kart_id'];

				$kart3Get = $baglan->query("SELECT * FROM kartlar WHERE karakter_adi = '$k3'")->fetch(PDO::FETCH_ASSOC);
				$ky3 = $kart3Get['kart_id'];

				$kart4Get = $baglan->query("SELECT * FROM kartlar WHERE karakter_adi = '$k4'")->fetch(PDO::FETCH_ASSOC);
				$ky4 = $kart4Get['kart_id'];

				$kart5Get = $baglan->query("SELECT * FROM kartlar WHERE karakter_adi = '$k5'")->fetch(PDO::FETCH_ASSOC);
				$ky5 = $kart5Get['kart_id'];

				$yerIns = $baglan->prepare("UPDATE uye_kartlar SET kart1_id = ? WHERE uye_kadi = ?");
				$yyerIns = $yerIns->execute(array($ky1, $bizzat));

				$yer2Ins = $baglan->prepare("UPDATE uye_kartlar SET kart2_id = ? WHERE uye_kadi = ?");
				$yyer2Ins = $yer2Ins->execute(array($ky2, $bizzat));

				$yer3Ins = $baglan->prepare("UPDATE uye_kartlar SET kart3_id = ? WHERE uye_kadi = ?");
				$yyer3Ins = $yer3Ins->execute(array($ky3, $bizzat));
				
				$yer4Ins = $baglan->prepare("UPDATE uye_kartlar SET kart4_id = ? WHERE uye_kadi = ?");
				$yyer4Ins = $yer4Ins->execute(array($ky4, $bizzat));

				$yer5Ins = $baglan->prepare("UPDATE uye_kartlar SET kart5_id = ? WHERE uye_kadi = ?");
				$yyer5Ins = $yer5Ins->execute(array($ky5, $bizzat));

				if ($yyerIns && $yyer2Ins && $yyer3Ins && $yyer4Ins && $yyer5Ins){
					echo "<script>window.location = 'home.php';</script>";
				}
			}
		}
	}

	if ($_POST['sifredegistir']){
		$msifre = $_POST['msifre'];
		$ysifre = $_POST['ysifre'];
		$ysifret = $_POST['ysifret'];

		if ($msifre != $_SESSION['sifre']){
			echo "<script>alert('Mevcut şifreniz yanlış!');</script>";
		}else {
			if (strlen($ysifre) < 6){
				echo "<script>alert('Şifre 6 haneden kısa olamaz!');</script>";
			}else {
				if ($ysifre != $ysifret){
					echo "<script>alert('Şifreler uyuşmuyor!');</script>";
				}else {
					$sifreUpd = $baglan->prepare("UPDATE uyeler SET uye_sifre = ? WHERE uye_kadi = ?");
					$sifreUp = $sifreUpd->execute(array($ysifre, $bizzat));

					if ($sifreUp) {
						echo "<script>alert('Şifreniz değiştirildi!'); window.location = 'home.php';</script>";
					}
				}
			}
		}
	}

	if ($_POST['paragonder']) {
		$gkadi = $_POST['gkad'];
		$gpara = $_POST['gpar'];

		### EASTER EGG

		$easterGel = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);

		if ($gkadi == "harclik" && $gpara == 100){
			foreach ($easterGel as $r){
				if ($r['alinan_urun_id'] == 0){
					$karkar = True;
					echo "<script>alert('Serin gel adamım, bir hileyi iki defa kullanamazsın!?%/_$%/_');</script>";
				}
			}
			if (!$karkar){
				echo "<script>alert('Harçlık mı istiyorsun adamım! Beni nerden buldun?%/_$%/_');</script>";
				$_SESSION['para'] += 750;
				$hulhul = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
				$hulhu = $hulhul->execute(array($_SESSION['para'], $bizzat));

				$goygoy = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?");
				$goygo = $goygoy->execute(array($bizzat, 0));
			}
		}else if (!$gkadi || !$gpara){
			echo "<script>alert('Boş alan bırakmayınız!');</script>";
		}else if($gpara >= 100){
			$kontuye = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$gkadi'")->fetch(PDO::FETCH_ASSOC);

			if ($kontuye){
				$gkpara = $kontuye['uye_para'];

				if ($gpara <= $_SESSION['para']) {
					$gnpara = $gkpara + $gpara;

					$paraGett = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC);

					$_SESSION['para'] = $paraGett['uye_para'];

					$gapara = $_SESSION['para'] - $gpara;

					$paraGond11 = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
					$paraGond12 = $paraGond11->execute(array($gnpara, $gkadi));
					$paraGond21 = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
					$paraGond22 = $paraGond21->execute(array($gapara, $bizzat));

					echo "<script>alert('Para gönderme işlemi başarılı!'); window.location = 'home.php'</script>";
 				}else {
					echo "<script>alert('Yeterli paranız yok!');</script>";
				}
			}else {
				echo "<script>alert('Böyle bir kullanıcı yok!');</script>";
			}
		}else {
			echo "<script>alert('Minimum 100 gönderilebilir!');</script>";
		}
	}

	if ($_POST['bildgonder']) {
		$bildirim = $_POST['bild'];

		$uyeCek = $baglan->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);

		foreach ($uyeCek as $triko) {
			$ekleee = $baglan->prepare("INSERT INTO bildirimler SET bildirim = ?, alan_kadi = ?, bildirim_tur = ?");
			$eklees = $ekleee->execute(array($bildirim, $triko['uye_kadi'], "duyuru"));
		}

	}
?>
<?php
	ob_start();
	session_start();
	include 'baglan.php';

	if ($_SESSION['giris'] != "ok") {
		header("Location: index.php");
	}

	$bizzat = $_SESSION['kadi'];

	function altTire($str){
		$string = str_replace(' ', '_', $str);
		return $string;
	}

	function raltTire($str){
		$string = str_replace('_', ' ', $str);
		return $string;
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
		#sosyal{
			background-color: white;
			margin-top: 100px;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			min-height: 650px;
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
		h3{
			padding: 20px;
			padding-bottom: 0px;
			font-family: 'Montserrat';
		}
		.ark form{
			padding: 20px;
		}
		.ark form input{
			position: relative;
			bottom: 10px;
		}
		.ark form input[type=text] {
			width: 200px;
		}
		.ark form input[type=submit] {
			position: relative;
			bottom: 49px;
			left: 210px;
		}
		.ark table tr td{
			padding: 20px;
		}
		#iks{
			font-family: 'Montserrat';
			font-size: 21.5px;
		}
		#as{
			font-size: 19px;
		}
		.islem{
			background-color: white;
			padding: 20px;
			width: 380px;
		}
		.islem form{
			margin-top: 30px;
			padding: 20px;
		}
		.islem form input{
			width: 300px;
		}
		.islem h3{
			padding: 0px;
		}
		.islem a{
			font-size: 20px;
		}
		.koy img{
			height: 40px;
			width: 40px;
			position: absolute;
			top: 238px;
			left: 405px;
		}
		.koya img{
			height: 40px;
			width: 40px;
			position: absolute;
			top: 258px;
			left: 425px;
		}
		h5{
			color: darkblue;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php if (!$_GET): ?>
			
		<div id="sosyal">
			<div class="menu">
				<a href="home.php">
					<div class="home">
						<img height="50" width="50" src="img/home.png">
					</div>
				</a>
			</div>
			<div class="ark">
				<h3>Oyuncular</h3>
				<form method="POST">
					<input class="form-control" placeholder="Kullanıcı adı" type="text" maxlength="16" name="s">
					<input class="btn btn-danger" type="submit" value="Listeme Ekle" name="os">
					<input class="btn btn-primary" type="submit" value="Listeden Kaldır" name="c">
					<input class="btn btn-dark" type="submit" value="Listeyi Temizle" name="clean">
				</form>
				<table>
					<tr>
						<td id="iks">Oyuncu Adı</td>
						<td id="iks">Kullanıcı Adı</td>
						<td id="iks">Para</td>
						<td id="iks">Seviye</td>
						<td id="iks">Hediye Kart Gönder</td>
						<td id="iks">Para Gönder</td>
					</tr>
					<?php
					$k = 0;
						foreach ($_COOKIE as $kurabiye) {
							$kurabiyeGet = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$kurabiye'")->fetch(PDO::FETCH_ASSOC);

							if ($kurabiyeGet){
							echo '<tr>
						<td id="as">'.$kurabiyeGet['uye_adsoyad'].'</td>
						<td id="as">'.$kurabiyeGet['uye_kadi'].'</td>
						<td id="as">'.$kurabiyeGet['uye_para'].' <img height="30" width="30" src="img/coin.png"></td>
						<td id="as">Seviye '.$kurabiyeGet['uye_seviye'].'</td>
						<td><center><a href="sosyal.php?hediye='.$kurabiyeGet['uye_kadi'].'"><img height="50" width="50" src="img/hediyre.png"></a></center></td>
						<td><center><a href="sosyal.php?para='.$kurabiyeGet['uye_kadi'].'"><img height="50" width="50" src="img/parra.png"></a></center></td>
					</tr>';
						}}
					?>
				</table>
			</div>
		</div>

		<?php endif ?>

		<?php foreach ($_COOKIE as $p){ if ($_GET['para'] == $p){ ?>
		
			<div class="islem">
				<h3>Para Gönderme İşlemi</h3>
				<a href="sosyal.php"><b>Geri Dön</b></a>
				<form method="POST">
					<div class="form-group">
						<label for="kad">Para Gönderilecek Oyuncu</label>
						<input class="form-control" type="text" id="kad" name="parakadi" value="<?php echo $p; ?>" disabled>
					</div>
					<div class="form-group">
						<label for="mik">Para Miktarı</label>
						<input maxlength="12" id="mik" class="form-control" type="text" name="paramiktar">
					</div>
					<span class="koya"><img src="img/coin.png"></span>
					<input class="btn btn-primary" type="submit" value="Gönder" name="para">
				</form>
			</div>	

		<?php }} ?>

		<?php foreach ($_COOKIE as $t){ if ($_GET['hediye'] == $t){ ?>

			<div class="islem">
				<h3>Hediye Kart Gönderme İşlemi</h3>
				<a href="sosyal.php"><b>Geri Dön</b></a>
				<form method="POST">
					<div class="form-group">
						<label for="kad">Hediye Gönderilecek Oyuncu</label>
						<input class="form-control" type="text" id="kad" name="hediyekadi" value="<?php echo $t; ?>" disabled>
					</div>
					<div class="form-group">
						<label for="mik">Gönderilecek Kart</label>
						<select class="form-control" id="mik" name="hediyekart">
						<?php
							$kartGet = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);

							foreach ($kartGet as $ret) {
								if ($ret['alinan_urun_id'] != 0){
									$nop = $ret['alinan_urun_id'];

									$adGet = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$nop'")->fetch(PDO::FETCH_ASSOC);
									
									echo '<option value="'.altTire($adGet['karakter_adi']).'">'.$adGet['karakter_adi'].'</option>';
								}
							}
						?>
						</select>
					</div>
					<input class="btn btn-primary" type="submit" value="Gönder" name="hediye">
				</form>
			</div>

		<?php } } ?>
	</div>
</body>
</html>
<?php

	if ($_POST['os']) {
		$o = $_POST['s'];

		if ($o != $bizzat) {

			$oGet = $baglan->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
			foreach ($oGet as $dot) {
				if ($dot['uye_kadi'] == $o){
					$baybars = True;
				}
			}

			if ($baybars) {
				setcookie($o, $o);
				echo "<script> window.location = 'sosyal.php';</script>";
			}else {
				echo "<script>alert('Böyle bir kullanıcı yok!'); window.location = 'sosyal.php';</script>";
			}
		}else {
			echo "<script>alert('Hiç arkadaşın yok mu, niye kendini ekliyorsun?'); window.location = 'sosyal.php';</script>";
		}
	}

	if ($_POST['para']) {
		$gkadi = $_GET['para'];
		$gpara = $_POST['paramiktar'];

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

					$bildIns = $baglan->prepare("INSERT INTO bildirimler SET gonderen_kadi = ?, alan_kadi = ?, bildirim = ?, bildirim_tur = ?");
					$bildInss = $bildIns->execute(array($bizzat, $gkadi, " adlı oyuncu size ".$gpara." altın gönderdi!", "para"));

					echo "<script>alert('Para gönderme işlemi başarılı!'); window.location = 'sosyal.php'</script>";
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

	if ($_POST['hediye']) {
		$gelenKadi = $_GET['hediye'];
		$gelenKart = raltTire($_POST['hediyekart']);

		$kartVarmi = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$gelenKadi'", PDO::FETCH_ASSOC);

		if ($kartVarmi) {
			$kartKontrol = $baglan->query("SELECT * FROM kartlar WHERE karakter_adi = '$gelenKart'")->fetch(PDO::FETCH_ASSOC);

			if ($kartKontrol) {
				$kid = $kartKontrol['kart_id'];

				foreach ($kartVarmi as $r) {
					if ($r['alinan_urun_id'] == $kid) {
						$freddy = True;
					}
				} 
			}
		}

		if ($freddy) {
			echo "<script>alert('Bu kart göndermek istediğiniz kullanıcıda zaten var!'); window.location = 'sosyal.php';</script>";
		}else {
			$useCheck = $baglan->query("SELECT * FROM uye_kartlar WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC);

			$kartKontrol = $baglan->query("SELECT * FROM kartlar WHERE karakter_adi = '$gelenKart'")->fetch(PDO::FETCH_ASSOC);
			$kid = $kartKontrol['kart_id'];

			if ($useCheck['kart1_id'] != $kid && $useCheck['kart2_id'] != $kid && $useCheck['kart3_id'] != $kid && $useCheck['kart4_id'] != $kid && $useCheck['kart5_id'] != $kid){

				#echo "<script>alert('".$gelenKadi."');</script>";

				$kartInsa = $baglan->prepare("INSERT INTO satin_almalar SET alinan_urun_id = ?, uye_kadi = ?");
				$kartInss = $kartInsa->execute(array($kid, $gelenKadi));

				$bildirimIns = $baglan->prepare("INSERT INTO bildirimler SET gonderen_kadi = ?, alan_kadi = ?, bildirim = ?, bildirim_tur = ?");
				$bildirimInss = $bildirimIns->execute(array($bizzat, $gelenKadi, " adlı kullanıcı size ".$gelenKart." isimli kartı hediye etti!", "hediye"));

				$sidCek = $baglan->query("SELECT * FROM satin_almalar WHERE alinan_urun_id = '$kid' AND uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC);

				$dayi = $sidCek['satis_id'];

				$kartDel = $baglan->prepare("DELETE FROM satin_almalar WHERE satis_id = ?");
				$kartDell = $kartDel->execute(array($dayi));

				echo "<script>alert('Gönderme işlemi başarılı!'); window.location = 'sosyal.php'</script>";
			}else {
				echo "<script>alert('Göndermek istediğiniz kart oyunda kullandığınız kartlar arasında.'); window.location = 'sosyal.php'</script>";
			}
		}
	}



	if ($_POST['c']) {
		$ard = $_POST['s'];

		setcookie($ard, $ard, time() - 3600);

		echo "<script>window.location = 'sosyal.php';</script>";
	}

	if ($_POST['clean']) {
		foreach ($_COOKIE as $cerez) {
			setcookie($cerez, $cerez, time() - 3600);
		}

		echo "<script>window.location = 'sosyal.php';</script>";
	}

	ob_end_flush();
?>
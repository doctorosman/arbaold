<?php
	session_start();
	include 'baglan.php';

	if ($_SESSION['giris'] != "ok"){
		header("Location: oyna.php");
	}

	## Galibiyet başına 100 XP
	## Beraberlik başına 50 XP
	## Mağlubiyet başına 20 XP

	## 1. SEVİYE - 0+ XP
	## 2. SEVİYE - 2000+ XP
	## 3. SEVİYE - 3500+ XP
	## 4. SEVİYE - 6000+ XP


	$bizzat = $_SESSION['kadi'];

	$paraAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); $_SESSION['para'] = $paraAl['uye_para'];
	$seviyeAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); $_SESSION['seviye'] = $seviyeAl['uye_seviye'];
	$xpAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); $_SESSION['xp'] = $xpAl['xp'];

	//  BİLDİRİM

		$bildirimCek = $baglan->query("SELECT * FROM bildirimler WHERE alan_kadi = '$bizzat'", PDO::FETCH_ASSOC);

		if ($bildirimCek) {
			foreach ($bildirimCek as $not) {
				if ($not['bildirim_tur'] == "hediye") {
					echo '<script>alert("'.$not['gonderen_kadi'].$not['bildirim'].'");</script>';

					$bid = $not['bildirim_id'];

					$bildirimOku = $baglan->prepare("DELETE FROM bildirimler WHERE bildirim_id = ?");
					$bildirimOkuu = $bildirimOku->execute(array($bid));
				}else if ($not['bildirim_tur'] == "para"){
					echo '<script>alert("'.$not['gonderen_kadi'].$not['bildirim'].'");</script>';

					$bid = $not['bildirim_id'];

					$bildirimOku = $baglan->prepare("DELETE FROM bildirimler WHERE bildirim_id = ?");
					$bildirimOkuu = $bildirimOku->execute(array($bid));
				}else if ($not['bildirim_tur'] == "duyuru"){
					echo '<script>alert("'.$not['bildirim'].'");</script>';

					$bid = $not['bildirim_id'];

					$bildirimOku = $baglan->prepare("DELETE FROM bildirimler WHERE bildirim_id = ?");
					$bildirimOkuu = $bildirimOku->execute(array($bid));
				}
			}
		}

	//  BİLDİRİM

	$kartVeri = $baglan->query("SELECT * FROM uye_kartlar WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC);
	if ($kartVeri) {
		$dos1 = $kartVeri['kart1_id'];
		$kas1 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$dos1'")->fetch(PDO::FETCH_ASSOC);

		$_SESSION['kart1'] = $kas1['karakter_adi'];
		$_SESSION['kart1guc'] = $kas1['guc'];
		$_SESSION['kart1konum'] = $kas1['kart_konum'];

		$dos2 = $kartVeri['kart2_id'];
		$kas2 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$dos2'")->fetch(PDO::FETCH_ASSOC);

		$_SESSION['kart2'] = $kas2['karakter_adi'];
		$_SESSION['kart2guc'] = $kas2['guc'];
		$_SESSION['kart2konum'] = $kas2['kart_konum'];

		$dos3 = $kartVeri['kart3_id'];
		$kas3 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$dos3'")->fetch(PDO::FETCH_ASSOC);

		$_SESSION['kart3'] = $kas3['karakter_adi'];
		$_SESSION['kart3guc'] = $kas3['guc'];
		$_SESSION['kart3konum'] = $kas3['kart_konum'];

		$dos4 = $kartVeri['kart4_id'];
		$kas4 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$dos4'")->fetch(PDO::FETCH_ASSOC);

		$_SESSION['kart4'] = $kas4['karakter_adi'];
		$_SESSION['kart4guc'] = $kas4['guc'];
		$_SESSION['kart4konum'] = $kas4['kart_konum'];

		$dos5 = $kartVeri['kart5_id'];
		$kas5 = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$dos5'")->fetch(PDO::FETCH_ASSOC);

		$_SESSION['kart5'] = $kas5['karakter_adi'];
		$_SESSION['kart5guc'] = $kas5['guc'];
		$_SESSION['kart5konum'] = $kas5['kart_konum'];
	}

	## RAKİP SEVİYE 1 | KOLAY MOD

	if ($_SESSION['seviye'] == 1){

		$kolaymod = $baglan->query("SELECT * FROM kartlar ORDER BY guc ASC, RAND() LIMIT 5", PDO::FETCH_ASSOC);
			if ($kolaymod){
				$a =  range(1, 5);
				shuffle($a);
				$b = 0;
				foreach ($kolaymod as $et){
					$_SESSION['rkart'.$a[$b]] = $et['karakter_adi'];
					$_SESSION['rkart'.$a[$b].'guc'] = $et['guc'];
					$_SESSION['rkart'.$a[$b].'konum'] = $et['kart_konum'];
					$b++;
				}
			}
	}else if($_SESSION['seviye'] == 2){ ## KOLAY+ MOD
		$kolay2mod = $baglan->query("SELECT * FROM kartlar ORDER BY guc ASC LIMIT 7", PDO::FETCH_ASSOC);
			if ($kolay2mod){
				$a =  range(1, 5);
				shuffle($a);
				$b = 0;
				$c = 0;
				foreach ($kolay2mod as $et){
					$c++;
					if ($c <= 2){
						continue;
					}else{
						$_SESSION['rkart'.$a[$b]] = $et['karakter_adi'];
						$_SESSION['rkart'.$a[$b].'guc'] = $et['guc'];
						$_SESSION['rkart'.$a[$b].'konum'] = $et['kart_konum'];
						$b++;
					}
				}
			}
	}else if ($_SESSION['seviye'] == 3){ ## KOLAY++ MOD
		$kolay3mod = $baglan->query("SELECT * FROM kartlar", PDO::FETCH_ASSOC);
		if ($kolay3mod) {
			$xy = range(1, 5);
			shuffle($xy);
			$c = 0;
			foreach ($kolay3mod as $o) {
				if ($o['kart_id'] == 2 || $o['kart_id'] == 6 || $o['kart_id'] == 10 || $o['kart_id'] == 1 || $o['kart_id'] == 4){
					$_SESSION['rkart'.$xy[$c]] = $o['karakter_adi'];
					$_SESSION['rkart'.$xy[$c].'guc'] = $o['guc'];
					$_SESSION['rkart'.$xy[$c].'konum'] = $o['kart_konum'];
					$c++;
				}
			}
		}
	}else if ($_SESSION['seviye'] == 4){ ## ORTA MOD
		$kolay4mod = $baglan->query("SELECT * FROM kartlar", PDO::FETCH_ASSOC);
		if ($kolay4mod) {
			$xy = range(1, 5);
			shuffle($xy);
			$c = 0;
			foreach ($kolay4mod as $o) {
				if ($o['kart_id'] == 9 || $o['kart_id'] == 8 || $o['kart_id'] == 3 || $o['kart_id'] == 23 || $o['kart_id'] == 16){
					$_SESSION['rkart'.$xy[$c]] = $o['karakter_adi'];
					$_SESSION['rkart'.$xy[$c].'guc'] = $o['guc'];
					$_SESSION['rkart'.$xy[$c].'konum'] = $o['kart_konum'];
					$c++;
				}
			}
		}
	}


	$_SESSION['puan'] = 0;
	$_SESSION['rpuan'] = 0;
	$_SESSION['kartmiktar'] = 0;
	$_SESSION['yenioyun'] = False;
	$_SESSION['yenioyun'] = True;
	$_SESSION['turn'] = True;

	$_SESSION['silkart1'] = False;
	$_SESSION['silkart2'] = False;
	$_SESSION['silkart3'] = False;
	$_SESSION['silkart4'] = False;
	$_SESSION['silkart5'] = False;

	$_SESSION['oburunusil1'] = False;
	$_SESSION['oburunusil2'] = False;
	$_SESSION['oburunusil3'] = False;
	$_SESSION['oburunusil4'] = False;
	$_SESSION['oburunusil5'] = False;
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
		}
		.menus{
			font-family: 'Montserrat';
		}
		.menus ul a{
			text-decoration: none;
		}
		.menus ul{
			list-style: none;
			margin-left: 90px;
		}
		.menus ul li{
			float: left;
			padding: 15px;
			margin-right: 20px;
			border-radius: 10px;
			background-color: rgb(255, 255, 255, 0.55);
			color: black;
			font-size: 70px;
			margin-bottom: 30px;
		}
		.para{
			background-color: rgb(255, 255, 255, 0.9);
			border-radius: 30px;
			padding: 3px;
			width: 200px;
			font-family: 'Montserrat';
			font-size: 24px;
			margin-left: 15px;
			margin-top: 100px;
		}
		.para:hover{
			color: darkgreen;
		}
		.para img{
			height: 50px;
			width: 50px;
		}
		.seviye{
			background-color: rgb(255, 255, 255, 0.9);
			border-radius: 30px;
			width: 200px;
			font-family: 'Montserrat';
			font-size: 24px;
			margin-left: 230px;
			margin-top: -55px;
			position: absolute;
			height: 55px;
		}
		.seviye:hover{
			color: darkgreen;
		}
		.seviye img{
			height: 50px;
			width: 50px;
		}
		.sandik{
			background-color: rgb(255, 255, 255, 0.9);
			border-radius: 30px;
			width: 200px;
			font-family: 'Montserrat';
			font-size: 24px;
			margin-left: 445px;
			margin-top: -55px;
			position: absolute;
			height: 55px;
		}
		.sandik:hover{
			color: darkgreen;
		}
		.sandik img{
			height: 60px;
			width: 60px;
		}
		.birlik{
			background-color: rgb(255, 255, 255, 0.9);
			border-radius: 30px;
			width: 210px;
			font-family: 'Montserrat';
			font-size: 24px;
			margin-left: 660px;
			margin-top: -55px;
			position: absolute;
			height: 55px;
			color: darkblue;
			-webkit-animation-name: birlik;
			-webkit-animation-duration: 0.5s;
			-webkit-animation-iteration-count: infinite;
		}
		.birlik:hover{
			color: darkred;
		}
		.birlik img{
			height: 60px;
			width: 60px;
		}
		@-webkit-keyframes birlik{
			0%{color: darkblue;}
			50%{color: green;}
			100%{color: darkred;}
		}
		#xp{
			height: 100%;
			width: <?php if($_SESSION['xp'] < 100){echo 4;}else if($_SESSION['seviye'] == 1){$bar = $_SESSION['xp'] / 2000 * 100;}else if($_SESSION['seviye'] == 2){$bar = $_SESSION['xp'] / 3500 * 100;}else if($_SESSION['seviye'] == 3){$bar = $_SESSION['xp'] / 6000 * 100;}else if ($_SESSION['seviye'] == 4){$bar = $_SESSION['xp'] / 10000 * 100;} echo $bar; ?>%;
			background-color: skyblue;
			border-radius: 30px;
		}
		#yazi{
			margin-top: 3px;
			position: absolute;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="kartlar.css">
</head>
<body>
	<div class="container">
	<div class="para">
		<img src="img/papa.png"> <?php $paraAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); echo $paraAl['uye_para']; $_SESSION['para'] = $paraAl['uye_para']; ?>
	</div>
	<div class="sandik">
		<img src="img/sandik.png"> <?php $paraAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); echo $paraAl['sandik']; $_SESSION['sandik'] = $paraAl['sandik']; ?>
	</div><a href="birlik.php">
	<div class="birlik">
		<img src="img/birlik.png">BİRLİKLER
	</div></a>
	<div class="seviye">
		<div id="xp">&nbsp;<span id="yazi">
		<img src="img/xp.png"> Seviye <?php $seviyeAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); echo $paraAl['uye_seviye']; $_SESSION['seviye'] = $seviyeAl['uye_seviye']; ?></span>
		</div>
	</div>
	</div>
	<div class="menus container-fluid">
		<ul>
			<a href="oyun.php"><li><img src="img/duduk.png">OYUNA GİR</li></a>
			<a href="market.php"><li><img src="img/market.png">MARKET</li></a>
			<a href="ayarlar.php"><li><img src="img/ayarlar.png"></li></a>
			<a href="gorev.php"><li><img src="img/gorev.png"></li></a>
			<a href="home.php?ipucu=yes"><li><img src="img/agac.png"></li></a>
			<a href="sosyal.php"><li><img src="img/sosyal.png"></li></a>
			<a href="ozellikler.php"><li><img src="img/ozellik.png"></li></a>
			<a href="cikis.php"><li><img src="img/cikis.png">&nbsp;</li></a>
		</ul></div>
</body>
</html>
<?php
	if ($_SESSION['seviye'] == 1 && ($_SESSION['xp'] >= 2000 && $_SESSION['xp'] < 2100)){
		$seviyeUpd = $baglan->prepare("UPDATE uyeler SET uye_seviye = ? WHERE uye_kadi = ?");
		$seviyeUpda = $seviyeUpd->execute(array(2, $bizzat));

		echo "<script>alert('Seviye atladınız! Yeni seviyeniz 2!'); window.location = 'home.php';</script>";
		$_SESSION['xp'] = 2100;

		$xpUpd = $baglan->prepare("UPDATE uyeler SET xp = ? WHERE uye_kadi = ?");
		$xpUpda = $xpUpd->execute(array($_SESSION['xp'], $bizzat));
	}

	if ($_SESSION['seviye'] == 2 && ($_SESSION['xp'] >= 3500 && $_SESSION['xp'] < 3600)){
		$seviyeUpd2 = $baglan->prepare("UPDATE uyeler SET uye_seviye = ? WHERE uye_kadi = ?");
		$seviyeUpda2 = $seviyeUpd2->execute(array(3, $bizzat));

		echo "<script>alert('Seviye atladınız! Yeni seviyeniz 3!'); window.location = 'home.php';</script>";
		$_SESSION['xp'] = 3600;

		$xpUpd2 = $baglan->prepare("UPDATE uyeler SET xp = ? WHERE uye_kadi = ?");
		$xpUpda2 = $xpUpd2->execute(array($_SESSION['xp'], $bizzat));
	}

	if ($_SESSION['seviye'] == 3 && ($_SESSION['xp'] >= 6000 && $_SESSION['xp'] < 6100)){
		$seviyeUpd3 = $baglan->prepare("UPDATE uyeler SET uye_seviye = ? WHERE uye_kadi = ?");
		$seviyeUpda3 = $seviyeUpd3->execute(array(4, $bizzat));

		echo "<script>alert('Seviye atladınız! Yeni seviyeniz 4!'); window.location = 'home.php';</script>";
		$_SESSION['xp'] = 6100;

		$xpUpd3 = $baglan->prepare("UPDATE uyeler SET xp = ? WHERE uye_kadi = ?");
		$xpUpda3 = $xpUpd3->execute(array($_SESSION['xp'], $bizzat));
	}

	if ($_GET['ipucu'] == "yes"){
		$ipuclari = ["1. Seviye rakibi çok kolaydır. 2. Seviyeye gelene kadar yeni karta ihtiyacınız olmaz.", "2. Seviye rakibini yenmek için size verilen ücretsiz kartların yanı sıra ekstra kartlara ihtiyacınız olabilir.", "Yepyeni güncellemeler çok yakında!", "Yeni kart setleri geliyor, çok yakında!", "10. Seviye altındaysanız bir maçta en fazla 5 kart kullanabilirsiniz.", "Marketten yeni bir kart aldığınızda ayarlardan oyun kartlarınıza dahil etmeyi unutmayın!", "3. Seviye rakibini yenmek için markette alt sıralara inmeniz gerekebilir. Bunun için de paranızı biriktirmeniz..", "Oyuna günaşırı giriş yaptığınız takdirde günlük giriş ödülünü kazanırsınız!", "Günlük giriş ödülü 300 altındır. Her 24 saatte bir oyuna girerseniz ödülü alabilirsiniz.", "### EASTER EGG ALERT ###", "İstediğin bir arkadaşına para gönderebileceğini biliyor muydun?", "Sende olan kartlardan birini arkadaşına göndersene! Sosyal menüsü bunun için açıldı!", "SES EFEKTLİ KARAKTERLER GELDİ! Oyunda ses efektli bir karakter kullanırsan, karakterin sesini duyacaksın!", "TELEGRAM KANALINA KATIL! PROMOSYON KODLARI VE GÜNCELLEMELERİ KAÇIRMA!", "TELEGRAM KANALINA KATIL! PROMOSYON KODLARI VE GÜNCELLEMELERİ KAÇIRMA!", "TELEGRAM KANALINA KATIL! PROMOSYON KODLARI VE GÜNCELLEMELERİ KAÇIRMA!", "Sandıklar bu oyunda elmas kadar değerlidir. Çok zor bulunur.", "Bir yerden eline sandık geçerse özellikler menüsünden bu sandığı açabilirsin.", "Eğer elinde sandık varsa istediğin zaman özellikler menüsünden satabilirsin.", "Şu an için 5 sandık 10,000 altın değerinde. Bayram gibi özel günlerde sandıkların altın cinsinden değeri değişebilir. Bu özel indirimleri kaçırmamak için Telegram kanalımıza katıl!", "Özellikler menüsünde yepyeni etkinliklerle karşınızda olacağınız.", "1. Seri kart sayınız ne kadar fazlaysa standart sandıktan para ve 2. Seri kart çıkma ihtimali o kadar fazla olacaktır."];
		shuffle($ipuclari);
		$x = rand(0, (count($ipuclari) - 1));
		echo "<script>alert('".$ipuclari[$x]."'); window.location = 'home.php'</script>";
	}

	$timeGet = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC);
	$tariha = $timeGet['son_odul_tarihi'];

	$veri = strtotime($tariha);

	$gun = $veri + (60 * 60 * 24);

	if (time() >= $gun){
		echo "<script>alert('Günlük giriş ödülünüz hazır'); window.location = 'home.php';</script>";
		$_SESSION['para'] += 300;

		$paIns = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
		$pasIns = $paIns->execute(array($_SESSION['para'], $bizzat));

		$ggoUpd = $baglan->prepare("UPDATE uyeler SET son_odul_tarihi = ? WHERE uye_kadi = ?");
		$ggoUpda = $ggoUpd->execute(array(date("Y-m-d H:i:s"), $bizzat));
	}
?>
<?php
	session_start();
	include 'baglan.php';

	if ($_SESSION['giris'] != "ok") {
		header("Location: index.php");
	}

	$bizzat = $_SESSION['kadi'];

	$kart1 = "1. Seri Kart";
	$kart2 = "2. Seri Kart";
	$para = "Para";

	$cikabilecekler = [$kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $kart1, $para, $para, $para, $para, $para, $para, $para, $para, $para, $kart2, $kart2, $kart2, $kart2, $kart2, $kart2];

	shuffle($cikabilecekler);
	shuffle($cikabilecekler);
	shuffle($cikabilecekler);

	$a = range(0, 29);

	$cikan1 = $cikabilecekler[$a[5]];
	$cikan2 = $cikabilecekler[$a[17]];
	$cikan3 = $cikabilecekler[$a[26]];

	$cikan1tur = $cikabilecekler[$a[5]];
	$cikan2tur = $cikabilecekler[$a[17]];
	$cikan3tur = $cikabilecekler[$a[26]];

	$paralar = [500, 750, 1000, 2000, 5000, 10000];
	shuffle($paralar);
	shuffle($paralar);
	shuffle($paralar);

	## 1

	$uranus = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);

	$ser1kartlar = $baglan->query("SELECT * FROM kartlar WHERE seri = 1", PDO::FETCH_ASSOC);

	$r = 0;

	foreach ($ser1kartlar as $turp) {
		$seri1kartlar[$r] = $turp['kart_id'];
		$r++;
	} 

	unset($seri1kartlar[0]);
	unset($seri1kartlar[3]);
	unset($seri1kartlar[6]);
	unset($seri1kartlar[10]);
	unset($seri1kartlar[11]);

	foreach ($uranus as $neptun) {
		if ($neptun['alinan_urun_id'] != 1 && $neptun['alinan_urun_id'] != 4 && $neptun['alinan_urun_id'] != 7 && $neptun['alinan_urun_id'] != 11 && $neptun['alinan_urun_id'] != 12){

			$ananas = $neptun['alinan_urun_id'];

			$cekis = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$ananas'")->fetch(PDO::FETCH_ASSOC);

			if ($cekis['seri'] == 1) {
				$anahtar = array_search($ananas, $seri1kartlar);

				if ($anahtar) {
					unset($seri1kartlar[$anahtar]);
				}
			}

		}
	}

	shuffle($seri1kartlar);
	shuffle($seri1kartlar);
	shuffle($seri1kartlar);

	## 2

	$uranus = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);

	$ser2kartlar = $baglan->query("SELECT * FROM kartlar WHERE seri = 2", PDO::FETCH_ASSOC);

	$r = 0;

	foreach ($ser2kartlar as $turp) {
		$seri2kartlar[$r] = $turp['kart_id'];
		$r++;
	} 

	foreach ($uranus as $neptun) {
		$ananas = $neptun['alinan_urun_id'];

		$cekis = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$ananas'")->fetch(PDO::FETCH_ASSOC);

		if ($cekis['seri'] == 2) {
			$anahtar = array_search($ananas, $seri2kartlar);

			if ($anahtar) {
				unset($seri2kartlar[$anahtar]);
			}
		}
	}

	shuffle($seri2kartlar);
	shuffle($seri2kartlar);
	shuffle($seri2kartlar);

	switch ($cikan1) {
		case 'Para':
			$cikan1 = $paralar[1];
			break;
		
		case '1. Seri Kart':
			$cikan1 = $seri1kartlar[0];
			break;

		case '2. Seri Kart':
			$cikan1 = $seri2kartlar[0];
			break;
	}

	switch ($cikan2) {
		case 'Para':
			$cikan2 = $paralar[2];
			break;
		
		case '1. Seri Kart':
			$cikan2 = $seri1kartlar[1];
			break;

		case '2. Seri Kart':
			$cikan2 = $seri2kartlar[1];
			break;
	}

	switch ($cikan3) {
		case 'Para':
			$cikan3 = $paralar[3];
			break;
		
		case '1. Seri Kart':
			$cikan3 = $seri1kartlar[2];
			break;

		case '2. Seri Kart':
			$cikan3 = $seri2kartlar[2];
			break;
	}

	$lcdpsay = $_SESSION['lcdpsay'];

	shuffle($lcdpsay);
	shuffle($lcdpsay);
	shuffle($lcdpsay);

	$lcdpcikan = $lcdpsay[0];

	$lcdpkonumget = $baglan->query("SELECT * FROM kartlar WHERE karakter_adi = '$lcdpcikan'")->fetch(PDO::FETCH_ASSOC);

	if ($lcdpkonumget) {
		$lcdpcikanid = $lcdpkonumget['kart_id'];
		$lcdpcikankonum = $lcdpkonumget['kart_konum'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ARBA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:800&display=swap');
		body{
			background-image: url('img/bg2.jpg');
			background-size: 100%;
			background-attachment: fixed;
		}
		h3{
			padding: 20px;
			padding-bottom: 0px;
			font-family: 'Montserrat';
		}
		.chest{
			height: 300px;
			width: 300px;
		}
		.chest img{
			height: 300px;
			width: 300px;
			position: relative;
			left: 100px;
			top: 50px;
			animation-name: sandikAc;
			animation-duration: 2s;
			animation-timing-function: linear;
			animation-delay: 0s;
			animation-iteration-count: infinite;
			animation-direction:normal;
		}
		@keyframes sandikAc{
			0% {height: 300px; width: 300px left: 100px; top: 10px;}
			100% {height: 500px; width: 500px; left: 250px; top: 30px;}
		}
		.chest2{
			height: 350px;
			width: 350px;
		}
		.chest2 img{
			height: 500px;
			width: 500px;
			position: absolute;
			left: 100px;
			top: 50px;
		}
		.urun{
			height: 15%;
			width: 15%;
			float: left;
			background-color: rgb(255, 255, 255, 0.5);
			border-radius: 20px;
			position: relative;
			top: 130px;
			left: 250px;
			opacity: 0;
		}
		.urun img{
			height: 100%;
			border-radius: 20px;
			width: 100%;
		}
		.para{
			height: 17%;
			width: 15%;
			float: left;
			background-color: rgb(255, 255, 255);
			border-radius: 20px;
			position: relative;
			top: 130px;
			left: 250px;
			padding: 10px;
			font-family: 'Montserrat';
			font-size: 28px;
		}
		.para img{
			height: 100%;
			border-radius: 20px;
			width: 100%;
		}
		@keyframes kartAc{
			0%{
			top: 130px;
			left: 250px;}
			100%{ top: 130px; left: 500px;}
		}
		#lcdpkart{
			position: relative;
			top: -200px;
		}
	</style>
</head>
<body>
	<?php if ($_GET['sandik'] == "standart" && $_SESSION['standartsandik'] == "ac" && $_GET['open'] != "true"){ ?>	
		<?php if (!$seri1kartlar){ ?>
			<script type="text/javascript">alert('1. Seri Kartların hepsine sahip olduğunuz için bu sandığı açamazsınız!'); </script>
		<?php }else { ?>
		<script type="text/javascript">
			alert("Haydi, tıkla ve sandığı aç!");
		</script>
		<div class="chest"><a href="sandik.php?sandik=standart&open=true">
			<img src="img/anichest.png">
		</a></div>
	<?php } ?>
	<?php }else if ($_GET['sandik'] == "standart" && $_SESSION['standartsandik'] == "ac" && $_GET['open'] == "true") { ?>
		<?php if (!$seri1kartlar){ ?>
			<script type="text/javascript">alert('1. Seri Kartların hepsine sahip olduğunuz için bu sandığı açamazsınız!')</script>
		<?php }else { ?>
		<script type="text/javascript">
			alert("Sandık açılıyooooor!");

			setTimeout(function() {
				document.getElementById('kart1').style.left = 625+"px"; 
				document.getElementById('kart1').style.transitionDuration = 1+"s"; 
				document.getElementById('kart1').style.opacity = 1;

				document.getElementById('kart2').style.left = 675+"px"; 
				document.getElementById('kart2').style.opacity = 1;
				document.getElementById('kart2').style.transitionDuration = 2+"s"; 
				
				document.getElementById('kart3').style.opacity = 1;

				document.getElementById('kart3').style.left = 725+"px"; 
				document.getElementById('kart3').style.transitionDuration = 3+"s"; 
			}, 500);
			setTimeout(function() {alert('İşte ödüllerin!'); alert('Hayırlı olsun adamım!'); window.location = 'ozellikler.php'; <?php $_SESSION['standartsandik'] = "kapat"; if ($cikan1tur == "1. Seri Kart" || $cikan1tur == "2. Seri Kart"){ $fredIns = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?, fiyat = ?"); $fredInss = $fredIns->execute(array($bizzat, $cikan1, 0)); } if ($cikan2tur == "1. Seri Kart" || $cikan2tur == "2. Seri Kart"){ $fredIns1 = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?, fiyat = ?"); $fredInss1 = $fredIns1->execute(array($bizzat, $cikan2, 0)); } if($cikan3tur == "1. Seri Kart" || $cikan3tur == "2. Seri Kart"){ $fredIns2 = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?, fiyat = ?"); $fredInss2 = $fredIns2->execute(array($bizzat, $cikan3, 0)); } ?> }, 4000); </script>
		<?php 
			switch ($cikan1tur){
				case "1. Seri Kart":
					$alre = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$cikan1'")->fetch(PDO::FETCH_ASSOC);	

					echo "<div id='kart1' class='urun'><img src='img/karakter/".$alre['kart_konum']."'></div>";

					break;

				case "2. Seri Kart":
					$alre = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$cikan1'")->fetch(PDO::FETCH_ASSOC);	

					echo "<div id='kart1' class='urun'><img src='img/karakter/".$alre['kart_konum']."'></div>";
					break;

				case "Para":
					echo "<div id='kart1' class='para'><img src='img/papa.png'><center>".$cikan1."</center></div>";

					$newPara = $_SESSION['para'] + $cikan1;

					$parafU = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");

					$paraf = $parafU->execute(array($newPara, $bizzat));
					break;
			}

			switch ($cikan2tur){
				case "1. Seri Kart":
					$alre = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$cikan2'")->fetch(PDO::FETCH_ASSOC);	

					echo "<div id='kart2' class='urun'><img src='img/karakter/".$alre['kart_konum']."'></div>";
					break;

				case "2. Seri Kart":
					$alre = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$cikan2'")->fetch(PDO::FETCH_ASSOC);	

					echo "<div id='kart2' class='urun'><img src='img/karakter/".$alre['kart_konum']."'></div>";
					break;

				case "Para":
					echo "<div id='kart2' class='para'><img src='img/papa.png'><center>".$cikan2."</center></div>";

					
					$newPara = $_SESSION['para'] + $cikan2;

					$parafU = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");

					$paraf = $parafU->execute(array($newPara, $bizzat));
					break;
			}

			switch ($cikan3tur){
				case "1. Seri Kart":
					$alre = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$cikan3'")->fetch(PDO::FETCH_ASSOC);	

					echo "<div id='kart3' class='urun'><img src='img/karakter/".$alre['kart_konum']."'></div>";
					break;

				case "2. Seri Kart":
					$alre = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$cikan3'")->fetch(PDO::FETCH_ASSOC);	

					echo "<div id='kart3' class='urun'><img src='img/karakter/".$alre['kart_konum']."'></div>";
					break;

				case "Para":
					echo "<div id='kart3' class='para'><img src='img/papa.png'><center>".$cikan3."</center></div>";
					$newPara = $_SESSION['para'] + $cikan3;

					$parafU = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");

					$paraf = $parafU->execute(array($newPara, $bizzat));
					break;
			}
		?>
		<div class="chest2">
			<img src="img/anichest.png">
		</div>
	<?php } ?>
	<?php }else if ($_GET['sandik'] == "lcdp" && $_SESSION['lcdpsandik'] == "ac" && $_GET['open'] != "true"){
	?>

	<script type="text/javascript">
			alert("Haydi, tıkla ve sandığı aç!");
		</script>
		<div class="chest"><a href="sandik.php?sandik=lcdp&open=true">
			<img src="img/anichest.png">
		</a></div>

	<?php
	}else if ($_GET['sandik'] == "lcdp" && $_SESSION['lcdpsandik'] == "ac" && $_GET['open'] == "true"){
?><script>
			alert("Sandık açılıyooooor!");
			setTimeout(function(){
				document.getElementById('lcdpkart').style.left = 800+"px"; 
				document.getElementById('lcdpkart').style.transitionDuration = 1+"s"; 
				document.getElementById('lcdpkart').style.opacity = 2;
			}, 500);
			setTimeout(function() {alert('İşte ödülün!'); alert('Hayırlı olsun adamım!'); window.location = 'ozellikler.php'; <?php $_SESSION['lcdpsandik'] = "kapat"; $fredIns = $baglan->prepare("INSERT INTO satin_almalar SET uye_kadi = ?, alinan_urun_id = ?, fiyat = ?"); $fredInss = $fredIns->execute(array($bizzat, $lcdpcikanid, 0)); ?> }, 2000); </script>

		<div class="chest2">
			<img src="img/anichest.png">
		</div>
		<div class="urun" id="lcdpkart">
			<img <?php echo 'src="img/karakter/'.$lcdpcikankonum.'"' ?>>		
		</div>

<?php }else {echo "<script>window.location = 'home.php';</script>";} ?>
</body>
</html>
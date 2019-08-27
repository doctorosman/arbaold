<?php
	session_start();
	include 'baglan.php';

	if ($_SESSION['giris'] != "ok"){
		header("Location: index.php");
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
			background-image: url('img/vs.jpg');
			background-size: 100%;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		.isim{
			font-size: 70px;
			font-family: 'Montserrat';
			color: white;
			padding: 30px;
		}
		.bilg{
			font-size: 70px;
			font-family: 'Montserrat';
			color: white;
			padding: 30px;
			float: right;
			position: relative;
			bottom: 170px;
		}
		.kart{
			height: 15%;
			width: 15%;
			background-color: white;
			border-radius: 20px;
			border: 2px solid white
		}
		.kart img{
			border-radius: 20px;
			height: 100%;
			width: 100%;
		}
		#k2{
			position: relative;
			bottom: 1488px;
			left: 950px;
		}
		#k3{
			position: relative;
			bottom: 1775px;
			left: 1000px;
		}
		#k4{
			position: relative;
			bottom: 2063px;
			left: 1050px;
		}
		#k5{
			position: relative;
			bottom: 2350px;
			left: 1100px;
		}
		.karta{
			height: 15%;
			width: 15%;
			border-radius: 20px;
			position: relative;
			top: 200px;
		}
		.karta img{
			border: 2px solid white;
			border-radius: 20px;
			height: 100%;
			width: 100%;
		}
		.karta2{
			height: 15%;
			width: 15%;
			border-radius: 20px;
			position: relative;
			bottom: 106px;
			left: 50px;
		}
		.karta2 img{
			border-radius: 20px;
			border: 2px solid white;
			width: 100%;
			height: 100%;
		}
		.karta3{
			height: 15%;
			width: 15%;
			border-radius: 20px;
			position: relative;
			bottom: 412px;
			left: 100px;
		}
		.karta3 img{
			border-radius: 20px;
			border: 2px solid white;
			height: 100%;
			width: 100%;
		}
		.karta4{
			height: 15%;
			width: 15%;
			border-radius: 20px;
			position: relative;
			bottom: 717px;
			left: 150px;
		}
		.karta4 img{
			border-radius: 20px;
			height: 100%;
			width: 100%;
			border: 2px solid white;
		}
		.karta5{
			height: 15%;
			width: 15%;
			border-radius: 20px;
			position: relative;
			bottom: 1023px;
			left: 200px;
		}
		.karta5 img{
			border: 2px solid white;
			border-radius: 20px;
			height: 100%;
			width: 100%;
		}
		.karta button:focus-within, .karta2 button:focus-within, .karta3 button:focus-within, .karta4 button:focus-within, .karta5 button:focus-within{
			position: relative;
			bottom: 300px;
			transition-duration: 2s;
		}
		button{
			background: none;
			border: none;
			border-style: none;
		}
		.karta input, .karta2 input, .karta3 input, .karta4 input, .karta5 input{
			position: relative;
			bottom: 55px;
			left: 3px;
		}

		.ykart{
			height: 14%;
			width: 14%;
			border-radius: 20px;
			position: relative;
			bottom: 2770px;
			left: 750px;
		}
		.ykart img{
			border: 2px solid white;
			border-radius: 20px;
			height: 100%;
			width: 100%;
		}
		#kr1, #ykr1{
			<?php if ($_SESSION['silkart1'] == True){ ?>
				opacity: 0;
			<?php } ?>
		}
		#kr2, #ykr2{
			<?php if ($_SESSION['silkart2'] == True){ ?>
				opacity: 0;
			<?php } ?>
		}

		#kr3, #ykr3{
			<?php if ($_SESSION['silkart3'] == True){ ?>
				opacity: 0;
			<?php } ?>
		}
		#kr4, #ykr4{
			<?php if ($_SESSION['silkart4'] == True){ ?>
				opacity: 0;
			<?php } ?>
		}
		#kr5, #ykr5{
			<?php if ($_SESSION['silkart5'] == True){ ?>
				opacity: 0;
			<?php } ?>
		}
		#rkr1{
			position: relative;
			bottom: 1345px;
			left: 930px;
			<?php if ($_SESSION['oburunusil1'] == True): ?>
				opacity: 0;
			<?php endif ?>
		}
		#rkr2{
			position: relative;
			bottom: 1636px;
			left: 980px;
			<?php if ($_SESSION['oburunusil2'] == True): ?>
				opacity: 0;
			<?php endif ?>
		}
		#rkr3{
			position: relative;
			bottom: 1927px;
			left: 1030px;
			<?php if ($_SESSION['oburunusil3'] == True): ?>
				opacity: 0;
			<?php endif ?>
		}

		#rkr4{
			position: relative;
			bottom: 2218px;
			left: 1080px;
			<?php if ($_SESSION['oburunusil4'] == True): ?>
				opacity: 0;
			<?php endif ?>
		}
		#rkr5{
			position: relative;
			bottom: 2509px;
			left: 1130px;
			<?php if ($_SESSION['oburunusil5'] == True): ?>
				opacity: 0;
			<?php endif ?>
		}
		.yaya{
			height: 15%;
			width: 15%;
			margin-top: 275px;
		}
	</style>
</head>
<body style="overflow-x: hidden; overflow-y: hidden;">
	<div class="isim">
		<?php echo $_SESSION['adsoyad']; ?>
	</div>
	<div class="bilg">
		Rakip (<?php echo "Seviye ".$_SESSION['seviye']; ?>)
	</div>
	<div class="bizimkartlar">
		<?php if (!$_SESSION['silkart1']){ ?>
			<div id="kr1" class="karta"><button>
				<img src=<?php echo '"img/karakter/'.$_SESSION['kart1konum'].'"'; ?>><form method="POST"><input type="submit" value="X" name="kart1"></form>
			</button></div>
		<?php }else { ?>
			<div class="yaya">
				&nbsp;
			</div>
		<?php }if (!$_SESSION['silkart2']){ ?>
			<div id="kr2" class="karta2"><button>
				<img src=<?php echo '"img/karakter/'.$_SESSION['kart2konum'].'"'; ?>><form method="POST"><input type="submit" value="X" name="kart2"></form>
			</button></div>
		<?php }else { ?>
			<div class="yaya">&nbsp;</div>
		<?php }if(!$_SESSION['silkart3']){ ?>
			<div id="kr3" class="karta3"><button>
				<img src=<?php echo '"img/karakter/'.$_SESSION['kart3konum'].'"'; ?>><form method="POST"><input type="submit" value="X" name="kart3"></form>
			</button></div>
		<?php }else { ?>
			<div class="yaya">&nbsp;</div>
		<?php }if(!$_SESSION['silkart4']){ ?>
			<div id="kr4" class="karta4"><button>
				<img src=<?php echo '"img/karakter/'.$_SESSION['kart4konum'].'"'; ?>><form method="POST"><input type="submit" value="X" name="kart4"></form>
			</button></div>
		<?php }else { ?>
			<div class="yaya">&nbsp;</div>
		<?php }if(!$_SESSION['silkart5']){ ?>
		<div id="kr5" class="karta5"><button>
			<img src=<?php echo '"img/karakter/'.$_SESSION['kart5konum'].'"'; ?>><form method="POST"><input type="submit" value="X" name="kart5"></form>
		</button></div>
		<?php }else { ?>
			<div class="yaya">&nbsp;</div>
		<?php } ?>
	</div>
	<div id="rkr1" class="kart">
		<img src="img/arka.png">
	</div>
	<div id="rkr2" class="kart">
		<img src="img/arka.png">
	</div>
	<div id="rkr3" class="kart">
		<img src="img/arka.png">
	</div>
	<div id="rkr4" class="kart">
		<img src="img/arka.png">
	</div>
	<div id="rkr5" class="kart">
		<img src="img/arka.png">
	</div>
</body>
</html>
<?php
	if ($_POST['kart1']){
		if ($_SESSION['kart1'] == "Dımbıllan"){
			echo '
	<audio autoplay>
		<source src="audio/dimbillan.mp3" type="audio/mpeg">
	</audio>';
		}else if ($_SESSION['kart1'] == "Coşkun"){
			echo '
	<audio autoplay>
		<source src="audio/coskun.mp3" type="audio/mpeg">
	</audio>';
		}
		echo "<script>document.getElementById('kr1').style.left = 550+'px';</script>";
		$_SESSION['oburunusil1'] = True;
		echo "<div id='ykr1' class='ykart'><img src='img/karakter/".$_SESSION['rkart1konum']."'></div>";
		
		$rakipkart1 = $_SESSION['rkart1guc'];
		$bizimkart1 = $_SESSION['kart1guc'];

		if($bizimkart1 > $rakipkart1){
			$_SESSION['puan'] += 1;
		}else if ($bizimkart1 < $rakipkart1){
			$_SESSION['rpuan'] += 1;
		}

		$_SESSION['silkart1'] = True;
		$_SESSION['kartmiktar'] += 1;
		echo "<script>setTimeout(function(){alert('".$_SESSION['puan']." - ".$_SESSION['rpuan']."')}, 1500);</script>";

		echo "<script>setTimeout(function(){window.location='oyun.php';}, 1500);</script>";
	}
	if ($_POST['kart2']){
		if ($_SESSION['kart2'] == "Dımbıllan"){
			echo '
	<audio autoplay>
		<source src="audio/dimbillan.mp3" type="audio/mpeg">
	</audio>';
		}else if ($_SESSION['kart2'] == "Coşkun"){
			echo '
	<audio autoplay>
		<source src="audio/coskun.mp3" type="audio/mpeg">
	</audio>';
		}
		echo "<script>document.getElementById('kr2').style.left = 550+'px';</script>";
		$_SESSION['oburunusil2'] = True;
		echo "<div id='ykr2' class='ykart'><img src='img/karakter/".$_SESSION['rkart2konum']."'></div>";

		$rakipkart2 = $_SESSION['rkart2guc'];
		$bizimkart2 = $_SESSION['kart2guc'];

		if($bizimkart2 > $rakipkart2){
			$_SESSION['puan'] += 1;
		}else if ($bizimkart2 < $rakipkart2){
			$_SESSION['rpuan'] += 1;
		}
		$_SESSION['silkart2'] = True;
		$_SESSION['kartmiktar'] += 1;
		echo "<script>setTimeout(function(){alert('".$_SESSION['puan']." - ".$_SESSION['rpuan']."')}, 1500);</script>";
		echo "<script>setTimeout(function(){window.location='oyun.php';}, 1500);</script>";
	}	

	if ($_POST['kart3']){
		if ($_SESSION['kart3'] == "Dımbıllan"){
			echo '
	<audio autoplay>
		<source src="audio/dimbillan.mp3" type="audio/mpeg">
	</audio>';
		}else if ($_SESSION['kart3'] == "Coşkun"){
			echo '
	<audio autoplay>
		<source src="audio/coskun.mp3" type="audio/mpeg">
	</audio>';
		}
		echo "<script>document.getElementById('kr3').style.left = 550+'px';</script>";
		$_SESSION['oburunusil3'] = True;
		echo "<div id='ykr3' class='ykart'><img src='img/karakter/".$_SESSION['rkart3konum']."'></div>";

		$rakipkart3 = $_SESSION['rkart3guc'];
		$bizimkart3 = $_SESSION['kart3guc'];

		if($bizimkart3 > $rakipkart3){
			$_SESSION['puan'] += 1;
		}else if ($bizimkart3 < $rakipkart3){
			$_SESSION['rpuan'] += 1;
		}
		$_SESSION['silkart3'] = True;
		$_SESSION['kartmiktar'] += 1;
		echo "<script>setTimeout(function(){alert('".$_SESSION['puan']." - ".$_SESSION['rpuan']."')}, 1500);</script>";

		echo "<script>setTimeout(function(){window.location='oyun.php';}, 1500);</script>";
	}
	if ($_POST['kart4']){
		if ($_SESSION['kart4'] == "Dımbıllan"){
			echo '
	<audio autoplay>
		<source src="audio/dimbillan.mp3" type="audio/mpeg">
	</audio>';
		}else if ($_SESSION['kart4'] == "Coşkun"){
			echo '
	<audio autoplay>
		<source src="audio/coskun.mp3" type="audio/mpeg">
	</audio>';
		}
		echo "<script>document.getElementById('kr4').style.left = 550+'px';</script>";
		$_SESSION['oburunusil4'] = True;
		echo "<div id='ykr4' class='ykart'><img src='img/karakter/".$_SESSION['rkart4konum']."'></div>";

		$rakipkart4 = $_SESSION['rkart4guc'];
		$bizimkart4 = $_SESSION['kart4guc'];

		if($bizimkart4 > $rakipkart4){
			$_SESSION['puan'] += 1;
		}else if ($bizimkart4 < $rakipkart4){
			$_SESSION['rpuan'] += 1;
		}

		
		$_SESSION['silkart4'] = True;
		$_SESSION['kartmiktar'] += 1;
		echo "<script>setTimeout(function(){alert('".$_SESSION['puan']." - ".$_SESSION['rpuan']."')}, 1500);</script>";

		echo "<script>setTimeout(function(){window.location='oyun.php';}, 1500);</script>";
	}
	if ($_POST['kart5']){
		if ($_SESSION['kart1'] == "Dımbıllan"){
			echo '
	<audio autoplay>
		<source src="audio/dimbillan.mp3" type="audio/mpeg">
	</audio>';
		}else if ($_SESSION['kart5'] == "Coşkun"){
			echo '
	<audio autoplay>
		<source src="audio/coskun.mp3" type="audio/mpeg">
	</audio>';
		}
		$_SESSION['oburunusil5'] = True;
		echo "<script>document.getElementById('kr5').style.left = 550+'px';</script>";
		echo "<div id='ykr5' class='ykart'><img src='img/karakter/".$_SESSION['rkart5konum']."'></div>";

		$rakipkart5 = $_SESSION['rkart5guc'];
		$bizimkart5 = $_SESSION['kart5guc'];

		if($bizimkart5 > $rakipkart5){
			$_SESSION['puan'] += 1;
		}else if ($bizimkart5 < $rakipkart5){
			$_SESSION['rpuan'] += 1;
		}

		
		$_SESSION['silkart5'] = True;
		echo "<script>setTimeout(function(){alert('".$_SESSION['puan']." - ".$_SESSION['rpuan']."')}, 1500);</script>";
		echo "<script>setTimeout(function(){window.location='oyun.php';}, 1500);</script>";
		$_SESSION['kartmiktar'] += 1;
	}

	###DİĞER KARTLAR
	if ($_SESSION['kartmiktar'] == 5){
		if($_SESSION['puan'] > $_SESSION['rpuan']){
			echo "<script>setTimeout(function(){alert('Kazandınız!'); window.location='home.php';}, 500);</script>";
			header("Location: home.php");
			$bizzat = $_SESSION['kadi'];
			$param = $_SESSION['para'];
			$para = $param + 100;

			$paraVer = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
			$paraVerr = $paraVer->execute(array($para, $bizzat));

			$exp = $_SESSION['xp'] + 100;

			$xpEkle = $baglan->prepare("UPDATE uyeler SET xp = ? WHERE uye_kadi = ?");
			$xpEklee = $xpEkle->execute(array($exp, $bizzat));

			$_SESSION['para'] = $para;

		}else if($_SESSION['puan'] == $_SESSION['rpuan']){
			echo "<script>setTimeout(function(){alert('Berabere!'); window.location='home.php';}, 500);</script>";
			header("Location: home.php");
			$exp = $_SESSION['xp'] + 50;

			$xpEkle = $baglan->prepare("UPDATE uyeler SET xp = ? WHERE uye_kadi = ?");
			$xpEklee = $xpEkle->execute(array($exp, $bizzat));
		}else if($_SESSION['puan'] < $_SESSION['rpuan']){
			echo "<script>setTimeout(function(){alert('Kaybettiniz!'); window.location='home.php';}, 500);</script>";
			$bizzat = $_SESSION['kadi'];
			$param = $_SESSION['para'];
			$para = $param - 20;

			$paraCek = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
			$paraCekk = $paraCek->execute(array($para, $bizzat));

			$exp = $_SESSION['xp'] + 20;

			$xpEkle = $baglan->prepare("UPDATE uyeler SET xp = ? WHERE uye_kadi = ?");
			$xpEklee = $xpEkle->execute(array($exp, $bizzat));

			$_SESSION['para'] = $para;
		}
	}
?>
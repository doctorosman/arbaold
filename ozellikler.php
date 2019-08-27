<?php
	session_start();
	include 'baglan.php';

	if ($_SESSION['giris'] != "ok") {
		header("Location: index.php");
	}

	$bizzat = $_SESSION['kadi'];

	function altin(){
		echo '<img height="30" width="30" src="img/coin.png">';
	}

	$seri1kartgeta = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
	foreach ($seri1kartgeta as $r) {
		$idd = $r['alinan_urun_id'];
		$seriget = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$idd'")->fetch(PDO::FETCH_ASSOC);
		if ($seriget['seri'] == 1) {
			$serisay += 1;
		}
	}

	$seri2kartgeta = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
	foreach ($seri2kartgeta as $r) {
		$idd = $r['alinan_urun_id'];
		$seri2get = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$idd'")->fetch(PDO::FETCH_ASSOC);
		if ($seri2get['seri'] == 1) {
			$seri2say += 1;
		}
	}

	$lacasa = ['Denver', 'Nairobi', 'Profesör', 'Rio', 'Tokyo', 'Berlin'];

	$lcserisay = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
	foreach ($lcserisay as $nop) {
		switch ($nop['alinan_urun_id']) {
			case 27:
				unset($lacasa[0]);
				break;
			case 28:
				unset($lacasa[1]);
				break;

			case 29:
				unset($lacasa[2]);
				break;

			case 30:
				unset($lacasa[3]);
				break;

			case 31:
				unset($lacasa[4]);
				break;

			case 20:
				unset($lacasa[5]);
				break;
		}
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
		h3{
			padding: 20px;
			padding-bottom: 0px;
			font-family: 'Montserrat';
		}
		#ctc{
			margin-left: 30px;
			margin-top: 30px;
			padding-left: 20px;
			padding-right: 20px;
			padding-bottom: 20px;
			background-color: darkred;
			color: white;
			width: 450px;
			font-family: 'Montserrat';
			font-size: 23px;
			border-radius: 20px;
			float: left;
		}
		#ctc form input {
			position: relative;
			left: 158px;
			top: 5px;
			margin-bottom: 25px;
		}
		#co {
			background-color: white;
			width: 500px;
			margin-left: 500px;
			margin-top: 30px;
			float: left;
			position: relative;
			bottom: 530px;
			border-radius: 20px;
			height: 360px;
		}
		#co form input[name=ssan] {
			position: relative;
			left: 190px;
			font-family: 'Montserrat';
		}
		.para {
			background-color: rgb(255, 255, 255, 0.9);
			margin-left: 1050px;
			border-radius: 30px;
			padding: 3px;
			font-size: 24px;
			width: 200px;
			font-family: 'Montserrat';
			position: absolute;
			top: 30px;
		}
		.para img{
			height: 50px;
			width: 50px;
		}
		.sandik {
			background-color: rgb(255, 255, 255, 0.9);
			margin-left: 1050px;
			border-radius: 30px;
			padding: 3px;
			font-size: 24px;
			width: 200px;
			font-family: 'Montserrat';
			position: absolute;
			top: 100px;
		}
		.sandik img{
			height: 50px;
			width: 50px;
		}
		.geri {
			background-color: rgb(255, 255, 255, 0.9);
			margin-left: 1050px;
			border-radius: 30px;
			padding: 3px;
			font-size: 24px;
			width: 200px;
			font-family: 'Montserrat';
			position: absolute;
			top: 170px;
		}
		.geri img{
			height: 50px;
			width: 50px;
		}
		.indirim{
			background-color: white;
			padding: 20px;
			position: absolute;
			top: 550px;
			border-radius: 20px;
			left: 30px;
			width: 500px;
		}
		.indirim img[alt=char] {
			border-radius: 20px;
			height: 45%;
			width: 45%;
			float: left;
		}
		.indirim button{
			position: relative;
			left: 35px;
			height: 75px;
			width: 200px;
			font-size: 27px;
		}
		.indirim h5{
			position: relative;
			left: 10px;
		}
		.indirim h4{
			font-family: 'Montserrat';
		}
		.indirim h3{
			position: relative;
			left: 20px;
		}
		.indirim h2{
			font-family: 'Montserrat';
			font-size: 44px;
			position: relative;
			left: 10px;
			color: darkred;
		}
		.indirim h2:hover{
			color: darkgreen;
			cursor: default;
		}
		.indirim h2 img{
			height: 50px;
			width: 50px;
		}
		.event {
			margin-left: 30px;
			padding: 20px;
			background-color: white;
			width: 450px;
			font-size: 23px;
			border-radius: 20px;
			float: left;
			position: relative;
			bottom: 510px;
			left: 520px;
		}
		.event h4 {
			font-family: 'Montserrat';
		}
		.event img[alt=san] {
			height: 75%;
			width: 75%;
		}
		img[alt=lcdp] {
			position: relative;
			bottom: 50px;
			height: 17%;
			width: 17%;
			top: 530px;
			left: 200px;
		}
		.event h5{
			margin-top: 10px;
			animation-name: renklen;
			animation-duration: 0.5s;
			animation-delay: 1s;
			animation-iteration-count: infinite;
		}
		@keyframes renklen{
			0% {
				color: black;
			}
			100%{
				color: darkred;
			}
		}
		.event input{
			font-family: 'Montserrat';
		}
	</style>
</head>
<body>
			<div id="ctc">
				<center><h3>Sandığı Paraya Çevirme</h3></center>
				<form method="POST">
					<center><img src="img/sandik.png"></center>
					<center>5 <img height="30" width="30" src="img/sandik.png"> = 10,000 <img height="30" width="30" src="img/coin.png"></center>
					<input class="btn btn-primary" type="submit" value="Satın Al" name="san">
					<center><img height="100" width="100" src="img/sandik.png"><img height="100" width="100" src="img/sandik.png"></center>
					<center>10 <img height="30" width="30" src="img/sandik.png"> = 25,000 <img height="30" width="30" src="img/coin.png"></center>
					<input class="btn btn-primary" type="submit" value="Satın Al" name="dan">
				</form>
			</div>
			<div id="co">
				<center><h3>Sandık Açma</h3></center>
				<form method="POST">
					<center><img src="img/sandik.png"></center>
					<center><h4>Standart Sandık</h4></center>
					<center><h5><i>%50 - 1. Seri Kart,<br> %30 - Para,<br> %20 - 2. Seri Kart</i></h5></center>
					<input class="btn btn-primary" type="submit" value="Sandık Aç" name="ssan">
				</form>
			</div>
	<div class="para">
		<img src="img/papa.png"> <?php $paraAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); echo $paraAl['uye_para']; $_SESSION['para'] = $paraAl['uye_para']; ?>
	</div>
	<div class="sandik">
		<img src="img/sandik.png"> <?php $paraAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); echo $paraAl['sandik']; $_SESSION['sandik'] = $paraAl['sandik']; ?>
	</div>
	<div class="indirim">
		<h4><center>PAZAR İNDİRİMİ!</center></h4>
		<img alt="char" title="Derman" src="img/karakter/2derman.png">
		<h5><i><center>Derman Karakteri kısa bir süreliğine yalnızca 4000 altın!</center></i></h5>
		<h3><center><del>7000 <?php altin(); ?></del></center></h3>
		<h2><center>4000 <?php altin(); ?></center></h2>
		<a href="market.php?urun=Derman"><button class="btn btn-danger">Satın Al</button></a>
	</div>
	<div class="event">
		<h4><center>LA CASA DE PAPEL SANDIĞI!</center></h4>
		<center><img src="img/anichest.png" alt="san"></center>
		<h5><center><b>La casa de papel 3. sezonunun gelişi şerefine, lcdp etkinliği başlasın! Her sandıkta bir lcdp karakteri sizleri bekliyor olacak! Hadi, hemen açmaya başla!</b></center></h5><form method="POST"><center><span><input type="submit" name="lcdpac" value="Sandık aç" class="btn btn-primary"></span></center></form>
	</div><img alt="lcdp" src="img/lcdp.png">
	<a href="home.php">
	<div class="geri">
		<center><img src="img/home.png"></center>
	</div></a>
	<?php if ($_POST['lcdpac'] && $lacasa && $_SESSION['sandik'] >= 1){ ?>
		<script type="text/javascript">
			window.location = 'sandik.php?sandik=lcdp';
			<?php $_SESSION['lcdpsay'] = $lacasa; $_SESSION['lcdpsandik'] = "ac"; $paraaa = $baglan->prepare("UPDATE uyeler SET sandik = ? WHERE uye_kadi = ?"); $rabarbik = $_SESSION['sandik'] - 1; $paraab = $paraaa->execute(array($rabarbik, $bizzat)); ?>
		</script>
	<?php }else if ($_POST['lcdpac'] && $_SESSION['sandik'] >= 1){ ?>
		<script type="text/javascript">alert('LCDP serisinin tüm kartlarına sahipsiniz!');</script>
	<?php }else if ($_POST['lcdpac']) { ?>
		<script type="text/javascript">
			alert('Sandığınız kadar sandığınız yok!');
		</script>
	<?php } ?>
	<?php if ($_POST['ssan'] && $_SESSION['sandik'] >= 1 && $serisay <= 12 && $seri2say <= 12){ ?>
		<script type="text/javascript">
			var r = confirm("Standart sandık açmak istediğinize emin misiniz? (Ücret: 1 Sandık)");
			if (r == true){
				window.location = 'sandik.php?sandik=standart';
				<?php $_SESSION['standartsandik'] = "ac"; $paraaa = $baglan->prepare("UPDATE uyeler SET sandik = ? WHERE uye_kadi = ?"); $rabarbik = $_SESSION['sandik'] - 1; $paraab = $paraaa->execute(array($rabarbik, $bizzat)); ?>
			}
		</script>
	<?php }else if ($_POST['ssan'] && $_SESSION['sandik'] < 1) { ?>
		<script type="text/javascript">
			alert('Sandığınız kadar sandığınız yok!');
		</script>
	<?php }else if (($_POST['ssan'] && $_SESSION['sandik'] >= 1) && ($serisay > 12 || $seri2say > 12)){
		?>
		<script type="text/javascript">
			alert('Bu sandığı açamayacak kadar çok kartınız var!');
		</script><?php
	} ?>
</body>
</html>
<?php
	if ($_POST['san']) {
		if ($_SESSION['sandik'] >= 5) {
			$_SESSION['sandik'] -= 5;

			$sandikUpd = $baglan->prepare("UPDATE uyeler SET sandik = ? WHERE uye_kadi = ?");
			$sandikUpda = $sandikUpd->execute(array($_SESSION['sandik'], $bizzat));

			$_SESSION['para'] += 10000;

			$paraUpd = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
			$paraUpda = $paraUpd->execute(array($_SESSION['para'], $bizzat));

			echo "<script>alert('İşlem başarıyla gerçekleşti! Hayırlı olsun adamım !?%/_$%/_'); window.location = 'ozellikler.php';</script>";
		}else {
			echo "<script>alert('Yeterli sandığınız yok!'); window.location = 'ozellikler.php';</script>";
		}
	}

	if ($_POST['dan']) {
		if ($_SESSION['sandik'] >= 10) {
			$_SESSION['sandik'] -= 10;

			$sandikUpd = $baglan->prepare("UPDATE uyeler SET sandik = ? WHERE uye_kadi = ?");
			$sandikUpda = $sandikUpd->execute(array($_SESSION['sandik'], $bizzat));

			$_SESSION['para'] += 25000;

			$paraUpd = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
			$paraUpda = $paraUpd->execute(array($_SESSION['para'], $bizzat));

			echo "<script>alert('İşlem başarıyla gerçekleşti! Hayırlı olsun adamım !?%/_$%/_'); window.location = 'ozellikler.php';</script>";
		}else {
			echo "<script>alert('Yeterli sandığınız yok!'); window.location = 'ozellikler.php';</script>";
		} 
	}
?>
<?php
	session_start();
	include 'baglan.php';

	if ($_SESSION['giris'] != "ok"){
		header("Location: index.php");
	}

	$bizzat = $_SESSION['kadi'];

	$gorevGet = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC);

	$_SESSION['gorev'] = $gorevGet['gorev'];

	class Gorev{

		private $gorevSeviye;
		private $gorevAciklama;
		private $gorevOdul;
		private $gorevOdulGorsel = 'coin.png';
		private $gorevGorsel;
		private $gorevGorselH;
		private $gorevGorselW;

		public function __construct($gS, $gA, $gO, $gG, $gGW, $ggH){
					$this->gorevSeviye = $gS;
					$this->gorevAciklama = $gA;
					$this->gorevOdul = $gO;
					$this->gorevGorsel = $gG;
					$this->gorevGorselW = $gGW;
					$this->gorevGorselH = $gGH;
		}

		public function ogDegistir($gOG){
			$this->gorevOdulGorsel = $gOG;
		}

		public function gorevYap(){
			echo '<input type="checkbox" class="form-control" disabled>
					<center><h2>'.$this->gorevSeviye.'. Görev</h2>
					<h5>'.$this->gorevAciklama.'</h5>
					<h3>Ödül: '.$this->gorevOdul.' <img alt="para" src="img/'.$this->gorevOdulGorsel.'"></h3>
					<img height="'.$this->gorevGorselH.'" width="'.$this->gorevGorselW.'" src="img/'.$this->gorevGorsel.'"></center>';	
		}

		public function gorevTamamla(){
			echo '<input type="checkbox" class="form-control" checked disabled>
					<center><h2>'.$this->gorevSeviye.'. Görev</h2>
					<h5>'.$this->gorevAciklama.'</h5>
					<h3>Ödül: '.$this->gorevOdul.' <img alt="para" src="img/'.$this->gorevOdulGorsel.'"></h3>
					<img height="'.$this->gorevGorselH.'" width="'.$this->gorevGorselW.'" src="img/'.$this->gorevGorsel.'"></center>
					<h4><center>
					<a href="gorev.php?gorev'.$this->gorevSeviye.'=son">Görevi Tamamla</a></center></h4>';
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
		.ust{
			background-color: white;
			padding: 10px;
			height: 150px;
		}
		.ust img{
			float: left;
		}
		.ust h3{
			font-size: 36px;
			font-family: 'Montserrat';
			float: left;
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
		.gorev{
			padding: 20px;
			background-color: white;
			margin-top: 20px;
		}
		.gorev img[alt=para]{
			height: 40px;
			width: 40px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="ust">
			<img src="img/gorev.png">
			<h3>Görev Seviyeniz: <?php echo $_SESSION['gorev']; ?></h3>
			<a href="home.php"><b>Geri Dön</b></a>
		</div>
	</div>
	<div class="container">
		<div class="gorev">
			<?php ## GÖREV 1
				$gorev1 = new Gorev(1, "Marketten bir ürün satın al.", 100, 'market.png', 200, 200);

				if ($_SESSION['gorev'] == 0){
					$larGet = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);

					foreach ($larGet as $l) {
						if ($l['alinan_urun_id'] != 1 && $l['alinan_urun_id'] != 4 && $l['alinan_urun_id'] != 7 && $l['alinan_urun_id'] != 11 && $l['alinan_urun_id'] != 12){
							$nope = True;
						}
					}

					if (!$nope){
						$gorev1->gorevYap();
					}else {
						$gorev1->gorevTamamla();
					}
				}
			?>
			<?php ## GÖREV 2
				$gorev2 = new Gorev(2, "Marketten 2. Seri bir ürün al.", 200, 'market.png', 200, 200);

				if ($_SESSION['gorev'] == 1){
					$gorev2check = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
					
					foreach ($gorev2check as $a) {
						$asid = $a['alinan_urun_id'];
						
						$urGet = $baglan->query("SELECT * FROM kartlar WHERE kart_id = '$asid'")->fetch(PDO::FETCH_ASSOC);

						if ($urGet['seri'] == 2){
							$nope = True;
						}
					}

					if (!$nope){
						$gorev2->gorevYap();
					}else{
						$gorev2->gorevTamamla();
					}
				}
			?>
			<?php ## GÖREV 3
				$gorev3 = new Gorev(3, "Marketten Shi karakterini satın al.", 500, 'market.png', 200, 200);

				if ($_SESSION['gorev'] == 2){
					$gorev3check = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
					
					foreach ($gorev3check as $a) {
						if ($a['alinan_urun_id'] == 21) {
							$nope = True;
						}
					}

					if (!$nope){
						$gorev3->gorevYap();
					}else {
						$gorev3->gorevTamamla();
					}
				}
			?>
			<?php ## GÖREV 4 
				$gorev4 = new Gorev(4, "Toplamda 10 karakter al.", 1, "market.png", 200, 200);
				
				$gorev4->ogDegistir("sandik.png");
				
				if ($_SESSION['gorev'] == 3) {
					$gorev4check = $baglan->query("SELECT * FROM satin_almalar WHERE uye_kadi = '$bizzat'", PDO::FETCH_ASSOC);
					$t = 0;
					foreach ($gorev4check as $ref) {
						$t++;
					}

					if ($t >= 10){
						$gorev4->gorevTamamla();
					}else {
						$gorev4->gorevYap();
					}
				}
			?>
			<?php ## GÖREV 5

				$gorev5 = new Gorev(5, "Bir sandık aç.", 5, 'anichest.png', 200, 200);

				$gorev5->ogDegistir('sandik.png');

				if ($_SESSION['gorev'] == 4) {
					if ($_SESSION['sandik'] == 0) {
						$gorev5->gorevTamamla();
					}else {
						$gorev5->gorevYap();
					}
				} 

			?>
			<?php ## GÖREV 6
				if ($_SESSION['gorev'] == 5) {
					echo "<center><h1>Yeni görevler çok yakında!</h1></center>";
				}
			?>
		</div>
	</div>
</body>
</html>
<?php
	if ($_GET['gorev1'] == "son" && $_SESSION['gorev'] == 0) {
		$_SESSION['gorev'] = 1;

		$gorevUpd = $baglan->prepare("UPDATE uyeler SET gorev = ? WHERE uye_kadi = ?");
		$gorevUpda = $gorevUpd->execute(array($_SESSION['gorev'], $bizzat));

		$newP = $_SESSION['para'] += 100;

		$paraUpd = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
		$paraUpda = $paraUpd->execute(array($newP, $bizzat));

		echo "<script>alert('Görev tamamlandı. Ödülünüz: 100'); window.location = 'home.php';</script>";
	}

	if ($_GET['gorev2'] == "son" && $_SESSION['gorev'] == 1) {
		$_SESSION['gorev'] = 2;

		$gorevUpd = $baglan->prepare("UPDATE uyeler SET gorev = ? WHERE uye_kadi = ?");
		$gorevUpda = $gorevUpd->execute(array($_SESSION['gorev'], $bizzat));

		$newP = $_SESSION['para'] += 200;

		$paraUpd = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
		$paraUpda = $paraUpd->execute(array($newP, $bizzat));

		echo "<script>alert('Görev tamamlandı. Ödülünüz: 200'); window.location = 'home.php';</script>";
	}

	if ($_GET['gorev3'] == "son" && $_SESSION['gorev'] == 2) {
		$_SESSION['gorev'] = 3;

		$gorevUpd = $baglan->prepare("UPDATE uyeler SET gorev = ? WHERE uye_kadi = ?");
		$gorevUpda = $gorevUpd->execute(array($_SESSION['gorev'], $bizzat));

		$newP = $_SESSION['para'] += 500;

		$paraUpd = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
		$paraUpda = $paraUpd->execute(array($newP, $bizzat));

		echo "<script>alert('Görev tamamlandı. Ödülünüz: 500'); window.location = 'home.php';</script>";
	}

	if ($_GET['gorev4'] == "son" && $_SESSION['gorev'] == 3) {
		$_SESSION['gorev'] = 4;

		$gorevUpd = $baglan->prepare("UPDATE uyeler SET gorev = ? WHERE uye_kadi = ?");
		$gorevUpda = $gorevUpd->execute(array($_SESSION['gorev'], $bizzat));

		$newP = $_SESSION['sandik'] + 1;

		$paraUpd = $baglan->prepare("UPDATE uyeler SET sandik = ? WHERE uye_kadi = ?");
		$paraUpda = $paraUpd->execute(array($newP, $bizzat));

		echo "<script>alert('Görev tamamlandı. Ödülünüz: 1 Sandık'); window.location = 'home.php';</script>";
	}

	if ($_GET['gorev5'] == "son" && $_SESSION['gorev'] == 4) {
		$_SESSION['gorev'] = 5;

		$gorevUpd = $baglan->prepare("UPDATE uyeler SET gorev = ? WHERE uye_kadi = ?");
		$gorevUpda = $gorevUpd->execute(array($_SESSION['gorev'], $bizzat));

		$newP = $_SESSION['sandik'] + 5;

		$paraUpd = $baglan->prepare("UPDATE uyeler SET sandik = ? WHERE uye_kadi = ?");
		$paraUpda = $paraUpd->execute(array($newP, $bizzat));

		echo "<script>alert('Görev tamamlandı. Ödülünüz: 5 Sandık'); window.location = 'home.php';</script>";
	}
?>
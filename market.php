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

	$bizzat = $_SESSION['kadi'];

	$paraAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); $_SESSION['para'] = $paraAl['uye_para'];
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
		.paran{
			background-color: rgb(255, 255, 255, 0.9);
			border-radius: 30px;
			padding: 3px;
			width: 200px;
			font-family: 'Montserrat';
			font-size: 24px;
			position: relative;
			top: 75px;
			left: 250px;
		}
		.paran:hover{
			color: darkgreen;
		}
		.paran img{
			height: 50px;
			width: 50px;
		}
		.para{
			background-color: rgb(255, 255, 255, 0.9);
			border-radius: 30px;
			padding: 3px;
			width: 200px;
			font-family: 'Montserrat';
			font-size: 24px;
		}
		.para:hover{
			color: darkgreen;
		}
		.para img{
			height: 50px;
			width: 50px;
		}
		.menu{
			background-color: darkred;
			border-radius: 20px;
			padding: 10px;
			margin-top: 100px;
		}
		.shop h3{
			font-size: 27px;
			font-family: 'Montserrat';
		}
		.shop h3:hover{
			color: darkgreen;
			cursor: default;
		}
		.shop{
			padding: 10px;
			min-height: 2000px;
			background-color: white;
		}
		#sad{ padding-left: 0px;padding-right: 0px; border-top-left-radius: 20px; border-top-right-radius: 20px;}
		.home{
			border-radius: 50px;
			background-color: rgb(255, 255, 255, 0.9);
			padding: 10px;
			width: 70px;
			float: right;
			position: relative;
			bottom: 63px;
		}
		.home:hover{
			cursor: pointer;
		}
		.urun{
			height: 15%;
			width: 15%;
			float: left;
			background-color: rgb(255, 255, 255, 0.5);
			border-radius: 20px;
			margin: 20px;
		}
		.urun img{
			height: 100%;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			width: 100%;
		}
		.aaaurun{
			float: left;
			background-color: darkblue;
			border-radius: 20px;
			margin: 20px;
			padding: 30px;
		}
		.aaaurun img[alt=yep]{
			height: 100%;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			width: 100%;
		}
		.uruna{
			height: 19%;
			width: 19%;
			float: left;
			background-color: rgb(255, 255, 255, 0.5);
			border-radius: 20px;
			margin: 20px;
			margin-left: -50px;
		}
		.uruna img{
			height: 100%;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			width: 100%;
		}
		#fiyat{
			background-color: skyblue;
			font-size: 20px;
			font-family: 'Montserrat';
		}
		#fiyat img{
			width: 30px;
			height:  30px;
		}
		#alinan{
			opacity: 0.7;
		}
		a{
			text-decoration: none;
			color: black;
		}
		.onay{
			padding: 30px;
			font-size: 45px;
			font-family: 'Montserrat';
		}
		.onay input{
			margin: 20px;
			font-size: 33px;
			padding: 20px;
			background-color: green;
			width: 200px;
			border: 0;
			border-radius: 10px;
			font-family: 'Montserrat';
			float: left;
			color: white;
			border: 3px solid black;
		}
		.onay form input{
			margin-left: 120px;
		}
		.onay{
			background-color: white;
			margin-left: 200px;
			height: 250px;
			padding-left: 100px;
			border-radius: 20px;
			position: relative;
			top: 100px;
			left: 50px;
		}
		.ozel{
			position: absolute;
			margin-top: -20px;
			margin-left: -20px;
		}
		.ozel img{
			height: 50px;
			width: 50px;
		}
		.seri1{
			background-color: #760000;
			height: 940px;
			width: 50px;
			padding: 5px;
			position: relative;
			left: 1165px;
			color: white;
			font-family: 'Montserrat';
			font-size: 50px;
			border-radius: 5px;
			top: -1950px;
		}
		.seri2{
			background-color: #220134;
			height: 940px;
			width: 50px;
			padding: 5px;
			position: relative;
			left: 1165px;
			color: white;
			font-family: 'Montserrat';
			font-size: 50px;
			border-radius: 5px;
			top: -1930px;
		}
		.sandik{
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
		.sandik:hover{
			color: darkgreen;
		}
		.sandik img{
			height: 60px;
			width: 60px;
		}
	</style>
</head>
<body>
	<?php if(!$_GET){ ?>
	<div class="container" id="sad">
		<div class="menu">
			<div class="para">
				<img src="img/papa.png"> <?php $paraAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); $_SESSION['para'] = $paraAl['uye_para']; echo $paraAl['uye_para']; ?>
			</div>
			<div class="sandik">
		<img src="img/sandik.png"> <?php $paraAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); echo $paraAl['sandik']; $_SESSION['sandik'] = $paraAl['sandik']; ?>
	</div>
			<a href="home.php">
			<div class="home">
				<img height="50" width="50" src="img/home.png">
			</div></a>
		</div>	
		<div class="shop">
			<h3>Karakterler</h3>
			<?php
				$o = 1;
				$urunCek = $baglan->query("SELECT * FROM kartlar WHERE market_durum = '$o' ORDER BY seri ASC, fiyat ASC", PDO::FETCH_ASSOC);
				foreach ($urunCek as $urun){
					$id = $urun['kart_id'];

					$alindiMi = $baglan->query("SELECT * FROM satin_almalar WHERE alinan_urun_id = '$id' AND uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC);
					if ($alindiMi){ 
						if ($id == 13 || $id == 17 || $id == 19){ ## ÖZEL KARAKTER EKLEME
							echo "<div class='urun' id='alinan'><div class='ozel'><img title='Özel Karakter' src='img/yildiz.png'></div><img src='img/karakter/".$urun['kart_konum']."'><div id='fiyat'><center>".$urun['fiyat']." <img src='img/coin.png'></center></div></div>";
						}else if($id == 24 || $id == 32){
						## SESLİ KARAKTER
							echo "<div class='urun' id='alinan'><div class='ozel'><img title='Ses Efektli Karakter' src='img/ses.png'></div><img src='img/karakter/".$urun['kart_konum']."'><div id='fiyat'><center>".$urun['fiyat']." <img src='img/coin.png'></center></div></div>";
						}else if($id == 25 || $id == 23){
							### TÜPÇÜLER
							echo "<div class='urun' id='alinan'><div class='ozel'><img title='Tüpçü' src='img/tup.png'></div><img src='img/karakter/".$urun['kart_konum']."'><div id='fiyat'><center>".$urun['fiyat']." <img src='img/coin.png'></center></div></div>";
						}else {
							echo "<div class='urun' id='alinan'><img src='img/karakter/".$urun['kart_konum']."'><div id='fiyat'><center>".$urun['fiyat']." <img src='img/coin.png'></center></div></div>";
						}
					}else {
						if ($id == 13 || $id == 17 || $id == 19){
							## ÖZEL KARAKTER
							echo "<a href='market.php?urun=".$urun['karakter_adi']."'><div class='urun'><div class='ozel'><img title='Özel Karakter' src='img/yildiz.png'></div><img src='img/karakter/".$urun['kart_konum']."'><div id='fiyat'><center>".$urun['fiyat']." <img src='img/coin.png'></center></div></div></a>";
						}else if($id == 24 || $id == 32){
							## SES EFEKTLİ KARAKTER
							echo "<a href='market.php?urun=".$urun['karakter_adi']."'><div class='urun'><div class='ozel'><img title='Ses Efektli Karakter' src='img/ses.png'></div><img src='img/karakter/".$urun['kart_konum']."'><div id='fiyat'><center>".$urun['fiyat']." <img src='img/coin.png'></center></div></div></a>";
						}else if($id == 16){
							### İNDİRİMLİ KARAKTER
							echo "<a href='market.php?urun=".$urun['karakter_adi']."'><div class='urun'><div class='ozel'><img title='İndirimli Karakter' src='img/sale.png'></div><img src='img/karakter/".$urun['kart_konum']."'><div id='fiyat'><center>".($urun['fiyat'] - 3000)." <img src='img/coin.png'></center></div></div></a>";
						}else if($id == 25 || $id == 23){
							### TÜPÇÜLER
							echo "<a href='market.php?urun=".$urun['karakter_adi']."'><div class='urun'><div class='ozel'><img title='Tüpçü' src='img/tup.png'></div><img src='img/karakter/".$urun['kart_konum']."'><div id='fiyat'><center>".$urun['fiyat']." <img src='img/coin.png'></center></div></div></a>";
						}else { 
							echo "<a href='market.php?urun=".$urun['karakter_adi']."'><div class='urun'><img src='img/karakter/".$urun['kart_konum']."'><div id='fiyat'><center>".$urun['fiyat']." <img src='img/coin.png'></center></div></div></a>";
						}
					}
				}
			?>

		</div>

		</div>
		<div class="seri1"><center>
		1. S<br>E<br>R<br>İ<br><br><br>1. S<br>E<br>R<br>İ</center>
	</div><div class="seri2"><center>
		2. S<br>E<br>R<br>İ<br><br><br>2. S<br>E<br>R<br>İ</center>
	</div>

	<?php } ?>

<?php
	$urunCek = $baglan->query("SELECT * FROM kartlar ORDER BY fiyat ASC", PDO::FETCH_ASSOC);
	foreach ($urunCek as $urun) {
		if ($_GET['urun'] == $urun['karakter_adi'] && $_GET['alinan'] != "yes"){
?>
	<div class="container" id="sada">
		<div class="paran">
				<img src="img/papa.png"> <?php $paraAl = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$bizzat'")->fetch(PDO::FETCH_ASSOC); echo $paraAl['uye_para']; ?>
			</div>
		<div class="uruna">
			<img src="<?php echo "img/karakter/".$urun['kart_konum']; ?>">
			<div id="fiyat"><center>
				<?php if($urun['kart_id'] == 16){ ### İNDİRİM
					echo ($urun['fiyat'] - 3000);
				}else { echo $urun['fiyat'];} ?> <img src="img/coin.png">
			</center></div>
		</div>
		<div class="onay">
			<b>Satın almak istiyor musunuz?</b>
			<form method="POST">
				<input type="submit" value="Evet" name="<?php echo altTire($urun['karakter_adi']); ?>">
			</form>
			<a href="market.php"><input type="submit" value="Hayır"></a>
		</div>
	</div>
<?php
		if ($_POST[altTire($urun['karakter_adi'])]){
			if ($urun['kart_id'] == 16){
				$urun['fiyat'] -= 3000;
			}
			$paramiz = $_SESSION['para'];
			if ($paramiz >= $urun['fiyat']){
				$parami = $paramiz - $urun['fiyat'];

				$fiyat = $urun['fiyat'];
				$kid = $urun['kart_id'];

				$al = $baglan->prepare("UPDATE uyeler SET uye_para = ? WHERE uye_kadi = ?");
				$all = $al->execute(array($parami, $bizzat));

				$ver = $baglan->prepare("INSERT satin_almalar SET uye_kadi = ?, alinan_urun_id = ?, fiyat = ?");
				$verr = $ver->execute(array($bizzat, $kid, $fiyat));

				echo "<script>alert('Satın alındı!'); window.location = 'market.php'</script>";
			}else {
				echo "<script>alert('Yeterli para yok!');</script>";
			}
		}
	}
}
?>
</body>
</html>
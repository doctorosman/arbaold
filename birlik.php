<?php
	session_start();
	include 'baglan.php';

	if ($_SESSION['giris'] != "ok"){
		header("Location: index.php");
	}

	$bizzat = $_SESSION['kadi'];

	$birlikget = $baglan->query("SELECT * FROM birlikler WHERE uye1 = '$bizzat' OR uye2 = '$bizzat' OR uye3 = '$bizzat' OR uye4 = '$bizzat' OR uye5 = '$bizzat'")->fetch(PDO::FETCH_ASSOC);
	if ($birlikget) {
		$_SESSION['birlik'] = $birlikget['birlik_adi'];
		$_SESSION['birlikid'] = $birlikget['birlik_id'];
		$_SESSION['birlikuye1'] = $birlikget['uye1'];
		$_SESSION['birlikuye2'] = $birlikget['uye2'];
		$_SESSION['birlikuye3'] = $birlikget['uye3'];
		$_SESSION['birlikuye4'] = $birlikget['uye4'];
		$_SESSION['birlikuye5'] = $birlikget['uye5'];
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
		input[type=number]::-webkit-outer-spin-button,
		input[type=number]::-webkit-inner-spin-button {
		  -webkit-appearance: none;
		  margin: 0;
		}
		 
		input[type=number] {
		    -moz-appearance:textfield;
		}
		 
		body{
			background-image: url('img/bg2.jpg');
			background-size: 100%;
			background-attachment: fixed;
		}
		.genel {
			margin-top: 200px;
			padding: 20px;
		}
		.giris {
			background-color: white;
			padding: 10px;
			border-radius: 20px;
			color: black;
			float: left;
		}
		.giris:hover{
			color: green;
		}
		#olustur{
			position: relative;
			left: 30px;
		}
		.giris b{
			font-family: 'Montserrat';
			font-size: 47px;
			position: relative;
			top: 10px;
		}
		a:hover {
			text-decoration: none;
			color: green;
		}
		.gir {
			padding: 140px;
			background-color: white;
			border-radius: 20px;
			height: 420px;
		}
		.gir form{
			margin-left: 130px;
		}
		.gir input[type=number] {
			width: 72px;
			height: 100px;
			float: left;
			margin-right: 30px;
			font-size: 72px;
			text-align: center;
			color: darkblue;
			font-family: 'Montserrat';
			s
		}
		#baslik {
			font-family: 'Montserrat';
			font-size: 80px;
			text-align: center;
			position: relative;
			top: 130px;
			color: black;
		}
		.gir input[type=submit]{
			position: relative;
			top: 30px;
			font-size: 60px;
			padding: 15px;
			width: 180px;
			right: 58px;
		}
		.birliktop {
			background-color: white;
			padding: 20px;
			font-family: 'Montserrat';
			height: 160px;
		}
		.birliktop img{
			float: left;
		}
		.birliktop h1{
			float: left;
			font-size: 47px;
			color: black;
			position: relative;
			top: 30px;
		}
		.home{
			border-radius: 50px;
			background-color: rgb(255, 255, 255, 0.9);
			padding: 10px;
			width: 70px;
			float: right;
		}
		.home:hover{
			cursor: pointer;
		}
		.birlikgenel{
			background-color: white;
			padding: 20px;
		}
		.birlikgenel table tr td{
			padding: 15px;
			margin: 10px;
			border: 1px solid lightgray;
			border-radius: 5px;
			background-color: lightgray;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php
			if ($_GET['birlik'] == "olustur"){
?>
		
<?php
			}else if ($_GET['birlik'] == "katil"){
?>		
			<div id="baslik">Birlik Kodunu Gir</div><b>
			<div class="gir"><form method="POST"><input oninput="document.getElementById('iki').focus();" class="form-control" type="number" name="bir" id="bir" maxlength="1"><input class="form-control" class="form-control" type="number" id="iki" oninput="document.getElementById('uc').focus();" name="iki" maxlength="1"><input class="form-control" oninput="document.getElementById('dort').focus();" type="number" id="uc" name="uc" maxlength="1"><input class="form-control" type="number" oninput="document.getElementById('bes').focus();" id="dort" name="dort" maxlength="1"><input class="form-control" type="number" id="bes" oninput="document.getElementById('alti').focus();" name="bes" maxlength="1"><input class="form-control" type="number" id="alti" name="alti" maxlength="1"><center><input type="submit" name="giriveri" class="btn btn-danger" value="Katıl"></center></form></div></b>
<?php
			}else {
			if ($_SESSION['birlik']){
		?>

			<div class="birliktop">
				<img src="img/tac.png"><h1><?php echo $_SESSION['birlik']; ?> BİRLİĞİ</h1>

			<a href="home.php">
			<div class="home">
				<img height="50" width="50" src="img/home.png">
			</div></a>
			</div>

			<div class="birlikgenel">
				<ul>
					<?php
						$bid = $_SESSION['birlikid'];

						$memberGet = $baglan->query("SELECT * FROM birlikler WHERE birlik_id = '$bid'")->fetch(PDO::FETCH_ASSOC);
						
						if ($memberGet):
					?>
					<table>
						<tr>
							<td>#</td>
							<td>Oyuncu Adı</td>
							<td>Kullanıcı Adı</td>
							<td>Rütbe</td>
							<td>Para</td>
							<td>Sandık</td>
							<td>Seviye</td>
							<td>Kart Gönder</td>
							<td>Para Gönder</td>
							<td>Sandık Gönder</td>
						</tr>
						<tr>
							<td>1</td>
							<?php
								$member = $memberGet['uye1'];
								$memberInfoGet = $baglan->query("SELECT * FROM uyeler WHERE uye_kadi = '$member'")->fetch(PDO::FETCH_ASSOC);
								if ($memberInfoGet):
							?>
							<td><?php echo $memberInfoGet['uye_adsoyad']; ?></td>
							<td><?php echo $memberInfoGet['uye_kadi']; ?></td>
							<td>Lider</td>
							<td><?php echo $memberInfoGet['uye_para']; ?></td>
							<td><?php echo $memberInfoGet['uye_sandik']; ?></td>
							<td><?php echo $memberInfoGet['uye_seviye']; ?></td>
						</tr>
					<?php endif ?>
					</table>

				<?php endif ?>
				</ul>
			</div>

		<?php
			}else {
		?>
			<div class="genel row">
				<a href="birlik.php?birlik=katil">
					<div class="giris">
						<img src="img/birlik.png"><b>BİRLİĞE KATIL</b>
					</div>
				</a>
				<a href="birlik.php?birlik=olustur">
					<div id="olustur" class="giris">
						<img src="img/heda.png"><b>BİRLİK OLUŞTUR</b>
					</div>
				</a>
			</div>
		<?php
			}}
		?>
	</div>
</body>
</html>
<?php 
	if ($_POST['giriveri']) {
		if ($_POST['bir'] && $_POST['iki'] && $_POST['uc'] && $_POST['dort'] && $_POST['bes'] && $_POST['alti']){
			$giriverkod = $_POST['bir'].$_POST['iki'].$_POST['uc'].$_POST['dort'].$_POST['bes'].$_POST['alti'];

			$birlikBul = $baglan->query("SELECT * FROM birlikler WHERE birlik_kod = '$giriverkod'")->fetch(PDO::FETCH_ASSOC);

			if ($birlikBul) {
				$birlikid = $birlikBul['birlik_id'];
				if (!$birlikBul['uye1']) {
					$birlikGir = $baglan->prepare("UPDATE birlikler SET uye1 = ? WHERE birlik_id = ?");
					$birlikGira = $birlikGir->execute(array($bizzat, $birlikid));
					echo "<script>alert('".$birlikBul['birlik_adi']." birliğine başarıyla katıldınız!'); window.location = 'birlik.php';</script>";
				}else if (!$birlikBul['uye2']) {
					$birlikGir = $baglan->prepare("UPDATE birlikler SET uye2 = ? WHERE birlik_id = ?");
					$birlikGira = $birlikGir->execute(array($bizzat, $birlikid));
					echo "<script>alert('".$birlikBul['birlik_adi']." birliğine başarıyla katıldınız!'); window.location = 'birlik.php';</script>";
				}else if (!$birlikBul['uye3']) {
					$birlikGir = $baglan->prepare("UPDATE birlikler SET uye3 = ? WHERE birlik_id = ?");
					$birlikGira = $birlikGir->execute(array($bizzat, $birlikid));
					echo "<script>alert('".$birlikBul['birlik_adi']." birliğine başarıyla katıldınız!'); window.location = 'birlik.php';</script>";
				}else if (!$birlikBul['uye4']) {
					$birlikGir = $baglan->prepare("UPDATE birlikler SET uye4 = ? WHERE birlik_id = ?");
					$birlikGira = $birlikGir->execute(array($bizzat, $birlikid));
					echo "<script>alert('".$birlikBul['birlik_adi']." birliğine başarıyla katıldınız!'); window.location = 'birlik.php';</script>";
				}else if (!$birlikBul['uye5']) {
					$birlikGir = $baglan->prepare("UPDATE birlikler SET uye5 = ? WHERE birlik_id = ?");
					$birlikGira = $birlikGir->execute(array($bizzat, $birlikid));
					echo "<script>alert('".$birlikBul['birlik_adi']." birliğine başarıyla katıldınız!'); window.location = 'birlik.php';</script>";
				}else {
					echo "<script>alert('".$birlikBul['birlik_adi']." birliğinde boş yer yok!'); window.location = 'birlik.php';</script>";
				}
			}else {
				echo "<script>alert('Bu koda ait birlik bulunamadı!'); window.location = 'birlik.php';</script>";
			}
		}
	}
?>
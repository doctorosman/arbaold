<?php
	$user = "root";
	$pass = "osmany.inan";
	$dsn = "mysql:host=localhost;dbname=haydar";

	try {
		$baglan = new PDO($dsn, $user, $pass);
	} catch (PDOException $e) {
		echo "Hata: ".$e->getMessage();
	}

	date_default_timezone_set("Etc/GMT-3");
?>
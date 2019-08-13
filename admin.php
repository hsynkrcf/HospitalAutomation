<?php
ob_start(); 
session_start();
include "baglanti.php";
?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-9">
	<style type="text/css">
		li {display:inline; margin-right: 20px}
	</style>
</head>

<?php
		if($_POST){
			$kullanici_adi = $_POST["kullanici_adi"];
			$sifre = $_POST["sifre"];
			$bul = mysql_query("SELECT * FROM kullanicilar WHERE kullanici_adi = '$kullanici_adi' && sifre = '$sifre'");
			$say = mysql_fetch_array($bul);
			
				if($say > 0 ){
					$_SESSION["session_adi"] = true;
					$_SESSION["kullanici_adi"] = $kullanici_adi;
					$_SESSION["sifre"] = $sifre;
					
	                echo "<li><a href='personellerara.php'>Personel Ara</a>";
					echo "<li><a href='hastaara.php'>Hasta Ara</a>";
					echo "<li><a href='hastaisimleri.php'>Kayıtlı Hastalar</a>";
					echo "<li><a href='personelisim.php'>Kayıtlı Personeller</a>";
	                echo "<li><a href='bolum.php'>Bölümler</a>";
					

					if(isset($_GET["sayfa"]))
		include $_GET["sayfa"].".php";

	if(isset($_POST["sayfa"]))
		include $_POST["sayfa"].".php";

				}else{
					echo "GİRİŞ BAŞARISIZ";
				}
		}else{
			echo '
				<center>
					<form method="POST">
						<div>
						  <h1>Kullanıcı Adı</h1>
						  <input type="text" name="kullanici_adi">
						</div>
						<div>
						  <h1>Kullanıcı Parolası</h1>
						  <input type="password" name="sifre"><br><br>
						  <input type="submit" value="GİRİŞ YAP">
						</div>
					</form>
				</center>
			';
		}
		?>




</html>
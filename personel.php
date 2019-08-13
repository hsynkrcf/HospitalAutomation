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
			$tc = $_POST["tc"];
			$sifre = $_POST["sifre"];
			$bul = mysql_query("SELECT * FROM personeller WHERE tc = '$tc' && sifre = '$sifre'");
			$say = mysql_fetch_array($bul);
			
				if($say > 0 ){
					$_SESSION["session_adi"] = true;
					$_SESSION["tc"] = $tc;
					$_SESSION["sifre"] = $sifre;
					
					
	                echo "<li><a href='personelbilgi.php'>Personel Bilgi Düzenle</a>";
					

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
						  <h1>Kullanıcı TC</h1>
						  <input type="text" name="tc">
						</div>
						<div>
						  <h1>Kullanıcı Parolası</h1>
						  <input type="password" name="sifre"><br><br>
						  <input type="submit" value="GİRİŞ YAP">
						  <input type="button" value="KAYDOL" onclick=location.href="personelkayit.php">
						</div>
					</form>
				</center>
			';
		}
		?>




</html>
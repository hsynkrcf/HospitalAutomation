<?php
include('baglanti.php');
?>
<html>
<head></head>
<body>
<a href='personellerara.php'>Personel Ara</a>
<a href='hastaara.php'>Hasta Ara</a>
<a href='hastaisimleri.php'>Kay�tl� Hastalar</a>
<a href='personelisim.php'>Kay�tl� Personeller</a>
<a href='bolum.php'>B�l�m Ekle</a><br><br>
		
		<form action="bolum.php" method="POST">
		BOLUM ADI GIRINIZ:<input type="text" name="bolum_adi">
		<input type="submit" value="Kaydet" name="kaydet">
		</form>
<?php
if(isset($_POST["kaydet"]))
		{
		mysql_query("INSERT INTO bolum VALUES('','".$_POST["bolum_adi"]."')") or die(mysql_error());
		}
?>
<?php
$veriler=mysql_query("SELECT*FROM bolum") or die(mysql_error());
$sayac=0;
while($veri=mysql_fetch_row($veriler))
{
	$sayac++;
	echo $sayac.")".$veri[1]."<br>";
	
}
?>
</body>
</html>
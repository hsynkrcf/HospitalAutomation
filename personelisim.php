<?php
ob_start(); 
session_start();
include "baglanti.php";
?>	
<a href='personellerara.php'>Personel Ara</a>
<a href='hastaara.php'>Hasta Ara</a>
<a href='hastaisimleri.php'>Kayýtlý Hastalar</a>
<a href='personelisim.php'>Kayýtlý Personeller</a>
<a href='bolum.php'>Bölüm Ekle</a><br><br>
	<?php
$veriler=mysql_query("SELECT*FROM personeller") or die(mysql_error());
$sayac=0;
while($veri=mysql_fetch_row($veriler))
{
	$sayac++;
	echo $sayac.")".$veri[1]."----".$veri[2]."----".$veri[3]."----".$veri[4]."----".$veri[5]."<br>";
	
}
?>

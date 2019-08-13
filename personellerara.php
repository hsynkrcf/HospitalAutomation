<?php
include('baglanti.php');
?>
<html>
<head></head>
<body>
<a href='personellerara.php'>Personel Ara</a>
<a href='hastaara.php'>Hasta Ara</a>
<a href='hastaisimleri.php'>Kayýtlý Hastalar</a>
<a href='personelisim.php'>Kayýtlý Personeller</a>
<a href='bolum.php'>Bölüm Ekle</a><br><br>

<form action="personellerara.php" method="POST">
	ID:<input type="text" name="ara_id">
	TC<input type="text" name="ara_tc">
	ADI:<input type="text" name="ara_adi">
	SOYADI<input type="text" name="ara_soyadi">
	BOLUM<input type="text" name="ara_bolum">
	<input type="hidden" name="sayfa" value="personeller">
	<input type="submit" value="ARA" name="ara_butonu"><br>
</form>
<?php


$sorgu="SELECT * FROM personeller";

if(isset($_POST["ara_butonu"]))
	{
		
		
		if($_POST["ara_id"]!="" || $_POST["ara_tc"]!="" || $_POST["ara_adi"]!="" ||$_POST["ara_soyadi"]!="" ||$_POST["ara_bolum"]!="") 
			$sorgu.= " WHERE ";
		
		$yancumlecik_basladi=0;

		if($_POST["ara_id"]!="") 
		{
			$sorgu.=" id='".$_POST["ara_id"]."'";
		$yancumlecik_basladi=1;
		}

		if($_POST["ara_tc"]!="") 
		{
			if($yancumlecik_basladi==1)		$sorgu.=" and ";

			$sorgu.=" tc='".$_POST["ara_tc"]."'";
		$yancumlecik_basladi=1;
		}

		if($_POST["ara_adi"]!="") 
		{
			if($yancumlecik_basladi==1)		$sorgu.=" and ";
			$sorgu.=" adi='".$_POST["ara_adi"]."'";
			$yancumlecik_basladi=1;
		}
		if($_POST["ara_soyadi"]!="") 
		{
			if($yancumlecik_basladi==1)		$sorgu.=" and ";
			$sorgu.=" soyadi='".$_POST["ara_soyadi"]."'";
			$yancumlecik_basladi=1;
		}

		if($_POST["ara_bolum"]!="") 
		{
			if($yancumlecik_basladi==1)		$sorgu.=" and ";
			$sorgu.=" bolum='".$_POST["ara_bolum"]."'";
			$yancumlecik_basladi=1;
		}
	}
	

		$veriler=mysql_query($sorgu);
		
		while($veri=mysql_fetch_assoc($veriler))
		{
			echo $veri["id"]."----".$veri["tc"]."----".$veri["adi"]."----".$veri["soyadi"]."----".$veri["cinsiyet"]."----".$veri["bolum"]."<br>";
			
		}

	?>

</body>
</html>
<?php
include('baglanti.php');
?>
<html>
<head></head>
<body>
<a href='personel.php'>Anasayfa</a>
<a href='personelbilgi.php'>Personel Bilgi Düzenle</a><br><br>

<form action="personelbilgi.php" method="POST">



<?php

				if(isset($_GET["duzenle"]))
				{
$veriler=mysql_query("SELECT * FROM personeller WHERE tc='".$_GET["kimi"]."'");

				$veri=mysql_fetch_row($veriler);
				}
?>
<table>
<tr>
 <td>TC Kimlik:</td>
 <td><input type="text" name="tc" value="<?php
			
				if(isset($_GET["duzenle"]))
					echo $_GET["kimi"];		

			?>"></td></tr><br>
 <tr>
	<td>Adý:</td>
	<td><input type="text" name="adi" value="<?php
			
				if(isset($_GET["duzenle"]))
				{
				
				echo $veri[2];
				}
			
			?>"></td>
 </tr>
 <tr>
		<td>Soyadý:</td>
		<td><input type="text" name="soyadi"></td>
 </tr>
 <tr>
		<td> Cinsiyet:</td>
		<td><input type="radio" name="cinsiyet" value="E" <?php 
		if(isset($_GET["duzenle"]))
		if($veri[4]=="E")
		echo "checked";
  ?>>Erkek
		    <input type="radio" name="cinsiyet" value="B"  <?php 
		if(isset($_GET["duzenle"]))
		if($veri[4]=="B")
		echo "checked";
  ?>>Bayan</td>
 </tr>
 
   <tr>
		<td> Bölüm:</td>
		<td><select name="bolum">
				<option></option>
		<?php
      $veriler=mysql_query("SELECT * FROM bolum");
	 while( $bolum=mysql_fetch_row($veriler))
	 {
		 echo "<option>$bolum[1]</option>";
	 }
		?>
			</select></td>
 </tr>
 <tr>
		<td>Þifre:</td>
		<td><input type="password" name="sifre"><br></td>
 </tr>
  
   <tr>
		<td> <input type="submit" value="KAYDET" name="kaydet"></td>
		<td></td>
 </tr>

 
  <?php
			if(isset($_GET["duzenle"]))
				echo "<input type='hidden' name='guncelle' value='1'>";
			?>
</table>
  </form>



  <?php
  if(isset($_GET["sil"]))
			mysql_query("DELETE FROM personeller WHERE tc='".$_GET["kimi"]."'");
  ?>
  <?php
        if(isset($_POST["kaydet"]))
		{
		if(isset($_POST["guncelle"]))
			mysql_query("UPDATE personeller SET tc='".$_POST["tc"]."' WHERE adi='".$_POST["adi"]."'");
		else
		mysql_query("INSERT INTO personeller VALUES('','".$_POST["tc"]."','".$_POST["adi"]."','".$_POST["soyadi"]."','".$_POST["cinsiyet"]."','".$_POST["bolum"]."','".$_POST["sifre"]."')") or die(mysql_error());
		}
	?>

	<?php
$veriler=mysql_query("SELECT*FROM personeller") or die(mysql_error());
$sayac=0;
while($veri=mysql_fetch_row($veriler))
{
	$sayac++;
	echo "<a href='personelbilgi.php?sil=1&kimi=$veri[1]'>SÝL</a> | ";
	echo "<a href='personelbilgi.php?duzenle=1&kimi=$veri[1]'>DÜZENLE</a> ";
	echo $sayac.")".$veri[1]."----".$veri[2]."----".$veri[3]."----".$veri[4]."----".$veri[5]."<br>";
	
}
?>

</body>
</html>
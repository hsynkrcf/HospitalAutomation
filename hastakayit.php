<?php
include('baglanti.php');
?>
<html>
<head></head>
<body>
<a href='hasta.php'>Anasayfa</a>
<form action="hastakayit.php" method="POST">




<table>
<tr>
 <td>TC Kimlik:</td>
 <td><input type="text" name="tc"></td></tr><br>
 <tr>
	<td>Adý:</td>
	<td><input type="text" name="adi" ></td>
 </tr>
 <tr>
		<td>Soyadý:</td>
		<td><input type="text" name="soyadi"></td>
 </tr>
 <tr>
		<td> Cinsiyet:</td>
		<td><input type="radio" name="cinsiyet" value="E">Erkek
		    <input type="radio" name="cinsiyet" value="B">Bayan</td>
 </tr>
 
 <tr>
		<td>Þifre:</td>
		<td><input type="password" name="sifre"><br></td>
 </tr>
  
   <tr>
		<td> <input type="submit" value="KAYDET" name="kaydet"></td>
		<td></td>
 </tr>

 
</table>
  </form>

  <?php
        if(isset($_POST["kaydet"]))
		{
		mysql_query("INSERT INTO hastalar VALUES('','".$_POST["tc"]."','".$_POST["adi"]."','".$_POST["soyadi"]."','".$_POST["cinsiyet"]."','".$_POST["sifre"]."')") or die(mysql_error());
		}
	?>

	<?php
$veriler=mysql_query("SELECT*FROM hastalar") or die(mysql_error());
$sayac=0;
while($veri=mysql_fetch_row($veriler))
{
	$sayac++;
	echo $sayac.")".$veri[1]."----".$veri[2]."----".$veri[3]."----".$veri[4]."<br>";
	
}
?>

</body>
</html>
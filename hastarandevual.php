<?php
include('baglanti.php');
?>
<html>
<head></head>
<body>
<a href='hasta.php'>Anasayfa</a>
<a href='hastabilgi.php'>Hasta Bilgi Düzenle</a>
<a href='hastarandevual.php'>Randevu Al</a><br><br>
<form action="hastarandevual.php" method="POST">
<table>
	<tr>
	  <td>SN</td>
	  <td>
	  <?php
session_start();
 
echo  $_SESSION['tc'].' nolu kisi ';
?>
	  </td>
	</tr>
	<tr>
	  <td>Tarih:</td>
	  <td>Gün:
	  <select name="gun">
	    <option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	  </select>
	    <select name="ay">
		  <option>Ocak</option>
		  <option>Şubat</option>
		  <option>Mart</option>
		  <option>Nisan</option>
		</select>
	    <select name="yil">
		  <option>2018</option>
		</select>
	  </td>
	</tr>
	<tr>
	  <td>Klinik:</td>
	  <td>
	  <select name="bolum">
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
	  <td>Hekim:</td>
	  <td>
	  <select name="hekim">
				<option></option>
		<?php
      $veriler=mysql_query("SELECT * FROM personeller");
	 while( $hekim=mysql_fetch_row($veriler))
	 {
		 echo "<option>$hekim[2]$hekim[3]</option>";
	 }
		?>
	  </td>
	</tr>
	<tr>
	  <td></td>
	  <td><input type="submit" name="kaydet"></td>
	</tr>
</table>
</form>

 <?php
        if(isset($_POST["kaydet"]))
		{
		mysql_query("INSERT INTO randevual VALUES('',,'".$_SESSION["tc"]."','".$_POST["gun"]."','".$_POST["ay"]."','".$_POST["yil"]."','".$_POST["bolum"]."','".$_POST["hekim"]."')") or die(mysql_error());
		}
	?>

	<?php
$veriler=mysql_query("SELECT*FROM randevual") or die(mysql_error());
$sayac=0;
while($veri=mysql_fetch_row($veriler))
{
	$sayac++;
	echo $sayac.")".$veri[1]."----".$veri[2]."----".$veri[3]."----".$veri[4]."<br>";
	
}
?>
</body>
</html>
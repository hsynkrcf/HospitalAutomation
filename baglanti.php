<?php

$con = mysqli_connect("localhost", "root", "", "hastane") or die("VERİTABANINA BAĞLANILAMADI".mysqli_error());
//$vt=mysql_connect("localhost","root","") or die("VERİTABANINA BAĞLANILAMADI".mysql_error());

//mysql_select_db("hastane",$vt) or die("VERİTABANI SEÇİLEMEDİ".mysql_error());
mysqli_set_charset($con, "utf8");
//mysql_query("SET NAMES latin5");

?>


<?php

$con = mysqli_connect("localhost", "root", "", "hastane") or die("VER�TABANINA BA�LANILAMADI".mysqli_error());
//$vt=mysql_connect("localhost","root","") or die("VER�TABANINA BA�LANILAMADI".mysql_error());

//mysql_select_db("hastane",$vt) or die("VER�TABANI SE��LEMED�".mysql_error());
mysqli_set_charset($con, "utf8");
//mysql_query("SET NAMES latin5");

?>


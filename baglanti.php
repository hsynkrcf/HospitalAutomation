<?php

$con = mysqli_connect("localhost", "root", "", "hastane") or die("VERÝTABANINA BAÐLANILAMADI".mysqli_error());
//$vt=mysql_connect("localhost","root","") or die("VERÝTABANINA BAÐLANILAMADI".mysql_error());

//mysql_select_db("hastane",$vt) or die("VERÝTABANI SEÇÝLEMEDÝ".mysql_error());
mysqli_set_charset($con, "utf8");
//mysql_query("SET NAMES latin5");

?>


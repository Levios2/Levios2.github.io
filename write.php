<?php
header('Location: index.html');
//get request from url
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$positiv=$_POST["positiv"];
$einsatz=$_POST["einsatz"];
date_default_timezone_set("Europe/Berlin");
$timestamp = time();
$time = date("H:i d.m.Y",$timestamp);
$Wette=array($fname, $lname, $positiv, $einsatz, $time);
$eintrag = implode(";", $Wette)."\r\n";
file_put_contents("wette.txt", $eintrag, FILE_APPEND);

?>
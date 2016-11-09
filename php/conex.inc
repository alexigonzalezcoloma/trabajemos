<?php 

$server = "w3.inf.uct.cl";
$user = "valeria";
$pass = "vale4321";
$baseDatos = "valeria";

$db = mysql_connect($server, $user, $pass);
mysql_select_db($baseDatos, $db);
mysql_query("SET NAMES 'UTF8'");

?>
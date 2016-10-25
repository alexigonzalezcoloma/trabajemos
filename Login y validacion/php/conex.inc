<?php 

$server = "localhost";
$user = "root";
$pass = "";
$baseDatos = "valeria";

$db = mysql_connect($server, $user, $pass);
mysql_select_db($baseDatos, $db);
mysql_query("SET NAMES 'UTF8'");

?>
<?php
session_start();
include("conex.inc");

$usuario = $_POST["user"];
$password = md5($_POST["password"]);
$consulta = "SELECT nom_producto, stock, precio, precio_neto, lista_compra FROM productos";
$result = mysql_query($consulta, $db);
$count = mysql_numrows($result);

echo"	<table>
			<tr>
				<td>Nombre Producto</td>
				<td>Stock</td>
				<td>Precio</td>
				<td>Precio Neto</td>
				<td>Lista Compra</td>
			</tr>
			<tr>
				<input type='text' name='nProdcutos' value='Ver Productos'>
			</tr>
		</table>
	"

if ($count == 1) {
    echo $row = mysql_fetch_row($result);
	
    if ($row[0] == "1") {

        $query1= "SELECT nombre, apellido, rut FROM personas WHERE rut = '$usuario'";
        $result1 = mysql_query($query1, $db);
        $row1 = mysql_fetch_row($result1);
        $_SESSION['estado'] = "logueadocaja";
        $_SESSION['rut'] = "$row1[2]";
        $_SESSION['nombrecompleto'] = "$row1[0] $row1[1]";
        header("Location: ../php/Caja.php");				#es caja
?>
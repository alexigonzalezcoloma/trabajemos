<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
#este script hara la conexion y redigira hacia la ventana indicada dependiendo
#de los datos del usuario
session_start();
include("conex.inc");

$usuario = $_POST["user"];
$password = md5($_POST["password"]);
$query = "SELECT id_cargo FROM usuarios WHERE rut = '$usuario' AND password = '$password'";
$result = mysql_query($query, $db);
$count = mysql_numrows($result);

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
	}
    if ($row[0] == "2") {

        $query1= "SELECT nombre, apellido, rut FROM personas WHERE rut = '$usuario'";
        $result1 = mysql_query($query1, $db);
        $row1 = mysql_fetch_row($result1);
        $_SESSION['estado'] = "logueadoinv";
        $_SESSION['rut'] = "$row1[2]";
        $_SESSION['nombrecompleto'] = "$row1[0] $row1[1]";
        header("Location: ../php/Inventario.php");					#es inventario
    }
    if ($row[0] == "3") {

        $query1= "SELECT nombre, apellido, rut FROM personas WHERE rut = '$usuario'";
        $result1 = mysql_query($query1, $db);
        $row1 = mysql_fetch_row($result1);
        $_SESSION['estado'] = "logueadoprov";
        $_SESSION['rut'] = "$row1[2]";
        $_SESSION['nombrecompleto'] = "$row1[0] $row1[1]";
        header("Location: ../php/Proveedor.php");					#es proveedores
    }
	
	if ($row[0] == "4") {

        $query1= "SELECT nombre, apellido, rut FROM personas WHERE rut = '$usuario'";
        $result1 = mysql_query($query1, $db);
        $row1 = mysql_fetch_row($result1);
        $_SESSION['estado'] = "logueadoadm";
        $_SESSION['rut'] = "$row1[2]";
        $_SESSION['nombrecompleto'] = "$row1[0] $row1[1]";
        header("Location: ../php/Administrador.php");					#es admin
    }
    
    
} else {
    //Redieccionar a la pagina de inicio  index.php en caso de error
    header("Location: ../index.php?msj=Usuario+o+contraseña+Inválida");
}

?>
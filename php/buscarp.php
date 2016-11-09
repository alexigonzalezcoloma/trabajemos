<?php
$nombre = $_POST["busca"];

if(isset($_REQUEST["busca"])){
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("valeria");
	$buscar = $_GET["busca"];
	$sql = "SELECT * FROM productos WHERE id_producto='$buscar'"; 
	$resultado = mysql_query($sql,$conexion);
		echo "	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
					<tr>
						<th>ID Producto</th>
						<th>Nombre Producto</th>
						<th>Stock</th>
						<th>Precio Neto</th>
						<th>Precio</th>
						<th>Lista Compra</th>
						<th>Descripcion</th>
					</tr>";
	if(mysql_num_rows($resultado) > 0){
		while($fila = mysql_fetch_array($resultado)){
			echo"<tr>
					<td>$fila[0]</td>				
					<td>$fila[1]</td>
					<td>$fila[2]</td>
					<td>$fila[3]</td>					
					<td>$fila[4]</td>					
					<td>$fila[5]</td>
					<td>$fila[6]</td>
				</tr>";
		}
	}
	else{
		echo"<td colspan='8'>Sin resultados</td>";
	}
	echo "</table>";
	mysql_close($conexion);
}
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/funciones-inventario.js"></script>
<?php
	$conexion = mysql_connect("w3.inf.uct.cl","valeria","vale4321");
	mysql_select_db("valeria");

	$nom_producto = $_POST["nom_producto"];
	$stock        = $_POST["stock"];
	$precio_neto  = $_POST["precio_neto"];
	$precio 	  = $_POST["precio"];
	$descripcion  = $_POST["descripcion"];

	$query = "INSERT INTO productos (id_producto, nom_producto, stock, precio_neto, precio, lista_compra, descripcion, eliminado) VALUES (NULL, '$nom_producto', $stock, $precio_neto, $precio, 0, '$descripcion', 0)";
	mysql_query($query);


	$sql = "SELECT * FROM productos";
	$resultado = mysql_query($sql);
		echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
					<tr>
						<th>ID Producto</th>
						<th>Nombre Producto</th>
						<th>Stock</th>
						<th>Precio Neto</th>
						<th>Precio</th>
						<th>Lista Compra</th>
						<th>Descripción</th>
						<th>Eliminado</th>
						<th>Acción</th>
					</tr>";
	if (mysql_num_rows($resultado)>0){
		while($fila = mysql_fetch_array($resultado)){
			echo "	<tr>
						<td>$fila[0]</td>				
						<td>$fila[1]</td>
						<td>$fila[2]</td>
						<td>$fila[3]</td>					
						<td>$fila[4]</td>
						<td>$fila[5]</td>
						<td>$fila[6]</td>	
						<td>$fila[7]</td>				
						<td>
							<img class='action-icon-table edit-producto' id='$fila[0]' src='img/icons/edit.png' title='Editar' width='20px' height='20px'/>
							<img class='action-icon-table delete-producto' id='$fila[0]' src='img/icons/delete.png' title='Eliminar' width='20px' height='20px'/>
						</td>
					</tr>";
								
		}
	}
	else{
		echo"<td colspan='8'>Sin resultados</td>";
	}
	echo"</table>
			<button id='add-producto' class='button-action'>Agregar Producto</button>";

?>
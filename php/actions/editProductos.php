<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/funciones-inventario.js"></script>
<?php
	include("../conex.inc");
	$idproducto = $_POST["id_producto"];

	$sql = "SELECT * FROM productos";
	$resultado = mysql_query($sql,$db);


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
			if($fila[0] == $idproducto){
				echo"<tr>
						<td><input id='producto-id' type='text' value='$fila[0]' /></td>				
						<td><input id='producto-nombre' type='text' value='$fila[1]' /></td>
						<td><input id='producto-stock' type='text' value='$fila[2]' /></td>
						<td><input id='producto-precioneto' type='text' value='$fila[3]' /></td>					
						<td><input id='producto-precio' type='text' value='$fila[4]'/></td>
						<td><input id='producto-listacompra' type='text' value='$fila[5]'/></td>
						<td><input id='producto-descripcion' type='text' value='$fila[6]'/></td>	
						<td><input id='producto-eliminado' type='text' value='$fila[7]'/></td>				
						<td>
							<img class='action-icon-table save-producto' id='$fila[0]' src='img/icons/save.png' title='Guardar' width='20px' height='20px'/>
							<img class='action-icon-table delete-producto' id='$fila[0]' src='img/icons/delete.png' title='Eliminar' width='20px' height='20px'/>
						</td>
					</tr>";
			}
			else{
				echo"<tr>
						<td>$fila[0]</td>				
						<td>$fila[1]</td>
						<td>$fila[2]</td>
						<td>$fila[3]</td>					
						<td>$fila[4]</td>
						<td>$fila[5]</td>
						<td>$fila[6]</td>
						<td>$fila[7]</td>					
						<td>
							<img class='action-icon-table edit-producto' id='$fila[0]' src='img/icons/edit.png' alt='Editar' width='20px' height='20px'/>
							<img class='action-icon-table delete-producto' id='$fila[0]' src='img/icons/delete.png' alt='Eliminar' width='20px' height='20px'/>
						</td>
					</tr>";
			}
		}
	}
	else{
		echo"<td colspan='8'>Sin resultados</td>";
	}
		echo"</table>
		<button id='addproducto' class='button-action'>Agregar Producto</button>";

?>
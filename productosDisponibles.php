<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/funciones-inventario.js"></script>

<?php		
	include("../conex.inc");
	if(isset($_REQUEST["disponibles"])) {
		$disponibles = $_POST["disponibles"];
		if($disponibles==1) {
			$sql = "SELECT * FROM productos WHERE eliminado=0";
			$resultado = mysql_query($sql,$db);
			echo "	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
						<tr>
							<th>Código Producto</th>
							<th>Rut Proveedor</th>
							<th>Nombre Producto</th>
							<th>Stock</th>
							<th>Precio Neto</th>
							<th>Precio</th>
							<th>Lista Compra</th>
							<th>Descripcion</th>
							<th>Acción</th>
						</tr>";
			if (mysql_num_rows($resultado) > 0){
				while($fila = mysql_fetch_array($resultado)){
					echo"<tr>
							<td>$fila[0]</td>
							<td>$fila[1]</td>				
							<td>$fila[2]</td>
							<td>$fila[3]</td>
							<td>$fila[4]</td>					
							<td>$fila[5]</td>";
					if($fila[6]==0){
						echo"<td>No</td>";
					}
					else {
						echo"<td>Sí</td>";
					}
					echo"	<td>$fila[7]</td>				
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
			echo "	</table><br/>
						<button id='add-producto' class='button-action'>Agregar Producto</button>";
		}	
		
		
		if($disponibles==2) {
			$sql2 = "SELECT * FROM productos WHERE eliminado=1";
			$resultado2 = mysql_query($sql2,$db);
			echo "	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
						<tr>
							<th>Código Producto</th>
							<th>Rut Proveedor</th>
							<th>Nombre Producto</th>
							<th>Stock</th>
							<th>Precio Neto</th>
							<th>Precio</th>
							<th>Lista Compra</th>
							<th>Descripcion</th>
							<th>Acción</th>
						</tr>";
			if (mysql_num_rows($resultado2) > 0){
				while($fila = mysql_fetch_array($resultado2)){
					echo"<tr>
							<td>$fila[0]</td>
							<td>$fila[1]</td>				
							<td>$fila[2]</td>
							<td>$fila[3]</td>
							<td>$fila[4]</td>					
							<td>$fila[5]</td>";
					if($fila[6]==0){
						echo"<td>No</td>";
					}
					else {
						echo"<td>Sí</td>";
					}
					echo"	<td>$fila[7]</td>				
							<td>
								<img class='action-icon-table restaurar-producto' id='$fila[0]' src='img/icons/edit.png' title='Restaurar Producto' width='20px' height='20px'/>
							</td>
						</tr>";	
				}
			}
		}
	}
?>	
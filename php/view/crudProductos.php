<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/funciones-inventario.js"></script>
<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<!--<label id="text-tab-1" for="tab-1">CRUD</label>-->	
<div id="webpage-body-content">
	<div id="content">															<!--Contenido a mostrar/ocultar-->							
		<div id="content-1">													<!--Contenido de la Pestaña 1-->
			<table>
				<tr>
					<td><img class="img-title-tab" src="img/menu2/crudProductos.png" width="40px" height="40px" /></td>
					<td><p class="title-tab">Crud Productos</p></td>
				</tr>
			</table>
			<hr class="separator-title">
			<div id="content-1-body">
				<?php		
					include("../conex.inc");
		
					$sql = "SELECT * FROM productos";
					$resultado = mysql_query($sql,$db);
					echo "	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
								<tr>
									<th>ID Producto</th>
									<th>Nombre Producto</th>
									<th>Stock</th>
									<th>Precio Neto</th>
									<th>Precio</th>
									<th>Lista Compra</th>
									<th>Descripcion</th>
									<th>Eliminado</th>
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
					echo "	</table><br/>
							<button id='add-producto' class='button-action'>Agregar Producto</button>";
				?>
			</div>
		</div>
	</div>
</div>
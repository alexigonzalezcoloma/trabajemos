<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<label for="tab-1">CRUD</label>						
<div id="content">															<!--Contenido a mostrar/ocultar-->							
	<div id="content-1">													<!--Contenido de la Pestaña 1-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu2/crudProductos.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Crud Productos</p></td>
			</tr>
		</table>
		<hr class="separator-title">
		<p class="content-info">

		<script>

		</script>

		<?php		
				include("../conex.inc");
				$sql = "SELECT * FROM productos";
				$resultado = mysqli_query($db,$sql);
				
				echo "	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
							<tr>
								<th>ID</th>
								<th>Producto</th>
								<th>Stock</th>
								<th>Precio Neto</th>
								<th>Precio</th>
								<th>Lista de Compra</th>
								<th>Descripcion</th>
								<th>Acción</th>
							</tr>";
					if (mysqli_num_rows($resultado) > 0){
						while($fila = mysqli_fetch_array($resultado)){
							echo"<tr>
									<td>$fila[0]</td>
									<td>$fila[1]</td>				
									<td>$fila[2]</td>
									<td>$fila[3]</td>
									<td>$fila[4]</td>
									<td>$fila[5]</td>
									<td>$fila[6]</td>								
									<td>
									<form>
										<img class='action-icon-table edit-productos' id='$fila[0]' src='img/icons/edit.png' title='Editar' width='20px' height='20px'/ onclik='editar'>
										<img class='action-icon-table delete-productos' id='$fila[0]' src='img/icons/delete.png' title='Eliminar' width='20px' height='20px'/>
									</form>
									</td>
								</tr>";	
						}
					}
					else{
						echo"<td colspan='8'>Sin resultados</td>";
					}

				echo "	</table>
						<form action='/trabajemos-master/php/view/agregarProducto.php'>
						<br><input type='submit' name='agregar' class='button-action' value='Agregar Producto'>
						</form>";
		?>
		</p>
	</div>
</div>
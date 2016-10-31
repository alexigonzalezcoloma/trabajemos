<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<label for="tab-1">Lista Compra</label>						
<div id="content">															<!--Contenido a mostrar/ocultar-->							
	<div id="content-1">													<!--Contenido de la Pestaña 1-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu2/listaCompra.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Lista Compra</p></td>
			</tr>
		</table>
		<hr class="separator-title">
		<p class="content-info">
			<?php		
				include("../conex.inc");

				$sql = "SELECT nom_producto, stock, precio, precio_neto, lista_compra FROM productos";
				$resultado = mysql_query($sql,$db);
				$fila = mysql_fetch_array($resultado);
				echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
							<tr>
								<th>Nombre Producto</th>
								<th>Stock</th>
								<th>Precio</th>
								<th>Precio Neto</th>
								<th>Cantidad</th>
								<th>Acción</th>
							</tr>";
					if (mysql_num_rows($resultado)>0){
						while($fila = mysql_fetch_array($resultado)){
							echo"<tr>
									<td>$fila[0]</td>				
									<td>$fila[1]</td>
									<td>$fila[2]</td>				
									<td>$fila[3]</td>
									<td>$fila[4]</td>	
									<td>
										<img class='action-icon-table edit-user' id='$fila[0]' src='img/icons/edit.png' title='Editar' width='20px' height='20px'/>
										<img class='action-icon-table delete-user' id='$fila[0]' src='img/icons/delete.png' title='Eliminar' width='20px' height='20px'/>
									</td>
								</tr>";
						}
					}
					else{
						echo"<td colspan='8'>Sin resultados</td>";
					}
				echo"</table>
						<button id='addproducto' class='button-action'>Nuevo Producto</button>";
				?>
		</p>
	</div>
</div>
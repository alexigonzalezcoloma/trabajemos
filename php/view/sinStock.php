<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<label for="tab-1">Sin Stock</label>										
<div id="content">															<!--Contenido a mostrar/ocultar-->							
	<div id="content-1">													<!--Contenido de la Pestaña 1-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu2/sinStock.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Sin Stock</p></td>
			</tr>
		</table>
		<hr class="separator-title">
		<p class="content-info">
			<?php		
				include("../conex.inc");

				$sql = "SELECT id_producto, nom_producto, stock, precio, precio_neto FROM productos WHERE stock=0";
				$resultado = mysql_query($sql,$db);
				echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
							<tr>
								<th>ID Producto</th>
								<th>Nombre Producto</th>
								<th>Stock</th>
								<th>Precio</th>
								<th>Precio Neto</th>
								<th>Eliminar</th>
							</tr>";
					if (mysql_num_rows($resultado) > 0){
						while($fila = mysql_fetch_array($resultado)){
							echo"<tr>
									<td>$fila[0]</td>				
									<td>$fila[1]</td>
									<td>$fila[2]</td>
									<td>$fila[3]</td>
									<td>$fila[4]</td>				
									<td>
										<img class='action-icon-table delete-user' id='$fila[0]' src='img/icons/delete.png' title='Eliminar' width='20px' height='20px'/>
									</td>
								</tr>";
						}
					}
					else{
						echo"<td colspan='8'>Sin resultados</td>";
					}
				?>
		</p>
	</div>
</div>
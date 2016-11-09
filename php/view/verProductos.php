<input id="tab-1" type="radio" name="tab-group" checked="checked" />
<!--<label id="text-tab-1" for="tab-1">Lista Productos</label>
<input id="tab-2" type="radio" name="tab-group" />
<label id="text-tab-2" for="tab-2">Pestaña 2</label>
<input id="tab-3" type="radio" name="tab-group" />
<label id="text-tab-3" for="tab-3">Pestaña 3</label>-->					
<div id="content">															<!--Contenido a mostrar/ocultar-->							
	<div id="content-1">													<!--Contenido de la Pestaña 1-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu2/verProductos.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Ver Productos</p></td>
			</tr>
		</table>
		<hr class="separator-title">
		<p class="content-info">
			<?php		
				include("../conex.inc");

				$sql = "SELECT id_producto, nom_producto, precio, precio_neto, descripcion FROM productos";
				$resultado = mysql_query($sql,$db);
				echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
							<tr>
								<th>ID</th>
								<th>Nombre Producto</th>
								<th>Precio</th>
								<th>Precio Neto</th>
								<th>Descripción</th>
							</tr>";
					if (mysql_num_rows($resultado)>0){
						while($fila = mysql_fetch_array($resultado)){
							echo"<tr>
								<td>$fila[0]</td>				
								<td>$fila[1]</td>
								<td>$fila[2]</td>				
								<td>$fila[3]</td>
								<td>$fila[4]</td>	
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
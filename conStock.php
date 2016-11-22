<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/funciones-inventario.js"></script>

<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<!--<label id="text-tab-1" for="tab-1">Con Stock</label>-->
<div id="content">															<!--Contenido a mostrar/ocultar-->							
	<div id="content-1">													<!--Contenido de la Pestaña 1-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu2/conStock.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Con Stock</p></td>
			</tr>
		</table>
		<hr class="separator-title">
		<div id="content-1-body">
			<?php		
				include("../conex.inc");

				$sql = "SELECT id_producto, nom_producto, precio, stock FROM productos WHERE eliminado=0 AND stock > 0 ORDER BY stock asc ";
				$resultado = mysql_query($sql,$db);
				echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
							<tr>
								<th>Código Producto</th>
								<th>Nombre Producto</th>
								<th>Precio</th>
								<th>Stock</th>
								<th>Acción</th>
							</tr>";
					if (mysql_num_rows($resultado)>0){
						while($fila = mysql_fetch_array($resultado)){
							echo"<tr>
								<td>$fila[0]</td>				
								<td>$fila[1]</td>
								<td>$fila[2]</td>
								<td>$fila[3]</td>
								<td>
									<img class='action-icon-table enviar-producto' id='$fila[0]' src='img/icons/edit.png' title='Enviar a lista de compra' width='20px' height='20px'/>
								</td>
							</tr>";
							
						}
					}
					else{
						echo"<td colspan='8'>Sin resultados</td>";
					}
				?>
		</div>
	</div>
</div>

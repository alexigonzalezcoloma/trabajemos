<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<!--<label id="text-tab-1" for="tab-1">Lista Compra</label>-->			
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

				$consulta = "UPDATE productos SET lista_compra=1 WHERE stock<=5";
				$result = mysql_query($consulta,$db);
				
				$sql = "SELECT id_producto,nom_producto,stock FROM productos WHERE lista_compra=1";
				$resultado = mysql_query($sql,$db);
				
				echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
							<tr>
								<th>Código Producto</th>
								<th>Nombre Producto</th>
								<th>Stock</th>
							</tr>";
					if (mysql_num_rows($resultado)>0){
						while($fila = mysql_fetch_array($resultado)){
							echo"<tr>
									<td>$fila[0]</td>				
									<td>$fila[1]</td>
									<td>$fila[2]</td>
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
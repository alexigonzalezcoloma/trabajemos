<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<!--<label id="text-tab-1" for="tab-1">Inicio</label>-->
<div id="content">															<!--Contenido a mostrar/ocultar-->					
	<div id="content-1">													<!--Contenido de la Pestaña 1-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu2/inicio.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Inicio</p></td>
			</tr>
		</table>
				<hr class="separator-title">
					<p>
						<?php
							echo "	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
										<tr>
											<th>Buscar Productos</th>
										</tr>
									</table><br/>";
						?>

						<center><form action="boceto1.php">
							INGRESAR 'ID' DEL PRODUCTO: 
				            <input type="text" name="busca">
				            <input type="submit" name="buscar" value="Buscar">
							<br/>
						</form>
					<?php
						if(isset($_REQUEST["busca"])){
							$conexion = mysql_connect("w3.inf.uct.cl","valeria","vale4321");
							mysql_select_db("valeria");
							$buscar = $_GET["busca"];
							$sql = "SELECT * FROM productos WHERE id_producto='$buscar'"; 

							$resultado = mysql_query($sql,$conexion);
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
											<th>Eliminado</th>
										</tr>";
							if(mysql_num_rows($resultado) > 0){
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
											<td>$fila[8]</td>
										</tr>";
								}
							}
							else{
								echo"<td colspan='8'>Sin resultados</td>";
							}
							echo "</table>";
							mysql_close($conexion);
						}
					?>
					</p>
				</div>
			</div>

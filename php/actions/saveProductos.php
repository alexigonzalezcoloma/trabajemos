<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/functions-jquery.js"></script>
<?php
include("../conex.inc");
$id1	 	= $_POST["id1"];
$id 		= $_POST["id_producto"];
$nombrep 	= $_POST["nom_producto"];
$stockp 	= $_POST["stock"];
$precion 	= $_POST["precio_neto"];
$precio 	= $_POST["precio"];
$lcompra 	= $_POST["lista_compra"];
$desc 	    = $_POST["descripcion"];

$query = "UPDATE productos SET id_producto=$id, nom_producto='$nombrep', stock='$stockp', precio_neto='$precion', precio='$precio', lista_compra='$lcompra', descripcion='$desc' WHERE id_producto = $id1";	
$resp = mysql_query($query,$db);

$sql = "SELECT * FROM clientes";
				$resultado = mysql_query($sql,$db);
				echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
							<tr>
								<th>ID Producto</th>
								<th>Nombre Producto</th>
								<th>Stock</th>
								<th>Precio Neto</th>
								<th>Precio</th>
								<th>Lista Compra</th>
								<th>Descripcion</th>
							</tr>";
					if (mysql_num_rows($resultado)>0){
						while($fila = mysql_fetch_object($resultado)){
							echo"<tr>
								<td>$fila->rut</td>				
								<td>$fila->nombre</td>
								<td>$fila->apellido</td>
								<td>Av. Siempre viva #742</td>					
								<td>$fila->telefono</td>					
								<td>
									<img class='action-icon-table edit-producto' id='$fila->rut' src='img/icons/edit.png' title='Editar' width='20px' height='20px'/>
									<img class='action-icon-table delete-producto' id='$fila->rut' src='img/icons/delete.png' title='Eliminar' width='20px' height='20px'/>
								</td>
							</tr>";
							
						}
					}
					else{
						echo"<td colspan='8'>Sin resultados</td>";
					}
				echo"</table>
						<button id='addclient' class='button-action'>Nuevo cliente</button>";
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/functions-jquery.js"></script>
<?php
include("../conex.inc");
$rut1	 	= $_POST["rut1"];
$rut 		= $_POST["rut"];
$nombre 	= $_POST["nombre"];
$apellido 	= $_POST["apellido"];
$telefono 	= $_POST["telefono"];

$query = "UPDATE clientes SET rut=$rut, nombre='$nombre', apellido='$apellido', telefono='$telefono' WHERE rut = $rut1";	
$resp = mysql_query($query,$db);

$sql = "SELECT * FROM clientes";
				$resultado = mysql_query($sql,$db);
				echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
							<tr>
								<th>RUT</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Dirección</th>
								<th>Teléfono</th>
								<th>Acción</th>
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
									<img class='action-icon-table edit-user' id='$fila->rut' src='img/icons/edit.png' title='Editar' width='20px' height='20px'/>
									<img class='action-icon-table delete-user' id='$fila->rut' src='img/icons/delete.png' title='Eliminar' width='20px' height='20px'/>
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
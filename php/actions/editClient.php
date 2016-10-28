<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/functions-jquery.js"></script>
<?php
include("../conex.inc");
$rut 	= $_POST["rut"];

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
				if($fila->rut == $rut){
					echo"<tr>
					<td><input id='client-rut' type='text' value='$fila->rut' /></td>				
					<td><input id='client-name' type='text' value='$fila->nombre' /></td>
					<td><input id='client-lastname' type='text' value='$fila->apellido' /></td>
					<td><input id='client-address' type='text' value='Av. Siempre viva #742' /></td>					
					<td><input id='client-phone' type='text' value='$fila->telefono'/></td>					
					<td>
						<img class='action-icon-table save-user' id='$fila->rut' src='img/icons/save.png' title='Guardar' width='20px' height='20px'/>
						<img class='action-icon-table delete-user' id='$fila->rut' src='img/icons/delete.png' title='Eliminar' width='20px' height='20px'/>
					</td>
				</tr>";
					
				}
				else{
					echo"<tr>
						<td>$fila->rut</td>				
						<td>$fila->nombre</td>
						<td>$fila->apellido</td>
						<td>Av. Siempre viva #742</td>					
						<td>$fila->telefono</td>					
						<td>
							<img class='action-icon-table edit-user' id='$fila->rut' src='img/icons/edit.png' alt='Editar' width='20px' height='20px'/>
							<img class='action-icon-table delete-user' id='$fila->rut' src='img/icons/delete.png' alt='Eliminar' width='20px' height='20px'/>
						</td>
					</tr>";
				}
			}
		}
		else{
			echo"<td colspan='8'>Sin resultados</td>";
		}
			echo"</table>
					<button id='addclient' class='button-action'>Nuevo cliente</button>";
?>
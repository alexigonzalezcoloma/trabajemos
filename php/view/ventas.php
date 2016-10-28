<input id="tab-1" type="radio" name="tab-group" checked="checked" />
<label id="text-tab-1" for="tab-1">Pestaña 1</label>
<input id="tab-2" type="radio" name="tab-group" />
<label id="text-tab-2" for="tab-2">Pestaña 2</label>
<input id="tab-3" type="radio" name="tab-group" />
<label id="text-tab-3" for="tab-3">Pestaña 3</label>
<div id="webpage-body-content">
	<div id="content">
		<div id="content-1">
			<!--<table>
		<tr>
			<td><img class="img-title-tab" src="img/menu/clientes.png" width="40px" height="40px" /></td>
			<td><p class="title-tab">Clientes</p></td>
		</tr>
	</table>
	<hr class="separator-title">-->
		<?php		
		include("../conex.inc");

		$sql = "SELECT * FROM clientes";
		$resultado = mysql_query($sql,$db);

		// echo "<div id='content-info-1'>
				// <input type='text' id='search' name='search' placeholder='Buscar..'>
				// <button class='button-action'>Buscar</button><br/><br/>
			// </div>";
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
							<img class='action-icon-table edit-user' src='img/icons/edit.png' alt='Editar' width='20px' height='20px'/>
							<img class='action-icon-table delete-user' id='$fila->rut' src='img/icons/delete.png' alt='Eliminar' width='20px' height='20px'/>
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
		</div>
		<div id="content-2">
			contenido 2
		</div>
		<div id="content-3">
			contenido 3
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/funciones-inventario.js"></script>
<?php
	$conectar=mysqli_connect("localhost","root","","valeria");
	$consulta=mysqli_query($conectar,"SELECT rut_prov FROM proveedores");
	echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
				<tr>
					<th>Nombre Producto</th>
					<th>Rut Proveedor</th>
					<th>Precio Neto</th>
					<th>Precio</th>
					<th>Descripción</th>
				</tr>
				<tr>			
					<td><input id='producto-nombre' type='text' /></td>
					<td><select id='proveedor-rut'>";
					while($filas= mysqli_fetch_array($consulta)){
						echo "<option value='$filas[0]'>$filas[0]</option>";}	
	echo"			</select></td>
					<td><input id='producto-precioneto' type='text' /></td>					
					<td><input id='producto-precio' type='text' /></td>
					<td><input id='producto-descripcion' type='text' /></td>				
				</tr>
			</table><br/>
			<button id='add-new-producto' class='button-action'>Guardar Producto</button>";

?>

<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<label for="tab-1">Ver Productos</label>						
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
			$conectar=mysqli_connect("localhost","root","","erp");
			$consulta=mysqli_query($conectar,"SELECT* from productos");

			echo "<center>";
			echo "<table border='2px'>";
			echo "<tr>";
			echo "<td>ID</td>";
			echo "<td>Producto</td>";
			echo "<td>Precio Neto</td>";
			echo "<td>Precio</td>";
			echo "<td>Descripcion</td>";
			echo "</tr>";
			while ($filas = mysqli_fetch_row($consulta)){
				echo "<tr>";
				echo "<td>$filas[0]</td>";
				echo "<td>$filas[1]</td>";
				echo "<td>$filas[3]</td>";
				echo "<td>$filas[4]</td>";
				echo "<td>$filas[6]</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "</center>";
		?>			
		</p>
	</div>
</div>

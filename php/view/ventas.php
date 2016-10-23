<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<label for="tab-1">Ventas</label>						
<input id="tab-2" type="radio" name="tab-group" />							<!--Pestaña 2 inactiva por defecto-->
<label for="tab-2">Buscar ventas</label>						
<input id="tab-3" type="radio" name="tab-group" />							<!--Pestaña 3 inactiva por defecto-->
<label for="tab-3">Ajustes</label>					
<div id="content">															<!--Contenido a mostrar/ocultar-->							
	<div id="content-1">													<!--Contenido de la Pestaña 1-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu/ventas.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Ventas</p></td>
			</tr>
		</table>
		<hr class="separator-title">
		<p class="content-info">
			<?php include("../textodemo.php");?>
		</p>
	</div>
	<div id="content-2">													<!--Contenido de la Pestaña 2-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu/ventas.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Buscar ventas</p></td>
			</tr>
		</table>
		<hr class="separator-title">
		<p class="content-info">
			<?php include("../textodemo.php");?>
		</p>
	</div>
	<div id="content-3">													<!--Contenido de la Pestaña 3-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu/ventas.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Ajustes</p></td>
			</tr>
		</table>
		<hr class="separator-title">
		<p class="content-info">
			<?php include("../textodemo.php");?>
		</p>
	</div>
</div>
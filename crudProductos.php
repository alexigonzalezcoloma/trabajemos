<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/funciones-inventario.js"></script>
<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<!--<label id="text-tab-1" for="tab-1">CRUD</label>-->	
<div id="webpage-body-content">
	<div id="content">															<!--Contenido a mostrar/ocultar-->							
		<div id="content-1">													<!--Contenido de la Pestaña 1-->
			<table>
				<tr>
					<td><img class="img-title-tab" src="img/menu2/crudProductos.png" width="40px" height="40px" /></td>
					<td><p class="title-tab">Ver Productos</p></td>
					<td>
						<select id="producto-disponibilidad">
							<option value="0" selected disabled >Elija una opción</option>
							<option value="1">Disponibles</option>
							<option value="2">Eliminados</option>
						</select>
					</td>
				</tr>
			</table>
			<hr class="separator-title">
			<div id="content-1-body">
			</div>
		</div>
	</div>
</div>
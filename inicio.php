<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/funciones-inventario.js"></script>

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
				<div id="content-1-body">
						<p>
							<?php
								echo "	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
											<tr>
												<th>Buscar Productos</th>
											</tr>
										</table><br/>";
							?>

						<?php
							echo "	<center>
										INGRESAR CÓDIGO DEL PRODUCTO: 
										<input type='number' min='1' id='producto-codigo'>
										<input type='button' id='busca' value='Buscar'>
									</center>
								<br/>";
						?>
						</p>
				</div>	
	</div>
</div>

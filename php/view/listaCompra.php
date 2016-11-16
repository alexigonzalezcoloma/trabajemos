<input id="tab-1" type="radio" name="tab-group" checked="checked" />		<!--Pestaña 1 activa por defecto-->
<!--<label id="text-tab-1" for="tab-1">Lista Compra</label>-->			
<div id="content">															<!--Contenido a mostrar/ocultar-->							
	<div id="content-1">													<!--Contenido de la Pestaña 1-->
		<table>
			<tr>
				<td><img class="img-title-tab" src="img/menu2/listaCompra.png" width="40px" height="40px" /></td>
				<td><p class="title-tab">Lista Compra</p></td>
			</tr>
		</table>
		<hr class="separator-title">
		<p class="content-info">
			<?php		
				include("../conex.inc");
				
				$lista_compra="UPDATE productos SET lista_compra=1 WHERE stock=0";
				mysqli_query($db,$lista_compra);
				$sql = "SELECT id_producto,nom_producto,precio FROM productos WHERE eliminado=0 and lista_compra=1";
				$resultado = mysqli_query($db,$sql);
				echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
							<tr>
								<th>Código Producto</th>
								<th>Nombre Producto</th>
								<th>Precio</th>
							</tr>";
					if (mysqli_num_rows($resultado)>0){
						while($fila = mysqli_fetch_array($resultado)){
							echo"<tr>
									<td>$fila[0]</td>				
									<td>$fila[1]</td>
									<td>$fila[2]</td>				
								</tr>";
						}
					}
					else{
						echo"<td colspan='8'>Sin resultados</td>";
					}
				?>
		</p>
	</div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions-js.js"></script>
<script type="text/javascript" src="js/funciones-inventario.js"></script>


<?php
	if(isset($_REQUEST["id_producto"])){
		$conexion = mysql_connect("w3.inf.uct.cl","valeria","vale4321");
		mysql_select_db("valeria");
				
		$idproducto = $_POST["id_producto"];
		$query = "UPDATE productos SET lista_compra='1' WHERE id_producto=$idproducto";
		$result = mysql_query($query);

		$sql = "SELECT id_producto, nom_producto, precio, stock FROM productos WHERE eliminado=0 AND stock > 0 ORDER BY stock asc ";
		$resultado = mysql_query($sql);
		echo"	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
					<tr>
						<th>Código Producto</th>
						<th>Nombre Producto</th>
						<th>Precio</th>
						<th>Stock</th>
						<th>Acción</th>
					</tr>";
		if (mysql_num_rows($resultado)>0){
			while($fila = mysql_fetch_array($resultado)){
				echo"<tr>
						<td>$fila[0]</td>				
						<td>$fila[1]</td>
						<td>$fila[2]</td>
						<td>$fila[3]</td>
						<td>
							<img class='action-icon-table enviar-producto' id='$fila[0]' src='img/icons/edit.png' title='Enviar a lista de compra' width='20px' height='20px'/>
						</td>
					</tr>";
								
			}
		}
		else{
			echo"<td colspan='8'>Sin resultados</td>";
	}
}
?>
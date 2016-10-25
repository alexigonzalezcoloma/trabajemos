<center>
<link rel="stylesheet" type="text/css" href="../../css/boceto.css"/>
<link rel="stylesheet" type="text/css" href="../../css/tabla.css"/>
<link rel="stylesheet" type="text/css" href="../../css/responsive.css"/>
<br><br>
<h3>Rellene los siguientes campos:</h3>
<form>
	<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
	<tr> 
		<th>Nombre del Producto</th>
		<th>Stock</th>
		<th>Precio Neto</th>
		<th>Precio</th>
		<th>Lista de Compra</th>
	</tr>
	<tr>
		<td><input type="text" size="17" name="Producto"></td>
		<td><input type="text" size="6" name="Stock"></td>
		<td><input type="text" size="10" name="PrecioNeto"></td>
		<td><input type="text" size="10" name="Precio"></td>
		<td><input type="text" size="12" name="ListadeCompra"></td>
	</tr>
	</table><br><br>
	
	<table id="table-div">
		<tr><th>Descripcion</th></tr>
		<td><textarea name="Descripcion" rows="10" cols="80"></textarea></td>
	</table></td><br><br>
	<input type="submit" value="Confirmar" name="boton" class="button-action">
</form>

<form action="/trabajemos-master/boceto.php">
	<input type="submit" value="Regresar a Inicio" name="regreso" class="button-action">
</form>

<?php
	if (isset($_REQUEST["boton"])){
		
		$conectar=mysqli_connect("localhost","root","","valeria");
		$Nombre=$_GET["Producto"];
		$Stock=$_GET["Stock"];
		$PrecioNeto=$_GET["PrecioNeto"];
		$Precio=$_GET["Precio"];
		$ListaCompra=$_GET["ListadeCompra"];
		$Descripcion=$_GET["Descripcion"];

		$db="INSERT INTO productos (id_producto,nom_producto,stock,precio_neto,precio,lista_compra,descripcion) VALUES (NULL,".$Nombre.",".$Stock.",".$PrecioNeto.",".$Precio.",".$ListaCompra.", ".$Descripcion.")"; 
		$agregar=mysqli_query($conectar,$db); 
	}
?>
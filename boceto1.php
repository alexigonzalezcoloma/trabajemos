<script type="text/javascript" src="js/validaciones.js"></script>
<?php
	session_start();
	if($_SESSION['estado'] == "logueadoinv"){
			echo "<html>
				<head>
					<meta charset='UTF-8'>
					<title>ERP - Inventario</title>
					<link rel='stylesheet' type='text/css' href='css/boceto.css'/>
					<link rel='stylesheet' type='text/css' href='css/tabla.css'/>
					<link rel='stylesheet' type='text/css' href='css/responsive.css'/>
					<script type='text/javascript' src='js/jquery.js'></script>
					<script type='text/javascript' src='js/functions-js.js'></script>
					<script type='text/javascript' src='js/jquery-3.1.1.js'></script>
					<script type='text/javascript' src='js/funcionesbuscar.js'></script>
					<script type='text/javascript' src='js/funciones-inventario.js'></script>
					<script type='text/javascript' src='js/validaciones.js'></script>
					<link rel='icon' type='image/png' href='img/icon.png' />
					<meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no' />
				</head>
				<body>
				<div id='webpage'>
					<div id='webpage-lateral'>
						<div id='webpage-lateral-menu'>
							<img src='img/logo.png' style='margin:0 auto;margin-top:5px;'/><br/><br/>
							<label style='font-size:8pt;margin-left:5px;'>Conectado como: Inventario</label>
							<br/><br/>
							<div class='menu-item menu-border-top menu-border-bottom' onclick=\"Ajax('php/view/inicio.php', '#webpage-body', '');\">
								<img src='img/menu2/inicio.png' class='menu-item-img' />
								Inicio
							</div>
							<div class='menu-item menu-border-bottom' onclick=\"Ajax('php/view/verProductos.php', '#webpage-body', '');\">
								<img src='img/menu2/verProductos.png' class='menu-item-img' />
								Ver Productos
							</div>
							<div class='menu-item menu-border-bottom' onclick=\"Ajax('php/view/conStock.php', '#webpage-body', '');\">
								<img src='img/menu2/conStock.png' class='menu-item-img' />
								Con Stock
							</div>
							<div class='menu-item menu-border-bottom' onclick=\"Ajax('php/view/sinStock.php', '#webpage-body', '');\">
								<img src='img/menu2/sinStock.png' class='menu-item-img' />
								Sin Stock
							</div>
							<div class='menu-item menu-border-bottom' onclick=\"Ajax('php/view/listaCompra.php', '#webpage-body', '');\">
								<img src='img/menu2/listaCompra.png' class='menu-item-img' />
								Lista Compra
							</div>
							<div class='menu-item menu-border-bottom' onclick=\"Ajax('php/view/crudProductos.php', '#webpage-body', '');\">
								<img src='img/menu2/crudProductos.png' class='menu-item-img' />
								CRUD
							</div>
							<script type='text/javascript' src='/ERP/trabajemos/js/salir.js'></script>
							<div class='menu-item menu-border-bottom' onclick='salir()'>
								<img src='img/menu2/exitt.png' class='menu-item-img' />
								Salir
							</div>
						</div>
					</div>
					<div id='webpage-body'>
						<input id='tab-1' type='radio' name='tab-group' checked='checked' />		<!--Pestaña 1 activa por defecto-->
						<!--<label id='text-tab-1' for='tab-1'>Inicio</label>-->
						<div id='content'>															<!--Contenido a mostrar/ocultar-->
							<div id='content-1'>													<!--Contenido de la Pestaña 1-->
								<table>
									<tr>
										<td><img class='img-title-tab' src='img/menu2/inicio.png' width='40px' height='40px' /></td>
										<td><p class='title-tab'>Inicio</p></td>
									</tr>
								</table>
								<hr class='separator-title'>
								<div id='content-1-body'>
									<p>
										<table id='table-div' cellspacing='0' cellpadding='0' border='0' width='325'>
											<tr>
												<th>Buscar Productos</th>
											</tr>
										</table><br/>


										<center><form name='formulario'>
										INGRESAR CÓDIGO DEL PRODUCTO: 
										<input type='text' id='producto-codigo' name='producto-codigo' placeholder='solo numeros' onkeypress='return solonumeros(event)'/>
										<input type='button' id='busca' value='Buscar'/>
										</form></center>
										<br/>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</body>
		</html>";
	}
	else{
		header('Location: /ERP/trabajemos/index.php');
	}
?>

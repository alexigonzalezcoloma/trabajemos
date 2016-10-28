<!DOCTYPE html>
<html>
    <head>
        <title>ERP - Caja</title>
        <link rel="stylesheet" type="text/css" href="css/boceto.css"/>
        <link rel="stylesheet" type="text/css" href="css/tabla.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/functions-js.js"></script>
		<script type="text/javascript" src="js/functions-jquery.js"></script>
		
		<link rel="icon" type="image/png" href="img/icon.png" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />	
    </head>
    <body>
	<div id="webpage">	
		<div id="webpage-lateral">
			<div id="webpage-lateral-menu">		
				<img src="img/logo.png" style="margin:0 auto;margin-top:5px;"/><br/><br/>
				<label style="font-size:8pt;margin-left:5px;">Conectado como: Nicolás Sandoval</label>
				<br/><br/>
				<div class="menu-item menu-border-top menu-border-bottom" onclick="Ajax('php/view/inicio.php', '#webpage-body', '');">
					<img src="img/menu2/inicio.png" class="menu-item-img" />
					Inicio
				</div>
				<div class="menu-item menu-border-bottom" onclick="Ajax('php/view/vender.php', '#webpage-body', '');">
					<img src="img/menu2/vender.png" class="menu-item-img" />
					Vender
				</div>
				<div class="menu-item menu-border-bottom" onclick="Ajax('php/view/boletas.php', '#webpage-body', '');">
					<img src="img/menu2/boletas.png" class="menu-item-img" />
					Boletas
				</div>
				<div class="menu-item menu-border-bottom" onclick="Ajax('php/view/clientes.php', '#webpage-body', '');">
					<img src="img/menu2/clientes.png" class="menu-item-img" />
					Clientes
				</div>
			</div>
		</div>
		<div id="webpage-body">			
			<?php include("php/view/inicio.php");?>
		</div>
	</div>
    </body>
</html>
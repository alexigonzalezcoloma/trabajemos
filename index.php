﻿<!DOCTYPE html>
<html>
    <head>
        <title>ERP</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
		<!-- <script type="text/javascript" src="js/functions.js"></script> -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<link rel="icon" type="image/png" href="img/icon.png" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    </head>
    <body>
		<div id="back">
			<div id="back-login"> 
				<div id="back-login-box" class="transition-all">
					<div id="box-img">
						<br />
						<img src="img/logo.png" alt="logo" width="150px" />
					</div>
					<div id="box-session">
						<form action="php/validar.php" method="post" onsubmit="return ValidarLogin(this)">
							<div class="box-session-input">
								<span class="login-text">Usuario</span>
								<input type="text" class="input-login" placeholder="Rut sin puntos ni guión." id="user" name="user" required/>
								<br/>
								<br/>
								<span class="login-text">Contraseña:</span>
								<input type="password" class="input-login" id="password" name="password" required/>
								<div class="input-text"><p><a id="recover-pass" onclick="Ajax('view/recuperarPass.php', '#box-sesion', '');">¿Olvidó su contraseña?</a></p></div>
								<div class="input-text"><p>&nbsp;<?php @$msj = $_POST["msj"]; echo $msj;?></p></div>
							</div>
							<div class="box-session-button">
								<input id="login-button" value="Iniciar Sesion" type="submit"/>
							</div>
						</form>
					</div>		
				</div>
			</div>
		</div>
    </body>
</html>
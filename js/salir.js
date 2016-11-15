function salir() {
		if (confirm("¿Deceas salir de la sesion?")) {
			Ajax('index.php', '#webpage-body', '');
		} else {
			
		}
	}
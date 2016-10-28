<?php
//CIERRA LA SESION
session_start();
header("Cache-control: private"); // IE 6 Fix. 

// descoloco todas la variables de la sesion
session_unset();

// Destruyo la sesion
session_destroy();
unset($_SESSION['estado']);
unset($_SESSION['rut']);
unset($_SESSION['nombrecompleto']);

//Y me voy al inicio
header("Location: ../index.php?msj=Sesion+Finalizada");
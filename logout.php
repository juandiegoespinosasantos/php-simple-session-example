<?php
// Se llama la sesión.
session_name("PHP-SESSION-EXAMPLE");

// Se inicia la sesión.
session_start();

// Se eliminan todas las variables de sesión.
session_unset();

// Se destruye la sesión.
session_destroy();

// Se redirecciona al login.
header("location: login.php");

exit;
?>

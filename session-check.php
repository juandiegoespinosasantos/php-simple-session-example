<?php
// Si no hay sesión, se redirige al login
if (!isset($_SESSION["loggedin"])) {
    header("location: login.php");

    exit;
}
?>
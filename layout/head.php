<?php
// Se inicia la sesión.
session_name("PHP-SESSION-EXAMPLE");
session_start();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP Simple Sessión Example</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Ejemplo básico de sesiones en PHP" />
        <meta name="author" content="Juan Diego Espinosa Santos" />
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    </head>

    <body>

    <?php 
    // El menú sólo aparecerá si hay sesión.
    if (isset($_SESSION["loggedin"])) { ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"><i class="fab fa-php" style="font-size: 2rem;"></i></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 1</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 2</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 3</a>
                    </li>

                    <li class="nav-item dropdown  ml-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle"></i> <?= $_SESSION["name"] ?>
                        </a>
        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    <?php 
    }
    ?>

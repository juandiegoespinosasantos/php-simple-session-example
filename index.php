<?php 
include("layout/head.php"); 
require("session-check.php");
?>

<main role="main" id="main-content">
     <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">¡Bienvenido, <?=$_SESSION["name"] ?>!</h1>
          <p>Este es un ejemplo de sesiones en PHP.</p>
          <p><a class="btn btn-primary btn-lg" href="https://www.php.net/manual/en/reserved.variables.session.php" role="button">Ver más &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Título 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum id urna sit amet tempus. Nullam congue fermentum est eget sagittis. In id facilisis metus, venenatis viverra lacus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Título 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum id urna sit amet tempus. Nullam congue fermentum est eget sagittis. In id facilisis metus, venenatis viverra lacus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Título 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum id urna sit amet tempus. Nullam congue fermentum est eget sagittis. In id facilisis metus, venenatis viverra lacus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->
</main>

<?php include("layout/footer.php"); ?>

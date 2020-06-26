<?php 
include("layout/head.php"); 

// Si ya existe sesión, redireccionar a la página principal.
if (isset($_SESSION["loggedin"])) {
    header("location: index.php");
    
    exit;
} 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los parámetros del formulario desde el POST
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Se hace la validación de correo y contraseña correspondientes
    if (true) {
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        $_SESSION["name"] = "John Doe";

        header("location: index.php");

        exit;
    }
}
?>
<style>
    body {
        background-color: #e9ecef;
    }
</style>
<main id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Bienvenido</h5>

                        <form method="POST" action="" class="form-signin">
                            <div class="form-label-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico" required autofocus />
                                <label for="email">Correo electrónico</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required />
                                <label for="inputPassword">Contraseña</label>
                            </div>

                            <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include("layout/footer.php"); ?>

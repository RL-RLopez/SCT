<?php
    // session_start();
    // include "config/config.php";
    // if (isset($_SESSION['user_id']) && $_SESSION!==null) {
    //    header("location: ../dashboard.php");
    // }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../img/favicon.ico">
        <title>IncidentCCM</title>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/floating-labels.css" rel="stylesheet">
    </head>
    <body class="login">
        <form class="form-signin" action="dashboard.php" method="post">
            <div class="col-12 d-flex justify-content-end align-items-center">
                <a class="btn btn-sm btn-outline-secondary" href="../index.php">Regresar</a>
            </div>
            <div class="text-center mb-4">
                <img class="mb-4" src="../../img/logo.png" width="100" height="100">
                <h1 class="h3 mb-3 font-weight-normal">Iniciar sesion</h1>
                <p>Si olvidadte tu usuario o contraseña, debes de ponerte en contacto con el <strong>Departamento de apoyo informatico</strong></p>
            </div>
            <div class="form-label-group">
                <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Correo electronico" required autofocus>
                <label for="username">Email</label>
            </div>
            <div class="form-label-group">
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" required>
                <label for="inputPassword">Contraseña</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Recuerdame
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Ingresar</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
        </form>
    </body>
</html>
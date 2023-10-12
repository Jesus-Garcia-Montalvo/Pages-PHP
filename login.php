<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxnatzjc@dSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="mb-3">
            <label  class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label  class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Iniciar Sesión</button>
    </form>

    <?php
require './redBean/rb.php';

// Configura la conexión a la base de datos
R::setup('mysql:host=localhost;dbname=personas', 'root', '');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Busca el usuario por nombre en la base de datos
    $usuario = R::findOne('usuarios', 'nombre = ?', [$username]);

    if ($usuario && $username === $usuario->nombre && password_verify($password, $usuario->comtraseña)) {
        // Credenciales válidas, inicio de sesión exitoso
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Inicio de sesión exitoso",
                text: "¡Bienvenido, ' . $username . '!",
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location.href = "login.php"; // Redirige al usuario
            });
        </script>';
    } else {
        // Credenciales incorrectas
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "Inicio de sesión fallido",
                text: "Credenciales incorrectas",
            });
        </script>';
    }
}
?>

</body>
</html>

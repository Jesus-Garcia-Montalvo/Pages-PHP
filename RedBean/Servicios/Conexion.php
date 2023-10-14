<?php
// Incluye el archivo de RedBean (asegúrate de que esté correctamente configurado)
require '../rb.php';


try {
    R::setup('mysql:host=localhost;dbname=personas', 'root', '');
    echo " la conexión a la base de datos es exitosa" . "<br>";
    // Resto de tu código...
} catch (\Throwable $th) {
    // En caso de una excepción, manejarla y mostrar una alerta
    echo "Error en la conexión a la base de datos: " . $th->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="imagenes/bbaao4jw5zagwjfrg092" alt="">

</body>

</html>
<?php
// Incluye el archivo de RedBean (asegúrate de que esté correctamente configurado)
require '../rb.php';

// Conexión a la base de datos (reemplaza con tus propios valores)
R::setup('mysql:host=localhost;dbname=personas', 'root', '');

// Carga un usuario existente desde la base de datos (supongamos que su ID es 1)
$usuario = R::load('usuarios', 2);

// Verifica si se encontró el usuario
if ($usuario->id) {
    // Modifica las propiedades del usuario
    $usuario->nombre = 'jesus';
    $usuario->contrasena = 'garcia';

    // Guarda los cambios en la base de datos
    R::store($usuario);
    echo "Usuario actualizado correctamente.";
} else {
    echo "El usuario no se encontró en la base de datos.";
}

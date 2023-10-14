<?php
// Incluye el archivo de RedBean (asegúrate de que esté correctamente configurado)
require '../rb.php';


// Conexión a la base de datos (reemplaza con tus propios valores)
R::setup('mysql:host=localhost;dbname=personas', 'root', '');

// ID del usuario que deseas eliminar (cámbialo al ID que deseas eliminar)
$usuarioID = 2;

// Carga el usuario por su ID
$usuario = R::load('usuarios', $usuarioID);

// Verifica si se encontró el usuario
if ($usuario->id) {
    // Elimina el usuario de la base de datos
    R::trash($usuario);
    echo "Usuario con ID $usuarioID eliminado correctamente.";
} else {
    echo "El usuario con ID $usuarioID no se encontró en la base de datos.";
}

<?php
// Incluye el archivo de RedBean (asegúrate de que esté correctamente configurado)
require '../rb.php';


// Conexión a la base de datos (reemplaza con tus propios valores)
R::setup('mysql:host=localhost;dbname=personas', 'root', '');

// Realiza una consulta para buscar usuarios con un nombre específico
$nombreBuscado = 'jesus';
$usuariosEncontrados = R::find('usuarios', 'nombre = ?', [$nombreBuscado]);

// Verifica si se encontraron usuarios
if ($usuariosEncontrados) {
    foreach ($usuariosEncontrados as $usuario) {
        echo "ID: " . $usuario->id . ", Nombre: " . $usuario->nombre . ", Contraseña: " . $usuario->contrasena . "<br>";
    }
} else {
    echo "No se encontraron usuarios con el nombre '" . $nombreBuscado . "'.";
}

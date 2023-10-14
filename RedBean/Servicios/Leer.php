<?php
// Incluye el archivo de RedBean (asegúrate de que esté correctamente configurado)
require '../rb.php';

// Conexión a la base de datos (reemplaza con tus propios valores)
R::setup('mysql:host=localhost;dbname=personas', 'root', '');

// Obtén todos los registros de la tabla 'usuarios'
$usuarios = R::findAll('usuarios');

// Verifica si se encontraron registros
if ($usuarios) {
    foreach ($usuarios as $usuario) {
        echo "ID: " . $usuario->id . ", Nombre: " . $usuario->nombre . ", Contraseña: " . $usuario->contrasena . "<br>";
    }
} else {
    echo "No se encontraron registros en la tabla 'usuarios'.";
}

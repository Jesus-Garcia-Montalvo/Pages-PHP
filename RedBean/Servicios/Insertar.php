<?php
// Incluye el archivo de RedBean (asegúrate de que esté correctamente configurado)
require '../rb.php';

// Conexión a la base de datos (reemplaza con tus propios valores)
R::setup('mysql:host=localhost;dbname=personas', 'root', '');

// Crear un nuevo objeto de usuario
$usuario = R::dispense('usuarios');

// Establecer los valores de las propiedades del usuario
$usuario->nombre = 'NuevoUsuario';
$usuario->contrasena = 'NuevaContraseña'; // Cambia la propiedad aquí

// Guardar el objeto en la base de datos
$id = R::store($usuario);

// Comprobar si se guardó correctamente
if ($id) {
    echo "Nuevo usuario insertado con ID: " . $id;
} else {
    echo "Error al insertar el usuario.";
}

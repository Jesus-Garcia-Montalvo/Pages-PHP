<?php

class Persona
{
    public $nombre;

    public function setNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
}





$obJAlumno = new persona();
$obJAlumno->setNombre("jesus");

echo $obJAlumno->nombre;

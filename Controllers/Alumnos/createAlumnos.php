<?php

require_once __DIR__ .'/../Models/Alumno.php';

if(isset($_POST['crearAlumno'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecnac = $_POST['fecnac'];

    $alumno = new Alumno();
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecnac = $fecnac;
    $alumno->create();

} else {
    echo "No se presionó el botón de enviar formulario";
}

require_once __DIR__ .'/../Views/createAlumno.view.php';
<?php

require_once __DIR__. '/../../Models/Alumno.php';

if(isset($_POST['crearAlumno'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecnac = $_POST['fecnac'];

    $alumno = new Alumno();
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecnac = $fecnac;
    $alumno->create();

    header('location: indexAlumnos.php');
}
require_once __DIR__ .'/../../Views/Alumnos/create.view.php';
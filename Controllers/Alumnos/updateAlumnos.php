<?php

require_once __DIR__ . '/../../Models/Alumno.php';

$id = $_GET['id'];

if (isset($_POST['actualizarDatos'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecnac = $_POST['fecnac'];

    $alumno = Alumno::getById($id);
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecnac = $fecnac;
    $alumno->update();

    header('Location: indexAlumnos.php');
} else {
    $alumno = Alumno::getById($id);
    if ($alumno) {
        require_once __DIR__ . '/../../Views/Alumnos/update.view.php';
    }
}

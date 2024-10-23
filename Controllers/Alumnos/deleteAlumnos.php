<?php

require_once __DIR__ .'/../Models/Alumno.php';

$id = $_GET['id'];

$alumno = Alumno::getById($id);

if ($alumno) {
    $alumno->delete();
    header('Location: ../Controllers/Alumnos/indexAlumno.php');
}

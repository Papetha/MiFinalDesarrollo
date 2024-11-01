<?php

require_once __DIR__ . '/../../Models/Alumno.php';

$id = $_GET['id']; //conseguimos el id del alumno a eliminar por get, osea que esta en la URL

$alumno = Alumno::getById($id); //buscamos ese alumno por id

if ($alumno) { //si se encontro el alumno, entonces lo eliminamos por el metodo delete
    $alumno->delete();
    header('Location: ../Alumnos/indexAlumnos.php');
}

<?php

require_once __DIR__ . '/../../Models/Alumno.php';

$id = $_GET['id']; //obtenemos id por url

if (isset($_POST['actualizarDatos'])) { //si se aprieta el boton  de actualizar
    //escribimos los nuevos datos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecnac = $_POST['fecnac'];
    //buscamos por el metodo estatico al alumno a editar
    $alumno = Alumno::getById($id);
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecnac = $fecnac;
    $alumno->update(); //lo actualizamos con los datos escritos en las variables de arriba

    header('Location: indexAlumnos.php');
} else { //si el boton no se apreto, entonces agarra al  alumno a editar

    $alumno = Alumno::getById($id);
    if ($alumno) { //si se encuentra te muestra el formulario
        require_once __DIR__ . '/../../Views/Alumnos/update.view.php';
    }
}

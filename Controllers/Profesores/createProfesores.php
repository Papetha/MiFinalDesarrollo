<?php

require_once __DIR__ .'/../../Models/Profesor.php';

if(isset($_POST['crearProfesor'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materia_id = $_POST['materia_id'];

    $profesor = new Profesor();
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->materia_id = $materia_id;
    $profesor->create();

    header('Location: indexProfesores.php');
}

$materias = Materia::all();

require_once __DIR__ .'/../../Views/Profesores/create.view.php';
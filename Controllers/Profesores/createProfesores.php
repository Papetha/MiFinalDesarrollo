<?php
require_once __DIR__ . '/../../Models/Profesor.php';

if (isset($_POST['crearProfesor'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $profesor = new Profesor();
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->create();

    header('Location: indexProfesores.php');
}

require_once __DIR__ . '/../../Views/Profesores/create.view.php';

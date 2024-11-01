<?php

require_once __DIR__ . '/../../Models/Profesor.php';

$id = $_GET['id'];

if (isset($_POST['actualizarDatos'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materia_id = $_POST['materia_id'];

    $profesor = Profesor::getById($id);
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->materia_id = $materia_id;
    $profesor->update();

    header('Location: indexProfesores.php');
} else {
    $profesor = Profesor::getById($id);
    if ($profesor) {
        require_once __DIR__ . '/../../Views/Profesores/update.view.php';
    }
}

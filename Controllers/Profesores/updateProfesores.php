<?php

require_once __DIR__ . '/../../Models/Profesor.php';

$id = $_GET['id']; // id del profesor a eliminar


if (isset($_POST['actualizarDatos'])) { //  si se ha enviado el formulario de actualizar datos
    $nombre = $_POST['nombre']; //  nombre del profesor
    $apellido = $_POST['apellido']; //   apellido del profesor

    $profesor = Profesor::getById($id); //   obtener el profesor a actualizar
    $profesor->nombre = $nombre; //    actualizar el nombre del profesor
    $profesor->apellido = $apellido; //    actualizar el apellido del profesor
    $profesor->update();

    header('Location: indexProfesores.php');
} else { //  si no se ha enviado el formulario de actualizar datos
    $profesor = Profesor::getById($id); //    obtener el profesor a actualizar
    if ($profesor) { //    si el profesor existe
        require_once __DIR__ . '/../../Views/Profesores/update.view.php'; // mostrar la vista de actualizar datos
    }
}

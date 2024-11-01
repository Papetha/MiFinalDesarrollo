<?php
require_once __DIR__ . '/../../Models/Profesor.php'; // se importa el modelo de profesor


if (isset($_POST['crearProfesor'])) { // se verifica si se ha enviado el formulario de crear profesor
    $nombre = $_POST['nombre']; // se obtiene el nombre del profesor
    $apellido = $_POST['apellido']; // se obtiene el apellido del profesor

    $profesor = new Profesor(); //  se crea un objeto de la clase profesor
    $profesor->nombre = $nombre; //  se asigna el nombre al objeto profesor
    $profesor->apellido = $apellido; //   se asigna el apellido al objeto profesor
    $profesor->create(); //  se crea el profesor en la base de datos

    header('Location: indexProfesores.php');
}

require_once __DIR__ . '/../../Views/Profesores/create.view.php';

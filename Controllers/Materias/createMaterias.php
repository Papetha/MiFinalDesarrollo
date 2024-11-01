<?php

require_once __DIR__ . '/../../Models/Materia.php'; //llamamos la clase materia

if (isset($_POST['crearMateria'])) { //si se aprieta el boton  de crear materia

    $nombre = $_POST['nombre']; //guardamos el nombre  de la materia en la variable nombre

    $materia = new Materia(); //creamos una nueva instancia
    $materia->nombre = $nombre;
    $materia->create(); //y la creamos con el metodo crete
    header('Location: indexMaterias.php');
}

require_once __DIR__ . '/../../Views/Materias/create.view.php';

<?php

require_once __DIR__ . '/../../Models/Materia.php'; // se importa el modelo de la materia

$id = $_GET['id']; // id de la materia a eliminar por url

if (isset($_POST['actualizarDatos'])) { //si se apreto el boton  de actualizar
    $nombre = $_POST['nombre']; //nombre que se guarda en la bd
    $materia = Materia::getById($id); //  se busca la materia por id en la bd
    $materia->nombre = $nombre; //  se actualiza el nombre de la materia
    $materia->update(); //  se actualiza la materia en la bd

    header('Location: ../../Controllers/Materias/indexMaterias.php');
} else {
    $materia = Materia::getById($id); //si  no se apreto el boton de actualizar, agarramos la materia por id mediante el metodo
    if ($materia) { // si la materia existe
        require_once __DIR__ . '/../../Views/Materias/update.view.php'; // vamos a la vista
    }
}

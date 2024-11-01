<?php

require_once __DIR__ . '/../../Models/Materia.php';

$id = $_GET['id'];
//conseguimos la id de  la materia que se quiere eliminar

$materia = Materia::getById($id); //lo buscamos por id

if ($materia) { //si existe, la eliminamos por el meotodo delete
    $materia->delete();
    header('Location: indexMaterias.php');
}

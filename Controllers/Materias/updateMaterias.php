<?php

require_once __DIR__ .'/../../Models/Materia.php';

$id = $_GET['id'];

if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];

    $materia = Materia::getById($id);
    $materia->nombre = $nombre;
    $materia->update();

    header('Location: ../../Controllers/Materias/indexMaterias.php');
} else  {
    $materia = Materia::getById($id);
    if ($materia) {
        require_once __DIR__ .'/../../Views/Materias/update.view.php';
    }
}
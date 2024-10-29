<?php

require_once __DIR__ .'/../../Models/Materia.php';

$id = $_GET['id'];

$materia = Materia::getById($id);

if ($materia) {
    $materia->delete();
    header('Location: indexMaterias.php');
}

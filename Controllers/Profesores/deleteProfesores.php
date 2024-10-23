<?php

require_once __DIR__ .'/../Models/Profesor.php';

$id = $_GET['id'];

$profesor = Profesor::getById($id);

if ($profesor) {
    $profesor->delete();
    header('Location: ../Controllers/indexAlumno.php');
}

<?php
require_once __DIR__ . '/../../Models/Profesor.php';
require_once __DIR__ . '/../../Models/Materia.php';

$profesorid = $_GET['id'];
$proferegistrado = Profesor::getById($profesorid);

if (!$proferegistrado) {
    header('Location: indexProfesores.php');
    exit;
}

require_once __DIR__ . '/../../Views/Profesores/vermateriasProfesores.view.php';

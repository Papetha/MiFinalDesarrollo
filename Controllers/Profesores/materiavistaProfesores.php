<?php
require_once __DIR__ . '/../../Models/Profesor.php';
require_once __DIR__ . '/../../Models/Materia.php';

$profesorid = $_GET['id']; // id del profesor
$proferegistrado = Profesor::getById($profesorid); //  obtener el profesor por id

if (!$proferegistrado) { //  si no existe el profesor
    header('Location: indexProfesores.php'); //  redireccionar a la pagina de profesores
    exit;
}

require_once __DIR__ . '/../../Views/Profesores/vermateriasProfesores.view.php';

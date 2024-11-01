<?php
require_once __DIR__ . '/../../Models/Alumno.php';
require_once __DIR__ . '/../../Models/Materia.php';

$alumnoid = $_GET['id']; //agarro la id por url
$alumregis = Alumno::getById($alumnoid);
//por el metodo estatico agarro toda  la informacion del alumno

require_once __DIR__ . '../../../Views/Alumnos/vermaterias.view.php';

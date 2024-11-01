<?php
require_once __DIR__ . '/../../Models/Alumno.php';
require_once __DIR__ .'/../../Models/Materia.php';

$alumnoid=$_GET['id'];
$alumregis=Alumno::getById($alumnoid);
//observo que materias tiene cada alumno
require_once __DIR__ . '../../../Views/Alumnos/vermaterias.view.php';
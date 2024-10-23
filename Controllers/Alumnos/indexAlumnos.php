<?php

require_once __DIR__ ."/../../Models/Alumno.php";

$alumnos = Alumno::all();

require_once "../../Views/Alumnos/index.view.php";




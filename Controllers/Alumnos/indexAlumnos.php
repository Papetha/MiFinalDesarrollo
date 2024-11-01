<?php

require_once __DIR__ . "/../../Models/Alumno.php";

$alumnos = Alumno::all();
//lista de todos los alumnos
require_once "../../Views/Alumnos/index.view.php";

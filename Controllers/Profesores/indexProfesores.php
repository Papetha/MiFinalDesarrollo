<?php

require_once "../../Models/Profesor.php";
require_once "../../Models/Materia.php";

$profesores = Profesor::all(); // obtenemos todos los profesores

require_once "../../Views/Profesores/index.view.php";

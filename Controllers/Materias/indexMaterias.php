<?php

require_once "../../Models/Materia.php";

$materiasDB = Materia::all(); //me muestra todas las materias

require_once "../../Views/Materias/index.view.php";

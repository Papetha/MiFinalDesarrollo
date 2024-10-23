<?php

require_once "../../Models/Materia.php";

$materiasDB = Materia::all();

require_once "../../Views/Materias/index.view.php";

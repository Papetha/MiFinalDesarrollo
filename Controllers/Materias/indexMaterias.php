<?php

require_once "../../Models/Materia.php";

$materiasDB = Materia::all();

require_once "../../Views/Materias/index.view.php";

$materias = Materia::getById(3);
foreach ($materias->alumnos() as $alumnos) {
    echo "<p>$alumnos->nombre</p>";
}
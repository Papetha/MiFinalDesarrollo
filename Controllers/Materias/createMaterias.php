<?php

require_once __DIR__ .'/../../Models/Materia.php';

if(isset($_POST['crearMateria'])){
    $nombre = $_POST['nombre'];

    $materia = new Materia();
    $materia->nombre = $nombre;
    $materia->create();
} 

require_once __DIR__ .'/../../Views/Materias/create.view.php';
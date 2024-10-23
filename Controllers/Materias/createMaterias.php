<?php

require_once __DIR__ .'/../Models/Materia.php';

if(isset($_POST['crearMateria'])){
    $nombre = $_POST['nombre'];

    $materia = new Materia();
    $materia->nombre = $nombre;
    $materia->create();
} else {
    echo "No se presionó el botón de enviar formulario";
}

require_once __DIR__ .'/../Views/createMateria.view.php';
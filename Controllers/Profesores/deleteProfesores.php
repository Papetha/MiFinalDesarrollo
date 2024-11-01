<?php

require_once __DIR__ . '/../../Models/Profesor.php';

$id = $_GET['id']; // id del profesor a eliminar

$profesor = Profesor::getById($id); //  obtener el profesor por id

if ($profesor) { //  si el profesor existe
    $profesor->delete(); //  eliminar el profesor
    header('Location: indexProfesores.php');
}

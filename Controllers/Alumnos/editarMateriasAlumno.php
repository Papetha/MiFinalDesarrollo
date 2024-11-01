<?php
require_once __DIR__ . '/../../Models/Alumno.php';
require_once __DIR__ . '/../../Models/Materia.php';

$id = $_GET['id']; //obtenemos la id del alumno por url
$alumno = Alumno::getById($id); //lo buscamos en la bd por esa id
$todasLasMaterias = Materia::all(); //mostramos una lista de materias

if (isset($_POST['guardarMaterias'])) {
    //si se aprieta el boton, primero se borran todas las materias del alumno por el metodo
    $alumno->desasignarTodasLasMaterias();

    //si hay  materias seleccionadas, se asignan
    if (isset($_POST['materias'])) {
        foreach ($_POST['materias'] as $materia_id) {
            $alumno->asignarMateria($materia_id);
        }
    }

    header('Location: indexAlumnos.php');
    exit;
}

require_once __DIR__ . '/../../Views/Alumnos/editarMateriasAlumno.view.php';

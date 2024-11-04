<?php
require_once __DIR__ . '/../../Models/Alumno.php';
require_once __DIR__ . '/../../Models/Materia.php';

$id = $_GET['id']; //  id del alumno por url
$alumno = Alumno::getById($id); 
$todasLasMaterias = Materia::all(); //  todas las materias de la base de datos


if (isset($_POST['guardarMaterias'])) {// si se ha enviado el formulario

    $alumno->desasignarTodasLasMaterias(); // desasignamos todas las materias del alumno

    if (isset($_POST['materias'])) {//  si se han seleccionado materias

        foreach ($_POST['materias'] as $materia_id) {//  recorremos las materias seleccionadas

            $alumno->asignarMateria($materia_id);//   las asignamos al alumno

        }
    }

    header('Location: indexAlumnos.php');// 
    exit;
}

require_once __DIR__ . '/../../Views/Alumnos/editarMateriasAlumno.view.php';

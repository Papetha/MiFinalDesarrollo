<?php
require_once __DIR__ . '/../../Models/Profesor.php';
require_once __DIR__ . '/../../Models/Materia.php';

$id = $_GET['id']; // id del profesor
$profesor = Profesor::getById($id); //  obtener el profesor por id
$todasLasMaterias = Materia::all(); //  obtener todas las materias

if (isset($_POST['guardarMaterias'])) { //  si se ha enviado el formulario de guardar materias
    // Eliminar materias asignadas
    $profesor->desasignarTodasLasMaterias(); //   eliminar todas las materias del profesor

    // Asignar las nuevas materias 
    if (isset($_POST['materias'])) { //   si se han seleccionado materias
        foreach ($_POST['materias'] as $materia_id) { //   recorrer las materias seleccionadas
            $profesor->asignarMateria($materia_id); //    asignar la materia al profesor
        }
    }

    header('Location: indexProfesores.php');
    exit;
}

require_once __DIR__ . '/../../Views/Profesores/editarMateriasProfesores.view.php';

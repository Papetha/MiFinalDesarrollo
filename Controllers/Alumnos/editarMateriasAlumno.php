<?php
require_once __DIR__ . '/../../Models/Alumno.php';
require_once __DIR__ . '/../../Models/Materia.php';

$id = $_GET['id'];
$alumno = Alumno::getById($id);
$todasLasMaterias = Materia::all();

if (isset($_POST['guardarMaterias'])) {
    // Eliminar materias asignadas
    $alumno->desasignarTodasLasMaterias();
    
    // Asignar las nuevas materias 
    if (isset($_POST['materias'])) {
        foreach ($_POST['materias'] as $materia_id) {
            $alumno->asignarMateria($materia_id);
        }
    }
    
    header('Location: indexAlumnos.php');
    exit;
}

require_once __DIR__ . '/../../Views/Alumnos/editarMateriasAlumno.view.php';
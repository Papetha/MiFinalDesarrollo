<?php
require_once __DIR__ . '/../../Models/Profesor.php';
require_once __DIR__ . '/../../Models/Materia.php';

$id = $_GET['id'];
$profesor = Profesor::getById($id);
$todasLasMaterias = Materia::all();

if (isset($_POST['guardarMaterias'])) {
    // Eliminar materias asignadas
    $profesor->desasignarTodasLasMaterias();

    // Asignar las nuevas materias 
    if (isset($_POST['materias'])) {
        foreach ($_POST['materias'] as $materia_id) {
            $profesor->asignarMateria($materia_id);
        }
    }

    header('Location: indexProfesores.php');
    exit;
}

require_once __DIR__ . '/../../Views/Profesores/editarMateriasProfesores.view.php';

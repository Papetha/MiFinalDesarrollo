<?php
require_once __DIR__ . '/../Models/Alumno.php';
require_once __DIR__ . '/../Models/Profesor.php';
require_once __DIR__ . '/../Models/Materia.php';

// cuento alumnos y los guardo en una variable que voy a llamar despues
$cantidadAlumnos = count(Alumno::all()); // cuanto hay de alumnos
$cantidadProfesores = count(Profesor::all()); //  cuanto hay de profesores
$cantidadMaterias = count(Materia::all()); //  cuanto hay de materias


// Preparar datos para el gráfico
$datosGrafico = [
    'labels' => ['Alumnos', 'Profesores', 'Materias'], // array donde asigno  los nombres de los datos
    'datasets' => [ // array donde  voy a asignar los datos de los alumnos, profesores y materias
        [
            'data' => [$cantidadAlumnos, $cantidadProfesores, $cantidadMaterias], //  array donde voy a asignar los datos de los alumnos, profesores y materias
            'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
            'hoverBackgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56']
        ]
    ]
];

// Cargar la vista
require_once __DIR__ . '/../Views/dashboard.view.php';

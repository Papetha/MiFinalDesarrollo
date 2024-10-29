<?php
require_once __DIR__. '/../Models/Alumno.php';
require_once __DIR__. '/../Models/Profesor.php';
require_once __DIR__. '/../Models/Materia.php';

// cuento alumnos y los guardo en una variable que voy a llamar despues
$cantidadAlumnos = count(Alumno::all());
$cantidadProfesores = count(Profesor::all());
$cantidadMaterias = count(Materia::all());

// Preparar datos para el gráfico
$datosGrafico = [
    'labels' => ['Alumnos', 'Profesores', 'Materias'],
    'datasets' => [
        [
            'data' => [$cantidadAlumnos, $cantidadProfesores, $cantidadMaterias],
            'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
            'hoverBackgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56']
        ]
    ]
];

// Cargar la vista
require_once __DIR__ . '/../Views/dashboard.view.php';
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/MiFinalDesarrollo/Controllers/Alumnos/indexAlumnos.php">Alumnos</a>
                <a class="nav-item nav-link" href="/MiFinalDesarrollo/Controllers/Profesores/indexProfesores.php">Profesores</a>
                <a class="nav-item nav-link" href="/MiFinalDesarrollo/Controllers/Materias/indexMaterias.php">Materias</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4">Grafico Escolar</h1>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Alumnos</h5>
                        <p class="card-text display-4"><?php echo $cantidadAlumnos; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Profesores</h5>
                        <p class="card-text display-4"><?php echo $cantidadProfesores; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Materias</h5>
                        <p class="card-text display-4"><?php echo $cantidadMaterias; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        //script de chart js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: <?php echo json_encode($datosGrafico); ?>,
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Distribución de Alumnos, Profesores y Materias'
                }
            }
        });
    </script>
</body>

</html>
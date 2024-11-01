<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias de <?= $proferegistrado->nombre; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/MiFinalDesarrollo/Controllers/dashboard.php">Página principal</a>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/MiFinalDesarrollo/Controllers/Alumnos/indexAlumnos.php">Alumnos</a>
                <a class="nav-item nav-link" href="/MiFinalDesarrollo/Controllers/Profesores/indexProfesores.php">Profesores</a>
                <a class="nav-item nav-link" href="/MiFinalDesarrollo/Controllers/Materias/indexMaterias.php">Materias</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="mb-4">Materias de <?= $proferegistrado->nombre; ?></h1>
        <div class="list-group">
            <?php foreach ($proferegistrado->materias() as $materia) { ?>
                <div class="list-group-item">
                    <h5 class="mb-1"><?= $materia->nombre; ?></h5>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>
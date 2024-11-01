<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
    <!-- Include bootstrap last version -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include jQuery last version -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/MiFinalDesarrollo/Controllers/dashboard.php">Pagina principal</a>
            <div class="navbar-nav">
                <a class="nav-item nav-link"
                    href="/MiFinalDesarrollo/Controllers/Alumnos/indexAlumnos.php">Alumnos</a>
                <a class="nav-item nav-link"
                    href="/MiFinalDesarrollo/Controllers/Profesores/indexProfesores.php">Profesores</a>
                <a class="nav-item nav-link"
                    href="/MiFinalDesarrollo/Controllers/Materias/indexMaterias.php">Materias</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col col-12">
                <div class="card">
                    <div class="card-header">

                        <h3>Editar Materia - ID: <?= $materia->id ?></h3>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" value="<?= $materia->nombre ?>" name="nombre" id="nombre" class="form-control">
                            </div>
                            <button type="submit" name="actualizarDatos" class="btn btn-primary">
                                <i class="fas fa fa-send">Actualizar</i>
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
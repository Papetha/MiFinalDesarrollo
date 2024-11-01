<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materias del Profesor</title>
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
        <h1 class="mb-4">Editar Materias de <?= $profesor->nombre . ' ' . $profesor->apellido ?></h1>
        <form action="" method="post">
            <div class="form-group">
                <?php foreach ($todasLasMaterias as $materia): ?>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="materia_<?= $materia->id ?>"
                            name="materias[]" value="<?= $materia->id ?>"
                            <?= in_array($materia, $profesor->materias()) ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="materia_<?= $materia->id ?>"><?= $materia->nombre ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="submit" name="guardarMaterias" class="btn btn-primary">
                <i class="fas fa-save"></i> Guardar Cambios
            </button>
        </form>
    </div>
</body>

</html>
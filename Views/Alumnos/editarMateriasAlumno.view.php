<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materias del Alumno</title>
</head>
<body>
    <h1>Editar Materias de <?= $alumno->nombre . ' ' . $alumno->apellido ?></h1>
    <form action="" method="post">
        <?php foreach ($todasLasMaterias as $materia): ?>
            <div>
                <input type="checkbox" name="materias[]" value="<?= $materia->id ?>"
                    <?= in_array($materia, $alumno->materias()) ? 'checked' : '' ?>>
                <label><?= $materia->nombre ?></label>
            </div>
        <?php endforeach; ?>
        <button type="submit" name="guardarMaterias">Guardar Cambios</button>
    </form>
</body>
</html>
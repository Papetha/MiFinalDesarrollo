<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-group">
    <form action="" method="post">
    <label for="materia_id">Materia</label>
        <?php foreach ($materias as $materia) { ?>
            <input type="checkbox" name="materia_id[]" id="" value="<?= $materia->id ?>">
            <?= $materia->nombre ?>
        <?php } ?>

        <button type="submit" name="asignarMateria" class="btn btn-primary">
            <i class="fas fa fa-send">Enviar</i>
        </button>
    </form>
</div>
</body>
</html> -->
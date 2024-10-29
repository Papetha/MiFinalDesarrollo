<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
</head>
<body>
    <H1><?=$alumregis->nombre;?></H1>
    <?php
        foreach ($alumregis->materias() as $materia) { ?>
        <h2><?= $materia->nombre; ?></h2>
        <?php }
     ?>
</body>
</html>
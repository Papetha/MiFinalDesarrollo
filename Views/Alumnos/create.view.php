<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alumno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="index.php" style="text-decoration: none; color:black; font-size:17px"><button>Volver atrás ↩️</button></a>

    

    <div class="container d-flex justify-content-center mt-5">
                <div class="card ">
                    <div class="card-header">
                        <h2>INGRESE LOS DATOS DEL ALUMNO✍</h2>
                        <div class="card-body">
                            <form action="" method="post">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control mb-2" required>

                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" name="apellido" id="apellido" class="form-control mb-2" required>

                                <label for="date" class="form-label">Fecha de nacimiento</label>
                                <input type="date" name="date" id="date" class="form-control mb-2" required>

                                <?php foreach ($materias as $materia) {?>
                                    <label>
                                        <input type="checkbox" name="materia[]" id="" value="<?=$materia->id?>"> 
                                        <?= $materia->nombre?>
                                    </label>
                                <?php } ?>

                                <!-- <label for="materiaID" class="form-label">Materia</label>
                                <select name="materiaID" id="materiaID">
                                    <option hidden value="">Seleccione una materia</option>
                                    <?php foreach ($materias as $materia) {?>
                                        
                                        <option value="<?=$materia->id?>"><?= $materia->nombre?></option>
                                    <?php } ?>
                                </select> -->
                                <br>
                                <button type="submit" name="crearAlumno" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
    </div>






</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
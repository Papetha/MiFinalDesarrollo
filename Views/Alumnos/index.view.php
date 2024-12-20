<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Table Alumnos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/MiFinalDesarrollo/Controllers/dashboard.php">Pagina principal</a>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/MiFinalDesarrollo/Controllers/Alumnos/indexAlumnos.php">
                    <i class="fas fa-user-graduate"></i> Alumnos
                </a>
                <a class="nav-item nav-link" href="/MiFinalDesarrollo/Controllers/Profesores/indexProfesores.php">
                    <i class="fas fa-chalkboard-teacher"></i> Profesores
                </a>
                <a class="nav-item nav-link" href="/MiFinalDesarrollo/Controllers/Materias/indexMaterias.php">
                    <i class="fas fa-book"></i> Materias
                </a>
            </div>
        </div>
    </nav>
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <a href="createAlumnos.php" class="btn btn-success float-right">Agregar Alumno</a>
                        <h2 class="pull-left">Lista de Alumnos</h2>
                    </div>
                    <table id="listaAlumnos" class="table table-sm table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha Nacimiento</th>
                                <th>Materias</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($alumnos as $alumno) { ?>
                                <tr>
                                    <td><?= $alumno->id; ?></td>
                                    <td><?= $alumno->nombre; ?></td>
                                    <td><?= $alumno->apellido; ?></td>
                                    <td><?= date('d/m/Y', strtotime($alumno->fecnac)); ?></td>
                                    <td>
                                        <a href="materiasvista.php?id=<?= $alumno->id; ?>" class="btn btn-info btn-sm">
                                            <i class="fas fa-book-open"></i> Ver Materias
                                        </a>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="updateAlumnos.php?id=<?= $alumno->id; ?>" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="deleteAlumnos.php?id=<?= $alumno->id; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                            <a href="editarMateriasAlumno.php?id=<?= $alumno->id; ?>" class="btn btn-info btn-sm">Asignar/Desasignar Materias</a>
                                        </div>
                                    </td>
                                </tr>

                            <?php }

                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha Nacimiento</th>
                                <th>Materias</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#listaAlumnos').DataTable({});
    });
</script>

</html>
<?php

require_once 'Conexion.php';
require_once 'Materia.php';

class Profesor extends Conexion
{

    public $id, $nombre, $apellido, $materia_id;

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO profesores (nombre, apellido) VALUES (?, ?)");
        $pre->bind_param("ss", $this->nombre, $this->apellido);
        $pre->execute();
    }
    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM profesores WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE profesores SET nombre = ?, apellido = ?, materia_id = ? WHERE id = ?");
        $pre->bind_param("ssii", $this->nombre, $this->apellido, $this->materia_id, $this->id);
        $pre->execute();
    }
    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM profesores");
        $result->execute();
        $valoresDb = $result->get_result();
        $profesores = [];
        while ($profesor = $valoresDb->fetch_object(Profesor::class)) {
            $profesores[] = $profesor;
        }
        return $profesores;
    } //muestro la lista de profesores

    public function materia()
    {
        return Materia::getById($this->materia_id);
    } //traer la materia que da el profesor

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM profesores WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $profesor = $valorDb->fetch_object(Profesor::class);
        return $profesor;
    } //agarro por id al profe
    // public function materias() {
    //     $this->conectar();
    //     $result = mysqli_prepare($this->con, "SELECT materias.* FROM materias INNER JOIN profesor_materia ON materias.id = profesor_materia.materia_id WHERE profesor_materia.profesor_id = ?");
    //     $result->bind_param("i", $this->id);
    //     $result->execute();
    //     $valoresDb = $result->get_result();

    //     $materias = [];
    //     while ($materia = $valoresDb->fetch_object(Materia::class)) {
    //         $materias[] = $materia;
    //     }
    //     return $materias;
    // }
    public function materias()
    {
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT materias.* FROM materias INNER JOIN profesor_materia ON materias.id = profesor_materia.materia_id WHERE profesor_materia.profesor_id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();

        $materias = [];
        while ($materia = $valoresDb->fetch_object(Materia::class)) {
            $materias[] = $materia;
        }
        return $materias;
    }

    public function desasignarTodasLasMaterias()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM profesor_materia WHERE profesor_id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function asignarMateria($materia_id)
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO profesor_materia (profesor_id, materia_id) VALUES (?, ?)");
        $pre->bind_param("ii", $this->id, $materia_id);
        $pre->execute();
    }
}

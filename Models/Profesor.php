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
        //primero elimino los registros en  la tabla profesor_materia

        $pre = mysqli_prepare($this->con, "DELETE FROM profesor_materia WHERE alumno_id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        
        // despues elimino el registro en la tabla profesores
        $pre = mysqli_prepare($this->con, "DELETE FROM profesores WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE profesores SET nombre = ?, apellido = ? WHERE id = ?");
        $pre->bind_param("ssi", $this->nombre, $this->apellido, $this->id);
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

    public function materias() //  muestro las materias del profesor
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

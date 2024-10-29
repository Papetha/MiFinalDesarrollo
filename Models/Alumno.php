<?php

require_once 'Conexion.php';
require_once 'Materia.php';

class Alumno extends Conexion {

    public $id, $nombre, $apellido, $fecnac;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumnos (nombre, apellido, fecnac) VALUES (?, ?, ?)");
        $pre->bind_param("sss", $this->nombre, $this->apellido, $this->fecnac);
        $pre->execute();
    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos");
        $result->execute();
        $valoresDb = $result->get_result();
        $alumnos = [];
        while ($alumno = $valoresDb->fetch_object(Alumno::class)) {
            $alumnos[] = $alumno;
        }
        return $alumnos;
    } //muestra todos los alumnos en el index

    public static function getById($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $alumno = $valorDb->fetch_object(Alumno::class);
        return $alumno;
    } //elimina o edita un alumno por id 

    public function delete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM alumnos WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    } //bind param medida de seg

    public function update() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE alumnos SET nombre = ?, apellido = ?, fecnac = ? WHERE id = ?");
        $pre->bind_param("sssi", $this->nombre, $this->apellido, $this->fecnac, $this->id);
        $pre->execute();
    }

    public function materias() {
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT materias.* FROM materias INNER JOIN alumno_materia ON materias.id = alumno_materia.materia_id WHERE alumno_materia.alumno_id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();

        $materias = [];
        while ($materia = $valoresDb->fetch_object(Materia::class)) {
            $materias[] = $materia;
        }
        return $materias;
    }//traer todas las materias de los alumnos por id
}
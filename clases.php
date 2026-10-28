<?php
// Clase Estudiante
class Estudiante {
    private $id;
    private $nombre;
    private $correo;

    public function __construct($id, $nombre, $correo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // Métodos de acceso (Getters) y mutación (Setters)
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }

    public function getCorreo() { return $this->correo; }
    public function setCorreo($correo) { $this->correo = $correo; }

    public function obtenerDetalles() {
        return "Estudiante: {$this->nombre} ({$this->correo})";
    }
}

// Clase Curso
class Curso {
    private $id;
    private $titulo;
    private $descripcion;
    private $estudiantes = [];

    public function __construct($id, $titulo, $descripcion) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
    }

    public function getId() { return $this->id; }
    public function getTitulo() { return $this->titulo; }
    public function getDescripcion() { return $this->descripcion; }

    // Método específico para agregar estudiantes al curso
    public function inscribirEstudiante(Estudiante $estudiante) {
        $this->estudiantes[] = $estudiante;
    }

    // Método para listar los estudiantes inscritos
    public function listarEstudiantes() {
        return $this->estudiantes;
    }
}
?>
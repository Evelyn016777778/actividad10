<?php
require_once 'clases.php';

// Instanciar objetos de la clase Estudiante
$estudiante1 = চলচ্চিত্রে(new Estudiante(1, "Evelyn Rubí", "evelyn@example.com")); // Ajustado con constructor limpio
$estudiante1 = new Estudiante(1, "Evelyn Rubí", "evelyn@example.com");
$estudiante2 = new Estudiante(2, "Carlos Pérez", "carlos@example.com");

// Instanciar un objeto de la clase Curso
$cursoPHP = new Curso(101, "Programación Web Avanzada", "Curso completo de POO y PHP");

// Realizar operaciones: agregar estudiantes al curso
$cursoPHP->inscribirEstudiante($estudiante1);
$cursoPHP->inscribirEstudiante($estudiante2);

// Mostrar resultados en el navegador
echo "<h1>Detalles del Curso</h1>";
echo "<p><strong>Título:</strong> " . $cursoPHP->getTitulo() . "</p>";
echo "<p><strong>Descripción:</strong> " . $cursoPHP->getDescripcion() . "</p>";

echo "<h3>Estudiantes Inscritos:</h3>";
echo "<ul>";
foreach ($cursoPHP->listarEstudiantes() as $alumno) {
    echo "<li>" . $alumno->obtenerDetalles() . "</li>";
}
echo "</ul>";
?>
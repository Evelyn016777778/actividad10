<?php
// Datos de conexión a MySQL
$host = 'localhost';
$dbname = 'sistema_cursos';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Operación de Inserción (INSERT)
    $nombreNuevo = "Evelyn Rubí";
    $correoNuevo = "evelyn@example.com";

    $stmtInsert = $pdo->prepare("INSERT INTO estudiantes (nombre, correo) VALUES (:nombre, :correo)");
    $stmtInsert->execute(['nombre' => $nombreNuevo, 'correo' => $correoNuevo]);
    echo "<p>¡Estudiante guardado en la base de datos con éxito!</p>";

    // Operación de Selección (SELECT)
    $stmtSelect = $pdo->query("SELECT * FROM estudiantes");
    $estudiantesBD = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);

    echo "<h3>Lista de Estudiantes desde MySQL:</h3><ul>";
    foreach ($estudiantesBD as $est) {
        echo "<li>ID: {$est['id']} - Nombre: {$est['nombre']} - Correo: {$est['correo']}</li>";
    }
    echo "</ul>";

} catch (PDOException $e) {
    echo "Error de conexión: " . $e.getMessage();
}
?>
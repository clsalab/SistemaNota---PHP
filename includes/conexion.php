<?php

$host = 'localhost';
$user = 'root';
$db = "sistema-escolar";
$pass = '';

try {
    $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pass);

    // Configurar el modo de error para que PDO lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    // Capturar cualquier error de conexión y mostrar un mensaje de error
    echo "Error de conexión a la base de datos: " . $e->getMessage();
    die(); // Detener la ejecución del script si la conexión falla
}

// Consulta de prueba para verificar la conexión y ejecución exitosa de consultas
try {
    // Ejecutar una consulta simple para verificar la conexión
    $stmt = $pdo->query("SELECT * FROM usuarios");
    echo "Consulta ejecutada correctamente.";
} catch (PDOException $e) {
    // Capturar cualquier error al ejecutar la consulta
    echo "Error al ejecutar la consulta: " . $e->getMessage();
    die(); // Detener la ejecución del script si hay un error en la consulta
}
?>

<?php
$port = 1433;
$serverName = "dozitp.database.windows.net," . $port;
$database = "Migracion_de_mysql";
$userName = "student";
$password = "admin1234?";

try {
    $conn = new PDO("sqlsrv:server = $serverName; Database = $database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

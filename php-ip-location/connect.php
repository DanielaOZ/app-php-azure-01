<?php
$port = 1433;
$servername = "dozitp.database.windows.net"; . $port;
$database = "Migracion_de_mysql";
$username = "student";
$password = "admin1234?)";

try {
 // $conn = new PDO("mysql:host=$servername;dbname=world", $username, $password);
  $conn = new PDO("sqlsrv:server=$servername; Database = $database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

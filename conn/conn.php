<?php
$servername = "localhost";
$username = "usuario_db_aqui";
$password = "senha_db_aqui";
$dbname = "nome_db_aqui";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

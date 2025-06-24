<?php
$servername = "localhost";
$username = "asas9030_comentarios";
$password = "18061976asas";
$dbname = "asas9030_comentarios";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

<?php

$host = "localhost";
$user = "PHPeSQL";
$pass = "123321";
$db = "Agenda";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $error = $e->getMessage();
    echo "Error: $error";
}

?>
<?php
date_default_timezone_set('Asia/Kolkata');
$host = "localhost";
$user = "root";
$pass = "";
$database = "moditech";

$mysqli = new mysqli($host, $user, $pass, $database);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
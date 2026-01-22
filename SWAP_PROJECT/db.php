<?php
$host = "localhost";
$dbname = "xsstest";
$username = "root";
$password = "";

// PDO options for security
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $db = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        $options
    );
} catch (PDOException $e) {
    die("Database connection failed");
}

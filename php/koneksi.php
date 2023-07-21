<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Add your database connection details
$host = 'localhost';
$dbname = 'userdb';
$username = 'root';
$password = '';

// Connect to the database
$koneksiDB = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($koneksiDB, $username, $password);

?>
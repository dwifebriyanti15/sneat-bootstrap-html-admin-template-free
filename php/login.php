<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Add your database connection details
/*$host = 'sql112.infinityfree.com';
$dbname = 'if0_34571156_userdb';
$username = 'if0_34571156';
$password = 'Y2WGLLVITtJ';
*/
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
$pdo = new PDO($koneksiDB, $username, $password, $options);

// Cek jka login form di submit oleh user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mencocokkan database jika inputan user sama denan database yang tersimpan
    $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'password' => $password]);

    if ($stmt->rowCount() > 0) {
        echo "Login berhasil!";
    } else {
        echo "Username atau password yang Anda masukkan salah!.";
    }
}
// Menutup koneksi database
$pdo = null;
?>

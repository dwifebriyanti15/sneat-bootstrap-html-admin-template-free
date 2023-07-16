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
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $username, $password, $options);

// Mengecek form register di isi atau tidak
// kalau di isi dengan benar maka lanjut
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasiPassword = $_POST['konfirmasi_password'];

    // Validasi password konfirmasi apakah sama
    if ($password !== $konfirmasiPassword) {
        echo "Password Konfirmasi tidak cocok.";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // mengecek database apakah data yang dimasukkan tidak ada error dan duplikat 
    // sehingga dapat diterima oleh database.
    $sql = "SELECT * FROM user WHERE username = :username OR email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'email' => $email]);

    if ($stmt->rowCount() > 0) {
        echo "Username atau Email sudah terdaftar";
        exit;
    }

    // Menyimpan data user ke dalam database pusat
    $sql = "INSERT INTO user (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'email' => $email, 'password' => $hashedPassword]);
    
    
    $login = "login.html";
    echo 'Berhasil Mendaftar! Silahkan <a href="' . $login . '">Login</a>';


}
// Menutup koneksi
$pdo = null;
?>

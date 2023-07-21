<?php
include('koneksi.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
// Mengecek form register di isi atau tidak
// kalau di isi dengan benar maka lanjut
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama = $_POST['nama']; 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasiPassword = $_POST['konfirmasi_password'];
    $role = $_POST['role'];
    // Validasi password konfirmasi apakah sama
    if ($password !== $konfirmasiPassword) {
        echo "Password Konfirmasi tidak cocok.";
        exit;
    }

    // Hash the password using password_hash()
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username or email is already registered
    $sql = "SELECT * FROM user WHERE username = :username OR email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'email' => $email]);

    if ($stmt->rowCount() > 0) {
        echo "Username atau Email sudah terdaftar";
        exit;
    } else {
        // Insert the new user data into the database
        $save = "INSERT INTO user (nama, username, email, password, role) VALUES (:nama,:username, :email, :password, :role)";
        $stmt = $pdo->prepare($save);
        $stmt->execute(['nama' => $nama, 'username' => $username, 'email' => $email, 'password' => $hashedPassword, 'role' => $role]);

        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        header("Location: berhasildaftar.php");
    }
    exit();
}
// Menutup koneksi
$pdo = null;
?>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Buat Akun</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,weight@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">

                  <span class="app-brand-text demo text-body fw-bolder"> DIAGNOSTIK SISWA ONLINE</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2"></h4>
              <p class="mb-4"></p>

              <form id="formAuthentication" class="mb-3" action="register.php" method="POST">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input 
                     type="text"
                     class="form-control"
                     id="nama"
                     name="nama"
                     placeholder="Masukkan nama kamu"
                     autofocus required/>
                </div>
          
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    autofocus required/>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Konfirmasi Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="konfirmasi_password"
                      class="form-control"
                      name="konfirmasi_password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <script>
                  var email = document.querySelector('input[name="username"]');
                  email.addEventListener("invalid", function(){
                      this.setCustomValidity('');
                         if (!this.validity.valid) {
                            this.setCustomValidity('username tidak boleh kosong & harus berisi 4-18 karakter');  
                         }
                         else (this.setCustomValidity); {
                            this.setCustomValidity('');
                         }
                  })
                  
                  var password = document.querySelector('input[name="password"]');
                  password.addEventListener("invalid", function(){
                      this.setCustomValidity('');
                        if (!this.validity.valid) {
                           this.setCustomValidity('password tidak boleh kosong');
                        }
                  });
                </script>
                Pilih Role kamu
                <br>
                <input type="radio" name="role" id="role" value="guru" required> Guru
                <br>
                <input type="radio" name="role" id="role" value="siswa" required> Siswa
                <button class="btn btn-primary d-grid w-100">Daftar</button>
              </form>
              
              <p class="text-center">
                <span>Sudah punya akun?</span>
                <a href="login.php">
                  <span>Masuk.</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

<?php include('koneksi.php');
error_reporting(E_ALL);
ini_set('display_errors', true);

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

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
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

    <script src="../assets/js/config.js"></script>
  </head>
  <body>
    <div class="text-center" style="margin-top: 20%;">
        <?php 
        $waktu = 1;
        echo "<div class='text-primary' style='font-size: 40px;'>Data yang masukkan Salah</div>
        <div style='font-size: 20px;'>Sedang mengarahkan ke halaman login dalam <b>
        <span class='text-danger' id='waktu'".$waktu."
        Jika tidak otomatis mendirect silahkan klik tombol dibawah.
        <div> <a href=".'login.php'."><button class='btn btn-primary'>Login</button></a></div>"
        ?>
    <script>
  // waktu hitung mundur dengan javascript
  var countdown = <?php echo $waktu; ?>;
  var redirectURL = "<?php echo 'login.php'; ?>";

  function updateCountdown() {
    var countdownElement = document.getElementById("waktu");
    countdownElement.innerText = countdown;
    countdown--;

    if(countdown < 0 ) {
        window.location.href =redirectURL;
    }else{
        setTimeout(updateCountdown, 1000) //akan mengganti angka setiap 1000ms atau 1 detik
    }
  }
updateCountdown();
</script>
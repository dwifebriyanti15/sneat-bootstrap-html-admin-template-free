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

  // Check if the login form is submitted by the user
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $kembali  = "../php/login.php";
  $role = "SELECT role FROM user WHERE username = :username";
  // Check if the user input matches the database records
  $check = "SELECT * FROM user WHERE username = :username AND password = :password";
  $stmt = $pdo->prepare($check);
  $stmt->execute(['username' => $username, 'password' => $password]);
  
  if ($stmt->rowCount() > 0) {
      session_start();
      $stored_pw = $row['password'];

      if (password_verify($password, $stored_pw)) {
         
         echo "Berhasil masuk<br> Selamat datang'.$username.'";
         header("Location: ../index.php");
         exit();
         } else {
         echo "Username atau password yang Anda masukkan salah!";
         echo "kembali ke <a href='" .$kembali."'>Login<a/>";
      }
  }   
}
$pdo = null;
?>

<html
  lang="en"
  class="light-style layout-menu-fixed"
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

    <title>Tugas Siswa</title>

    <meta name="description" content="" />

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

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>
    <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->
  
          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
  
                <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
              </a>
  
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>
  
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item">
                <a href="index.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>
  
              
  
              <li class="menu-item">
                <a href="materi.php" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx-box"></i>
                  <div>Materi</div>
                </a>

                <li class="menu-item">
                <a href="profil.php" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div>Akun Saya</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="pengaturan.php" class="menu-link">
                      <div>Edit profil</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="" class="menu-link">
                      <div data-i18n="Input groups">Logout</div>
                    </a>
                  </li>
                </ul>
              </li>
              <img src="../assets/img/default.png" alt="">
          </aside>
          <!-- / Menu -->
  
          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->
  
            <nav
              class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
              id="layout-navbar"
            >
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="bx bx-menu bx-sm"></i>
                </a>
              </div>
  
              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                  <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input
                      type="text"
                      class="form-control border-0 shadow-none"
                      placeholder="Cari sesuatu..."
                      aria-label="Search..."
                    />
                  </div>
                </div>
                <!-- /Search -->
  
                <ul class="navbar-nav flex-row align-items-center ms-auto">
  
                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="../assets/img/default.png" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="../assets/img/default.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                          <div class="flex-grow-1">
                              <span class="fw-semibold d-block"><?php echo $nama; ?></span>
                              <small class="text-muted"><?php echo $role; ?></small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="bx bx-user me-2"></i>
                          <span class="align-middle">Profil Saya</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="bx bx-cog me-2"></i>
                          <span class="align-middle">Pengaturan Akun</span>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Keluar</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
                </ul>
              </div>
            </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <style>
              .jawabanUser{
                background-color: #0ed79b;
              }
            </style>
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Siswa /</span> Latihan Tugas</h4>

                        <!-- Text alignment -->
                        <h5 class="pb-1 mb-4">Kerjakan dan jawab pertanyaan berikut dengan benar!</h5>
                        <body>
                          <div class="col-md-6 col-lg-4">
                            <div class="card mb-3">
                              <div class="card-body">
                                <div id="questionContainer">
                                  <h5 class="card-title">Pilihan Ganda.</h5>
                                  <p class="card-text">1-10</p>
                                  <div id="question1">
                                    <!-- Question 1 HTML code -->
                                    <h4>1. What is the capital of France?</h4>
                                    <button onclick="selectAnswer('A', 1)">A) Paris</button>
                                    <button onclick="selectAnswer('B', 1)">B) London</button>
                                    <button onclick="selectAnswer('C', 1)">C) Berlin</button>
                                    <button onclick="selectAnswer('D', 1)">D) Rome</button>
                                  </div>
                                  <div id="question2" style="display: none;">
                                    <!-- Question 2 HTML code -->
                                    <h4>2. What is the capital of France?</h4>
          
                                    <button onclick="selectAnswer('A', 2)">A) Venus</button>
                                    <button onclick="selectAnswer('B', 2)">B) Mars</button>
                                    <button onclick="selectAnswer('C', 2)">C) Jupiter</button>
                                    <button onclick="selectAnswer('D', 2)">D) Saturn</button>
                                  </div>
                                  <div id="question3" style="display: none;">
                                    <!-- Question 3 HTML code -->
                                    <h4>3. What is the capital of France?</h4>
                                    <button onclick="selectAnswer('A', 3)">A) Vincent van Gogh</button>
                                    <button onclick="selectAnswer('B', 3)">B) Leonardo da Vinci</button>
                                    <button onclick="selectAnswer('C', 3)">C) Pablo Picasso</button>
                                    <button onclick="selectAnswer('D', 3)">D) Salvador Dali</button>
                                  </div>
                                  <div id="question4" style="display: none;">
                                    <!-- Question 3 HTML code -->
                                    <h4>4. What is the capital of France?</h4>
                                    <button onclick="selectAnswer('A', 4)">A) Vincent van Gogh</button>
                                    <button onclick="selectAnswer('B', 4)">B) Leonardo da Vinci</button>
                                    <button onclick="selectAnswer('C', 4)">C) Pablo Picasso</button>
                                    <button onclick="selectAnswer('D', 4)">D) Salvador Dali</button>
                                  </div>
                                  <div id="question5" style="display: none;">
                                    <!-- Question 3 HTML code -->
                                    <h4>5. What is the capital of France?</h4>
                                    <button onclick="selectAnswer('A', 5)">A) Vincent van Gogh</button>
                                    <button onclick="selectAnswer('B', 5)">B) Leonardo da Vinci</button>
                                    <button onclick="selectAnswer('C', 5)">C) Pablo Picasso</button>
                                    <button onclick="selectAnswer('D', 5)">D) Salvador Dali</button>
                                  </div>
                                  <div id="question6" style="display: none;">
                                    <!-- Question 3 HTML code -->
                                    <h4>6. What is the capital of France?</h4>
                                    <button onclick="selectAnswer('A', 6)">A) Vincent van Gogh</button>
                                    <button onclick="selectAnswer('B', 6)">B) Leonardo da Vinci</button>
                                    <button onclick="selectAnswer('C', 6)">C) Pablo Picasso</button>
                                    <button onclick="selectAnswer('D', 6)">D) Salvador Dali</button>
                                  </div>
                                  <div id="question7" style="display: none;">
                                    <!-- Question 3 HTML code -->
                                    <h4>7. What is the capital of France?</h4>
                                    <button onclick="selectAnswer('A', 7)">A) Vincent van Gogh</button>
                                    <button onclick="selectAnswer('B', 7)">B) Leonardo da Vinci</button>
                                    <button onclick="selectAnswer('C', 7)">C) Pablo Picasso</button>
                                    <button onclick="selectAnswer('D', 7)">D) Salvador Dali</button>
                                  </div>
                                  <div id="question8" style="display: none;">
                                    <!-- Question 3 HTML code -->
                                    <h4>8. </h4>
                                    <button onclick="selectAnswer('A', 8)">A) Vincent van Gogh</button>
                                    <button onclick="selectAnswer('B', 8)">B) Leonardo da Vinci</button>
                                    <button onclick="selectAnswer('C', 8)">C) Pablo Picasso</button>
                                    <button onclick="selectAnswer('D', 8)">D) Salvador Dali</button>
                                  </div>
                                  <div id="question9" style="display: none;">
                                    <!-- Question 3 HTML code -->
                                    <h4>9. Perhatikan gambar berikut!</h4>
                                    <img src="../assets/img/default.png" width="200px" alt="">
                                    <p>dari gambar di atas manakah .....?</p>
                                    <button onclick="selectAnswer('A', 9)">A) Vincent van Gogh</button>
                                    <button onclick="selectAnswer('B', 9)">B) Leonardo da Vinci</button>
                                    <button onclick="selectAnswer('C', 9)">C) Pablo Picasso</button>
                                    <button onclick="selectAnswer('D', 9)">D) Salvador Dali</button>
                                  </div>
                                  <div id="question10" style="display: none;">
                                    <!-- Question 3 HTML code -->
                                    <h4>Question 10</h4>
                                    <p>Who painted the Mona Lisa?</p>
                                    <button onclick="selectAnswer('A', 10)">A) Vincent van Gogh</button>
                                    <button onclick="selectAnswer('B', 10)">B) Leonardo da Vinci</button>
                                    <button onclick="selectAnswer('C', 10)">C) Pablo Picasso</button>
                                    <button onclick="selectAnswer('D', 10)">D) Salvador Dali</button>
                                  </div>
                                </div>
                              </div>
                              <button onclick="submitAnswers()">Kumpulkan Jawaban</button>
                            </div>
                                <div id="resultContainer" style="display: none;">
                                  <!-- Result HTML code -->
                                  <h4>Detail Nilai</h4>
                                  <div id="hasil"></div>
                                
                            </div>
                          </div>
                          <script>
                            var userAnswers = [];
                            var currentQuestion = 1;
                            var totalScore = 0;
                            var category = '';
                        
                            function selectAnswer(answer, questionNumber) {
                              userAnswers.push({ question: questionNumber, answer: answer });
                        
                              var currentQuestionElement = document.getElementById('question' + questionNumber);
                              currentQuestionElement.style.display = 'none';
                        
                              if (questionNumber === 10) {
                              } else {
                                var nextQuestionElement = document.getElementById('question' + (questionNumber + 1));
                                nextQuestionElement.style.display = 'block';
                              }
                            }
                        
                            function calculateScore() {
                              // Calculate the total score based on the user's answers
                              // Here, we assume the correct answers for each question
                              var correctAnswers = [
                                { question: 1, answer: 'A' },
                                { question: 2, answer: 'A' },
                                { question: 3, answer: 'A' },
                                { question: 4, answer: 'A' },
                                { question: 5, answer: 'A' },
                                { question: 6, answer: 'A' },
                                { question: 7, answer: 'A' },
                                { question: 8, answer: 'A' },
                                { question: 9, answer: 'A' },
                                { question: 10, answer: 'A' },
                                
                              ];
                        
                              totalScore = 0;
                        
                              for (var i = 0; i < userAnswers.length; i++) {
                                var userAnswer = userAnswers[i];
                        
                                var correctAnswer = correctAnswers.find(function(item) {
                                  return item.question === userAnswer.question;
                                });
                        
                                if (correctAnswer && correctAnswer.answer === userAnswer.answer) {
                                  totalScore++;
                                }
                              }
                            }
                            
                            function submitAnswers() {
                              if (userAnswers.length === 10) {
                                var confirmSubmit = confirm('Kamu yakin ingin ingin mengupload jawaban?');
                        
                                if (confirmSubmit) {
                                  calculateScore();
                                  showUserCategory();
                                  var questionContainer = document.getElementById('questionContainer');
                                  questionContainer.style.display = 'none';
                        
                                  var resultContainer = document.getElementById('resultContainer');
                                  resultContainer.style.display = 'block';
                                }
                              } else {
                                alert('Pastikan Kamu sudah menjawab seluruh soal,cek kembali!');
                              }
                            }
                        
                            function showUserCategory() {
                              var resultText = document.getElementById('hasil');
                              resultText.innerHTML = '';
                        
                              // Display the total score and user category
                              var totalScorePercentage = Math.round((totalScore / 10) * 100);
                        
                              if (totalScorePercentage >= 100) {
                                category = 'C6';
                                pesan    = 'Wahh kamu keren bisa jawab semua soal dengan tepat. Selamat Yaa'
                              } else if (totalScorePercentage >= 80) {
                                category = 'C5';
                                pesan    = ''
                              } else if (totalScorePercentage >= 60) {
                                category = 'C4';
                                pesan    = 'Nilai mu kurang memuaskan, kamu harus banyak belajar nih '
                              } else if (totalScorePercentage >= 40) {
                                category = 'C3';
                                pesan    = 'Yahh.. Nilai mu dibawah 40 nih. Belajar lagi yaa..'
                              } else if(totalScorePercentage >= 20) {
                                category = 'C2';
                                pesan    = 'Yahh.. Nilai mu dibawah 40 nih. Belajar lagi yaa..'
                              } else {
                                category = 'C1';
                                pesan    = 'Yahh.. Nilai mu dibawah 40 nih. Belajar lagi yaa..';
                            
                            }
                              var scoreText = document.createElement('p');
                              scoreText.textContent = 'Total Nilai Kamu: ' + totalScorePercentage + '%';
                              resultText.appendChild(scoreText);
                        
                              var categoryText = document.createElement('p');
                              categoryText.textContent = 'Kategori Penilaian: ' + category;
                              resultText.appendChild(categoryText);

                              var textKomentar = document.createElement('p');
                              textKomentar.textContent = 'Komentar: ' + pesan;
                              resultText.appendChild(textKomentar);
                          }
                          </script>
                </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/masonry/masonry.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
$pdo = null
?>
<!DOCTYPE html>

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
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Akun Saya</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div>Edit profil</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="login.html" class="menu-link">
                    <div data-i18n="Input groups">Logout</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Tugas Siswa</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div>Nilai Siswa</div>
                  </a>
                </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div style="position: fixed;" class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
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
                    aria-label="Cari sesuatu..."
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
                            <span class="fw-semibold d-block">$nama</span>
                            <small class="text-muted">$role</small>
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
                      <a class="dropdown-item" href="auth-login-basic.html">
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
          <div class="content-wrapper" >
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Siswa /</span> Nilai Siswa</h4>
              <div class="card">
                <h5 class="card-header">Daftar nilai berdasarkan kategori</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama Siswa</th>
                        <th>Total Nilai</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr class="table-default">
                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Siswa 1</strong></td>
                        <td>$nilai</td>
                        <td><span class="badge bg-label-primary me-1">C4</span></td>
                        <td>
                          <div class="dropdown">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="table-active">
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Siswa 2</strong></td>
                        <td>$nilai</td>
                        <td><span class="badge bg-label-success me-1">C6</span></td>
                        <td>
                          <div class="dropdown">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="table-primary">
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Siswa 3</strong></td>
                        
                        <td>$nilai</td>
                        <td><span class="badge bg-label-primary me-1">C2</span></td>
                        <td>
                          <div class="dropdown">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="table-secondary">
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Siswa 4</strong></td>
                        <td>$nilai</td>
                        <td><span class="badge bg-label-info me-1">C6</span></td>
                        <td>
                            <div>
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="table-success">
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Siswa 5</strong>
                        </td>
                        <td>$nilai</td>
                        <td><span class="badge bg-label-warning me-1">C4</span></td>
                        <td>
                          <div class="dropdown">
                           
                            <div>
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr class="table-warning">
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Siswa 6</strong></td>
                        <td>$nilai</td>
                        <td><span class="badge bg-label-info me-1">C6</span></td>
                        <td>
                          <div class="dropdown">
                            
                            <div>
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="table-info">
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Siswa 7</strong>
                        </td>
                        <td>$nilai</td>
                        
                        <td><span class="badge bg-label-warning me-1">C4</span></td>
                        <td>
                          
                            <div>
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <hr class="my-5" />
              <div class="card">
                <h5 class="card-header">Daftar Nilai Siswa</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama Siswa</th>              
                        <th>Total Nilai</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Siswa</strong></td>
                        <td>Siswa</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div>
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Siswa</strong></td>
                        <td>Siswa</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div>
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Siswa</strong></td>                        <td>Siswa</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div>
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Siswa</strong></td>
                        <td>Siswa</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div>
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Siswa</strong></td>
                                      
                        <td>Siswa</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div>
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
               
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
    <!-- / Layout wrapper -->

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

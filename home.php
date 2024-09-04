<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>หน้าแรก</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />
  <style>
    .c-item {
      height: 300px;
    }

    .c-img {
      height: 100%;
      object-fit: cover;
    }

    .c-icon {
      top: -11px;
      right: 0;
    }
  </style>
</head>

<body id="page-top">
  <?php include('assets/Components/navbar.php') ?>

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include('assets/Components/sidebar.php') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">
          <!-- Page Heading -->
          <div class="text-center">

            <h3 class="text-dark">หัวข้อข่าวสาร</h3>
          </div>
          <div id="hero-slide" class="carousel slide mt-5 position-relative">
            <div class="carousel-inner">
              <div class="carousel-item active c-item">
                <img src="https://images.unsplash.com/photo-1723744895444-e94a0e1dd378?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 c-img" alt="slide 1">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>

              </div>
              <div class="carousel-item c-item">
                <img src="https://images.unsplash.com/photo-1723744895444-e94a0e1dd378?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 c-img" alt="slide 2">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item c-item">
                <img src="https://images.unsplash.com/photo-1723744895444-e94a0e1dd378?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 c-img" alt="slide 3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>


              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

            <div class="position-absolute c-icon">
              <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-three-dots position-absolute c-icon"></i>
              </a>
              <ul class="dropdown-menu position-absolute ">
                <li><a class="dropdown-item" href="#">ซ่อน</a></li>
                <li><a class="dropdown-item" href="#">โชว์</a></li>
              </ul>
            </div>
          </div>

          <div class="mt-5">
            <a href=""><button type="button" class="btn btn-primary">
                ดาวน์โหลดไฟล์
              </button></a>
          </div>
        </div>

        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include('assets/Components/footer.php') ?>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>





  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
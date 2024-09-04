<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ข่าวสาร</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Custom fonts for this template-->
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
  <?php include('../../assets/Components/navbar.php') ?>

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include('../../assets/Components/sidebar.php') ?>
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
          <div class="text-center mb-3">

            <h3 class="text-dark">หัวข้อข่าวสาร</h3>

          </div>
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">รูป</th>
                <th scope="col">หัวข้อข่าวสาร</th>
                <th scope="col">วันที่</th>
                <th scope="col">ดำเนินการ</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include('../../database/connect.php');
              $sql = "SELECT * FROM news";
              $result = $objCon->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
              ?>
                  <tr>
                    <td><?= $row['N_ID'] ?></td>
                    <td><img src="https://images.unsplash.com/photo-1721332150382-d4114ee27eff?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" style="width: 100%; height: 33px; object-fit: cover;"></td>
                    <td><?= $row['N_NAME'] ?></td>
                    <td>
                      <?php
                      $date = date_create($row['N_DATE']);
                      echo date_format($date, 'd-m-');
                      echo date_format($date, 'Y') + 543;
                      ?>
                    </td>
                    <td>
                      <a href="edit.php?id=<?= $row['N_ID'] ?>"><button type="button" class="btn btn-warning">แก้ไข</button></a>
                      <a href="../../../backend/new/delete.php?id=<?= $row['N_ID'] ?>"><button type="button" class="btn btn-danger">ลบ</button></a>
                    </td>
                  </tr>

                <?php } ?>
              <?php
              } else {
              }

              $objCon->close();

              ?>
            </tbody>
          </table>

          <div class="mt-5">
            <div class="d-flex mb-3">
              <div class="me-auto p-2"> <a href="add.php"><button type="button" class="btn btn-primary">
                    ดาวน์โหลดไฟล์
                  </button></a>
              </div>


            </div>
          </div>
        </div>

        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include('../../assets/Components/footer.php') ?>
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
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../assets/js/demo/chart-area-demo.js"></script>
  <script src="../../assets/js/demo/chart-pie-demo.js"></script>
</body>

</html>
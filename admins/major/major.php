<?php session_start(); ?>
<?php
include('../../database/connect.php');
$sql = "SELECT * FROM major";
$result = $objCon->query($sql);
$name = $_GET['name'] ?? NULL;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>ข้อมูลสาขา</title>
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


                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">
                    <!-- Page Heading -->
                    <div class="text-center mb-5">
                        <p class="text-dark">ข้อมูลสาขา</ย>
                    </div>
                    <form action="../../backend/major/search.php" method="post">
                        <div class="row">
                            <div class="col-md-6 ">
                                <label for="inputmajor" class="col-form-label">รหัสสาขา</label>
                                <input type="text" id="inputmajor" class="form-control">
                            </div>
                            <div class="col-md-6 ">
                                <label for="inputmajor" class="col-form-label">ชื่อสาขาของคณะวิทยาการจัดการ</label>
                                <select name="id" class="form-select" aria-label="Default select exampled">
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <option value="<?= $row['MAJOR_ID'] ?>"><?= $row['MAJOR_NAME'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>



                        <div class="d-flex align-items-end flex-column mb-auto " style="height: 200px;">
                            <div class="p-2">01 วิชาเอกการจัดการทั่วไป</div>
                            <div class="p-2">02 วิชาเอกการตลาด</div>
                            <div class="p-2">03 วิชาเอกบริหารทรัพยากรณ์</div>
                        </div>

                        <button type="submit" class="btn btn-primary">ค้นหา</button>


                        <div class="d-flex mb-3">
                            <div class="me-auto p-2">
                            </div>
                            <div class="p-2"><a href=""><button type="button" class="btn btn-warning">
                                        บันทึก
                                    </button></a></div>
                            <div class="p-2"><a href=""><button type="button" class="btn btn-success">
                                        แก้ไข
                                    </button></a></div>
                            <div class="p-2"><a href=""><button type="button" class="btn btn-danger">
                                        ลบ
                                    </button></a></div>
                        </div>

                    </form>

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
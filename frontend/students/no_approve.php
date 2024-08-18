<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>ตรวจสอบสถานะการอนุมัติ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <?php include('../assets/Components/navbar.php') ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include('../assets/Components/sidebar.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid   text-dark mt-5">
                    <!-- Page Heading -->
                    <div class="row d-flex align-items-center">
                        <div class="col-10 text-center">
                            <p>ข้อมูลสถานที่ฝึกประสบการณ์วิชาชีพ</p>
                        </div>
                        <div class="col-1 text-end">
                            <p>สถานะ</p>
                        </div>
                        <div class="col-1 text-end">
                            <button type="button" class="btn btn-outline-secondary btn-sm p-2" style="font-size: 11px;">ไม่อนุมัติ</button>
                        </div>
                    </div>

                    <div class="container mt-5 ms-4 pt-3 text-dark text-center">
                        <div class="d-flex justify-content-center align-items-end" style="height: 200px;">
                            <div class="col-5">
                                <div class="form-floating mb-3 d-flex ">
                                    <textarea class="form-control text-center  " placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2Disabled">สาเหตุที่ไม่ได้รับการอนุมัติ</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger btn-sm mt-3" type="button">ยืนยัน</button>
                    </div>


                </div>



                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('../assets/Components/footer.php') ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=" scroll-to-top rounded" href="#page-top">
                            <i class="fas fa-angle-up"></i>
                            </a>



                            <!-- Bootstrap core JavaScript-->
                            <script src="../assets/vendor/jquery/jquery.min.js"></script>
                            <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                            <!-- Core plugin JavaScript-->
                            <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

                            <!-- Custom scripts for all pages-->
                            <script src="../assets/js/sb-admin-2.min.js"></script>

                            <!-- Page level plugins -->
                            <script src="../assets/vendor/chart.js/Chart.min.js"></script>

                            <!-- Page level custom scripts -->
                            <script src="../assets/js/demo/chart-area-demo.js"></script>
                            <script src="../assets/js/demo/chart-pie-demo.js"></script>
</body>

</html>
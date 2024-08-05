<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>ข้อมูลส่วนตัวของนักศึกษา</title>
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
                <div class="container-fluid mt-5">
                    <!-- Page Heading -->

                    <div class="container">
                        <form action="">
                            <!-- ข้อมูลส่วนตัวของนักศึกษา -->
                            <div class="card mb-3">
                                <div class="card-header text-center">
                                    ข้อมูลส่วนตัวของนักศึกษา
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="inputEmail4" class="form-label">รหัสนักศึกษา</label>
                                            <input type="text" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="inputPassword4" class="form-label">ชื่อสกุล</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="inputPassword4" class="form-label">รูปนักศึกษา</label>
                                            <input type="text" class="form-control " id="inputPassword4">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputPassword4" class="form-label">รหัสประจำตัวประชาชน</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">กลุ่มเรียน</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputPassword4" class="form-label">ชื่อสาขา</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">เบอร์โทร</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="inputPassword4" class="form-label">อีเมลล์</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputPassword4" class="form-label">ชื่อเล่น</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">วัน/เดือน/ปีเกิด</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="inputPassword4" class="form-label">อายุ</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputPassword4" class="form-label">ปี</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">ศาสนา</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">โรคประจำตัว</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="inputPassword4" class="form-label">บ้านเลขที่</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputPassword4" class="form-label">ถนน</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">ตำบล</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">อำเภอ</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="inputPassword4" class="form-label">จังหวัด</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">รหัสไปรษณีย์</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">ผู้เกี่ยวข้อง</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputPassword4" class="form-label">เบอร์โทรผู้เกี่ยวข้อง</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ข้อมูลด้านการศึกษา -->
                            <div class="card mb-3">
                                <div class="card-header text-center">
                                    ข้อมูลด้านการศึกษา
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="inputEmail4" class="form-label">ชื่อสถานศึกษา</label>
                                            <input type="text" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="inputPassword4" class="form-label">ระดับการศึกษา</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6 mb-3 ">
                                            <label for="inputPassword4" class="form-label">คณะ</label>
                                            <input type="text" class="form-control " id="inputPassword4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">สาขาวิชา</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputPassword4" class="form-label">วิชาเอก</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="inputPassword4" class="form-label">สาขาวิชา</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputPassword4" class="form-label">วิชาเอก</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="inputPassword4" class="form-label">เกรดเฉลี่ยสะสม</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputPassword4" class="form-label">อาจารย์ที่ปรึกษา</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">เบอร์โทรอาจารย์ที่ปรึกษา</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!-- ข้อมูลด้านทักษะต่างๆ -->
                            <div class="card mb-3">
                                <div class="card-header text-center">
                                    ข้อมูลด้านทักษะต่างๆ
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <p>ข้อมูลด้านทักษะต่างๆ</p>
                                        <p></p>
                                        <button type="button">print</button>
                                    </div>

                                    <table class="table mb-3">
                                        <thead>
                                            <tr>
                                                <th scope="col" rowspan="2" class="text-center">ภาษา</th>
                                                <th scope="col " colspan="2" class="text-center">การฟัง</th>
                                                <th scope="col " colspan="3" class="text-center">การเขียน</th>
                                                <th scope="col " colspan="3" class="text-center">การอ่าน</th>
                                            </tr>
                                            <tr>
                                                <th scope="col" rowspan="2" class="text-center">ภาษา</th>

                                                <th scope="col">ดีมาก</th>
                                                <th scope="col">พอใช้</th>
                                                <th scope="col">ดีมาก</th>
                                                <th scope="col">ปานกลาง</th>
                                                <th scope="col">พอใช้</th>
                                                <th scope="col">ดีมาก</th>
                                                <th scope="col">ปานกลาง</th>
                                                <th scope="col">พอใช้</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ภาษาอังกฤษ</th>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ภาษาไทย</th>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ภาษา...</th>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <p class="mb-3">ความสามารถพิเศษ</p>
                                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                        <div class="col">
                                            <div class="p-3"><label for="inputEmail4" class="form-label">พิมดีด</label>
                                                <input type="checkbox" id="inputEmail4">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3"><label for="inputPassword4" class="form-label">ได้</label>
                                                <input type="checkbox" id="inputPassword4">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3"><label for="inputPassword4" class="form-label">ไม่ได้</label>
                                                <input type="checkbox" id="inputPassword4">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3">
                                                <div class="row">
                                                    <p class="col-sm-8">ภาษาไทย</p>
                                                    <input type="text" class="col-sm-4 form-control" id="inputPassword4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3">
                                                <div class="row">
                                                    <p class="col-sm-8">ภาษาอังกฤษ</p>
                                                    <input type="text" class="col-sm-4 form-control" id="inputPassword4">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row ">
                                       

                                      
                                        <div class="row md-5 mb-3">
                                            <label for="inputPassword4" class=" form-label">โปรแกรมคอมพิวเตอร์</label>
                                            <textarea class="form-control col-md-6" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="inputEmail4" class="form-label">ยากพาหนะ</label>
                                            <input type="checkbox" id="inputEmail4">
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="inputPassword4" class="form-label">รถยนต์</label>
                                            <input type="checkbox" id="inputPassword4">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword4" class="form-label">รถจักรยานยนต์</label>
                                            <input type="checkbox" id="inputPassword4">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputPassword4" class="form-label">มี</label>
                                            <input type="checkbox" id="inputPassword4">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputPassword4" class="form-label">ไม่มี</label>
                                            <input type="checkbox" id="inputPassword4">
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    <a class="scroll-to-top rounded" href="#page-top">
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
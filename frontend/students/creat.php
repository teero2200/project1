<?php session_start(); ?>
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
    <style>
        .file-input-box {
            border: 2px dashed #ccc;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            width: 150px;
            /* กำหนดความกว้าง */
            height: 150px;
            /* กำหนดความสูง */
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .file-input-box img {
            max-width: 100%;
            max-height: 100%;
            /* กำหนดให้รูปภาพมีขนาดไม่เกินกล่อง */
            display: none;
        }
    </style>


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
                                    <div class="row ">
                                        <div class="col-md-4 mb-3">
                                            <label for="inputEmail4" class="form-label">รหัสนักศึกษา</label>
                                            <input type="text" class="form-control mb-3" id="inputEmail4">
                                            <label for="inputPassword4" class="form-label">รหัสประจำตัวประชาชน</label>
                                            <input type="text" class="form-control mb-3" id="inputPassword4">
                                            <label for="inputPassword4" class="form-label">ชื่อสาขา</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="inputPassword4" class="form-label">ชื่อสกุล</label>
                                            <input type="text" class="form-control mb-3" id="inputPassword4">
                                            <label for="inputPassword4" class="form-label">กลุ่มเรียน</label>
                                            <input type="text" class="form-control mb-3" id="inputPassword4">
                                            <label for="inputPassword4" class="form-label">เบอร์โทร</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4  text-center">
                                            <label for="formFile" class="form-label">รูปนักศึกษา</label>
                                            <div class="file-input-box" id="fileInputBox">
                                                <img id="previewImage" src="" alt="Preview">
                                                <p id="uploadText">เลือกรูปภาพ</p>
                                                <input type="file" id="fileInput" class="form-control-file d-none">
                                            </div>
                                            <div class="mt-3">
                                                <a href="#" class="btn btn-danger btn-sm me-2 ">แนบไฟล์</a> <a href="#" class="btn btn-dark btn-sm">แก้ไข</a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="inputPassword4" class="form-label">อีเมลล์</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">ชื่อเล่น</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">วัน/เดือน/ปีเกิด</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="inputPassword4" class="form-label">อายุ</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword4" class="form-label">ปี</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword4" class="form-label">ศาสนา</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword4" class="form-label">โรคประจำตัว</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="inputPassword4" class="form-label">บ้านเลขที่</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword4" class="form-label">ถนน</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword4" class="form-label">ตำบล</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-3">
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
                                        <div class="col-md-4 mb-3">
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
                                        <button type="button" class="btn btn-primary btn-sm">print</button>
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
                                    <div class="row mb-3">
                                        <div class="col-12 ">
                                            <div class="p-4">
                                                <label for="inputEmail4" class="form-label me-3">พิมดีด</label>
                                                <input type="checkbox" class="me-2" id="inputEmail4">
                                                <label for="inputPassword4" class="form-label me-2">ได้</label>
                                                <input type="checkbox" class="me-2" id="inputPassword4">
                                                <label for="inputPassword4" class="form-label me-2">ไม่ได้</label>
                                                <input type="checkbox" id="inputPassword4" class="me-2">
                                                <label for="inputPassword4" class="form-label me-2">ภาษาไทย</label>
                                                <input type="text" id="inputPassword4" class="me-2">
                                                <label for="inputPassword4" class="form-label me-2">ภาษาอังกฤษ</label>
                                                <input type="text" id="inputPassword4">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-auto ms-4">
                                            <label for="inputPassword4" class="form-label">โปรแกรมคอมพิวเตอร์</label>
                                        </div>
                                        <div class="col-6">
                                            <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>



                                <div class="row mt-3">
                                    <div class="col-12 ">
                                        <label for="inputEmail4" class="form-label ms-4 me-2">ยานพาหนะ</label>
                                        <input type="checkbox" class="me-2" id="inputEmail4">
                                        <label for="inputPassword4" class="form-label me-2">รถยนต์</label>
                                        <input type="checkbox" class="me-2" id="inputPassword4">
                                        <label for="inputPassword4" class="form-label me-2">รถจักรยานยนต์</label>
                                        <input type="checkbox" class="me-2" id="inputPassword4">
                                        <label for="inputPassword4" class="form-label me-2">มี</label>
                                        <input type="checkbox" class="me-2" id="inputPassword4">
                                        <label for="inputPassword4" class="form-label me-2">ไม่มี</label>
                                        <input type="checkbox" id="inputPassword4">
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
    <script>
        const fileInput = document.getElementById('fileInput');
        const fileInputBox = document.getElementById('fileInputBox');
        const previewImage = document.getElementById('previewImage');
        const uploadText = document.getElementById('uploadText');

        fileInputBox.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                    uploadText.style.display = 'none'; // ซ่อนข้อความเมื่อรูปภาพถูกอัพโหลด
                }
                reader.readAsDataURL(file);
            }
        });
    </script>


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
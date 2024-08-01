<?php
session_start();
include_once('../database/connect.php');


$strID = $_POST['ID_CN'];
$strPassword = sha1($_POST['password']);
$strSQL = "SELECT * FROM users WHERE ID_CN = '$strID' AND password = '$strPassword'";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);


echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

$_SESSION['ID_CN'] = $objResult['ID_CN'];

if (!$objResult) {
    echo '<script>
    Swal.fire({
        icon: "error",
        title: "เข้าสู่ระบบไม่สำเร็จ",
        text: "กรุณาตรวจสอบข้อมูลใหม่อีกครั้ง",
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location.href = "../frontend/login.php";
    });
    </script>';
} else {

    $_SESSION["id"] = $objResult["id"];
    $_SESSION["name"] = $objResult["name"];
    $_SESSION["email"] = $objResult["email"];
    $_SESSION["role"] = $objResult["role"];

    session_write_close();

    if ($objResult["Status"] == "ADMIN") {
        header("location:admin_page.php");
    } else {
        header("location:../frontend/home.php");
    }
}
mysqli_close($objCon);

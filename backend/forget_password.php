<?php
include_once('../database/connect.php');

// กรอกข้อมูลที่ส่ง
$strEmail = $_POST['email'];
// ค้นหาข้อมูลที่กรอก
$strSQL = "SELECT * FROM users WHERE email = '$strEmail' ";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
$id = $objResult['id'];
// echo $id;



if (!$objResult) {
    echo "Email not found";
} else {
  header("Location: ../frontend/chage_password.php?id=$id");
  exit;
}
mysqli_close($objCon);

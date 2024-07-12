<?php
session_start();
include_once('../database/connect.php');


$strID = $_POST['ST_ID'];
$strPassword = sha1($_POST['ST_PASSWORD']);
$strSQL = "SELECT * FROM student WHERE ST_ID = '$strID' AND ST_PASSWORD = '$strPassword'";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
// print_r($objResult);
// // echo $strEmail;
// die;

if (!$objResult) {
    echo "Username and Password Incorrect!";
} else {
    $_SESSION["ST_ID"] = $objResult["ST_ID"];
    $_SESSION["ST_NAME"] = $objResult["ST_NAME"];
    $_SESSION["ST_EMAIL"] = $objResult["ST_EMAIL"];

    session_write_close();

    if ($objResult["Status"] == "ADMIN") {
        header("location:admin_page.php");
    } else {
        header("location:../frontend/students/home.php");
    }
}
mysqli_close($objCon);

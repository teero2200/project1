<?php
session_start();
include_once('../database/connect.php');


$strID = $_POST['AM_ID'];
$strPassword = sha1($_POST['AM_PASSWORD']);
$strSQL = "SELECT * FROM admin WHERE AM_ID = '$strID' AND AM_PASSWORD = '$strPassword'";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
// print_r($objResult);
// // echo $strEmail;
// die;

if (!$objResult) {
    echo "Username and Password Incorrect!";
} else {

  
    $_SESSION["AM_ID"] = $objResult["AM_ID"];
    $_SESSION["AM_NAME"] = $objResult["AM_NAME"];
    $_SESSION["AM_PASSWORD"] = $objResult["AM_PASSWORD"];

    session_write_close();

    if ($objResult["Status"] == "ADMIN") {
        header("location:admin_page.php");
    } else {
        header("location:../frontend/admins/home.php");
    }
}
mysqli_close($objCon);

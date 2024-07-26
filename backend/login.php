<?php
session_start();
include_once('../database/connect.php');


$strID = $_POST['ID_CN'];
$strPassword = sha1($_POST['password']);
$strSQL = "SELECT * FROM users WHERE ID_CN = '$strID' AND password = '$strPassword'";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
// print_r($objResult);
// // echo $strEmail;
// die;



if (!$objResult) {
    echo "Username and Password Incorrect!";
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

<?php
session_start();
include_once('../database/connect.php');


$strID = $_POST['TC_ID'];
$strPassword = sha1($_POST['TC_PASSWORD']);
$strSQL = "SELECT * FROM teacher WHERE TC_ID = '$strID' AND TC_PASSWORD = '$strPassword'";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
// print_r($objResult);
// // echo $strEmail;
// die;

if (!$objResult) {
    echo "Username and Password Incorrect!";
} else {
    $_SESSION["TC_ID"] = $objResult["TC_ID"];
    $_SESSION["MAJOR_ID"] = $objResult["MAJOR_ID"];
    $_SESSION["TC_NAME"] = $objResult["TC_NAME"];
    $_SESSION["TC_PASSWORD"] = $objResult["TC_PASSWORD"];
    $_SESSION["TC_NUMBER"] = $objResult["TC_NUMBER"];
    $_SESSION["TC_EMAIL"] = $objResult["TC_EMAIL"];

    session_write_close();

    if ($objResult["Status"] == "ADMIN") {
        header("location:admin_page.php");
    } else {
        header("location:../frontend/teachers/home.php");
    }
}
mysqli_close($objCon);

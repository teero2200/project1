<?php
include_once('../database/connect.php');

$id = $_POST['id'];
$strPassword = sha1($_POST['old_password']);
$strNPassword = sha1($_POST['New_password']);
$strCNPassword = sha1($_POST['Cf_New_password']);
$strSQL = "SELECT * FROM users WHERE password = '$strPassword' And id = '$id' ";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
// print_r($objResult);
// // echo $strEmail;
// die;



if (!$objResult) {
  echo "Password Incress";
} elseif ($strNPassword != $strCNPassword) {
  echo "Password Not Match";
} else {
  $strSQL = "UPDATE users SET password = '$strNPassword' WHERE id = '$id' ";
  $objQuery = mysqli_query($objCon, $strSQL);
  header("location: ../frontend/login.php");
  echo "Password Change Successfully";
}
mysqli_close($objCon);

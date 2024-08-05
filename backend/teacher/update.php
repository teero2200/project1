<?php

include('../../database/connect.php');

$id = $_GET['id'];
$ID_IDEN = $_POST['ID_IDEN'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$id_major = $_POST['id_major'];


$sql = "UPDATE `users` SET `ID_IDEN`='$ID_IDEN',`name`='$name' ,email = '$email' , password = '$password' , number = '$number',id_major='$id_major' WHERE `id`=$id";
// echo $sql;

if ($objCon->query($sql) === TRUE) {
 
  header("Location: ../../frontend/admins/teachers/index.php");
} else {
  echo "Error updating record: " . $objCon->error;
}

$objCon->close();

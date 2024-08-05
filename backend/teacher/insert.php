<?php
include_once('../../database/connect.php');

$ID_IDEN = $_POST['ID_IDEN'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$number = $_POST['number'];
$id_major = $_POST['id_major'];

$sql = "INSERT INTO users (ID_IDEN,name,email,password,number,id_major,role) VALUES ('$ID_IDEN','$name','$email','$password','$number','$id_major','teacher');";

if ($objCon->query($sql) === TRUE) {
    // echo "Success";
    // die;
    header("Location: ../../frontend/admins/teachers/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $objCon->error;
}

$objCon->close();

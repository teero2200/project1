<?php
include_once('../../database/connect.php');

$name = $_POST['name'];
$details = $_POST['details'];

  

$sql = "INSERT INTO `news`(`N_NAME`, `N_DETAILS`) VALUES ('$name','$details')";


if ($objCon->query($sql) === TRUE) {
    header("Location: ../../frontend/admins/new/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $objCon->error;
}

$objCon->close();

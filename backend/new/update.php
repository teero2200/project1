<?php

include('../../database/connect.php');

$id = $_GET['id'];
$name = $_POST['name'];
$details = $_POST['details'];


$sql = "UPDATE `news` SET `N_NAME`='$name',`N_DETAILS`='$details' WHERE `N_ID`=$id";
// echo $sql;

if ($objCon->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $objCon->error;
}

$objCon->close();

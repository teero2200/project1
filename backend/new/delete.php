<?php
include_once('../../database/connect.php');

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM news WHERE N_ID = $id";

if ($objCon->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $objCon->error;
}

$objCon->close();
?>
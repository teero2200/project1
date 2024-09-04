<?php
include_once('../../database/connect.php');

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM users WHERE id = $id";

if ($objCon->query($sql) === TRUE) {
    header("Location: ../frontend/admins/teachers/index.php");
} else {
    echo "Error deleting record: " . $objCon->error;
}

$objCon->close();

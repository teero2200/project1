<?php
include_once('../../database/connect.php');

$id = $_POST['id'];
// $details = $_POST['details']? : '';


$sql = "SELECT * FROM `major` WHERE MAJOR_ID = $id";

$result = $objCon->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["MAJOR_ID"] . " - Name: " . $row["MAJOR_NAME"] .  "<br>";
        header("Location: ../../frontend/admins/major/major.php?name=".$row["MAJOR_NAME"]);
    }
} else {
    echo "0 results";
}

$objCon->close();

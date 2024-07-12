<?php
include_once('../database/connect.php');


// กรอกข้อมูล
$ST_ID = trim($_POST["ST_ID"]);
$ST_NAME = trim($_POST["ST_NAME"]);
$ST_EMAIL = trim($_POST["ST_EMAIL"]);
$ST_PASSWORD = sha1(trim($_POST["ST_PASSWORD"]));
$ST_ConPASSWORD = sha1(trim($_POST["ST_ConPASSWORD"]));


if ($ST_ID  == "") {
    echo "Please input id!";
    exit();
}


if ($ST_NAME == "") {
    echo "Please input ST_NAME!";
    exit();
}

if ($ST_EMAIL == "") {
    echo "Please input ST_EMAIL!";
    exit();
}


if ($_POST["ST_PASSWORD"] != $_POST["ST_ConPASSWORD"]) {
    echo "Password not Match!";
    exit();
}




$strSQL = "SELECT * FROM student WHERE ST_ID = '$ST_ID' OR ST_EMAIL = '$ST_EMAIL'";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
if ($objResult) {
    echo "Username already exists!";
} else {

    $strSQL = "INSERT INTO student (ST_ID,ST_NAME,ST_PASSWORD,ST_EMAIL) VALUES ('$ST_ID', '$ST_NAME','$ST_PASSWORD','$ST_EMAIL')";
    $objQuery = mysqli_query($objCon, $strSQL);

    echo "Register Completed!<br>";


    echo "<br> Go to <a href='../frontend/login.php'>Login page</a>";
}

mysqli_close($objCon);

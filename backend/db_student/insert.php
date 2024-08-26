<?php
session_start();
include_once('../../database/connect.php');
// INSERT INTO `students`( `MAJOR_ID`, `ST_NAME`, `ST_PASSWORD`, `ST_ID_CN`,
//  `ST_PN`, `ST_EMAIL`, `ST_SG`, 
// `ST_IMAGE`, `ST_NICKNAME`, `ST_DATE`
// , `ST_AGE`,  `ST_RELIGION`, `ST_CD`, `ST_ADDRESS`
// , `ST_SD`, `ST_PROVINCE`, `ST_ZC`, 
// `ST_CP`, `ST_CNPN`, `ST_EDUCNAME`, 
// `ST_EDUCEL`, `ST_EF`, `ST_EDUC_MAJOR`, 
// `ST_EDUCSM`, `ST_EDUCGPA`, `ST_EDUCA`, `ST_EDUCPN`)

// เก็บข้อมูล
$id = $_SESSION["id"];
$role =  $_SESSION["role"];
$ID_IDEN =  $_SESSION["ID_IDEN"];
$MAJOR_ID = $_POST['MAJOR_ID'] ?? '';
$ST_NAME = $_POST['ST_NAME'] ?? '';
$ST_PASSWORD = $_POST['ST_PASSWORD'] ?? '';
$ST_ID_CN = $_POST['ST_ID_CN'] ?? '';
$ST_PN = $_POST['ST_PN'] ?? '';
$ST_EMAIL = $_POST['ST_EMAIL'] ?? '';
$ST_SG = $_POST['ST_SG'] ?? '';
$ST_IMAGE = $_POST['FMLN_NUMST_IMAGEBER'] ?? '';
$ST_NICKNAME = $_POST['ST_NICKNAME'] ?? '';
$ST_DATE = $_POST['ST_DATE'] ?? '';
$ST_AGE = $_POST['ST_AGE'] ?? '';
$ST_RELIGION = $_POST['ST_RELIGION'] ?? '';
$ST_CD = $_POST['ST_CD'] ?? '';
$ST_ADDRESS = $_POST['ST_ADDRESS'] ?? '';
$ST_AGE = $_POST['ST_AGE'] ?? '';
$ST_PROVINCE = $_POST['ST_PROVINCE'] ?? '';
$ST_ZC = $_POST['ST_ZC'] ?? '';
$ST_CP = $_POST['ST_CP'] ?? '';
$ST_CNPN = $_POST['ST_CNPN'] ?? '';
$ST_EDUCNAME = $_POST['ST_EDUCNAME'] ?? '';
$ST_EDUCEL = $_POST['ST_EDUCEL'] ?? '';
$ST_EF = $_POST['ST_EF'] ?? '';
$ST_EDUC_MAJOR = $_POST['ST_EDUC_MAJOR'] ?? '';
$ST_EDUCSM = $_POST['ST_EDUCSM'] ?? '';
$ST_EDUCGPA = $_POST['ST_EDUCGPA'] ?? '';
$ST_EDUCA = $_POST['ST_EDUCA'] ?? '';
$ST_EDUCPN = $_POST['ST_EDUCPN'] ?? '';
$ST_SD = $_POST['ST_SD'] ?? '';


// เริ่มต้น Transaction
$objCon->begin_transaction();

try {
    // เพิ่มข้อมูลในตารางแรก
    $sql1 = "INSERT INTO `students`(`ST_ID`, `MAJOR_ID`, `ST_NAME`
) VALUES ('$ID_IDEN', '$MAJOR_ID' ,'$ST_NAME' )";

    $objCon->query($sql1);
    // หากไม่มีข้อผิดพลาดให้ยืนยันการทำ Transaction
    $objCon->commit();
    echo "Data inserted successfully into all tables!";
} catch (Exception $e) {
    // หากเกิดข้อผิดพลาด ให้ยกเลิก Transaction
    $objCon->rollback();
    echo "Error: " . $e->getMessage();
}

// ปิดการเชื่อมต่อ
$objCon->close();

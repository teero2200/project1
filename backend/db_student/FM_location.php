<?php
session_start();
include_once('../../database/connect.php');


// เก็บข้อมูล
$id = $_SESSION["id"];
$role =  $_SESSION["role"];
$FMLN_NAME = $_POST['FMLN_NAME'];
$FMLN_ADDRESS = $_POST['FMLN_ADDRESS'];
$FMLN_MOO = $_POST['FMLN_MOO'] ?? '';
$FMLN_ROAD = $_POST['FMLN_ROAD'] ?? '';
$FMLN_SD = $_POST['FMLN_SD'] ?? '';
$FMLN_PROVINCE = $_POST['FMLN_PROVINCE'] ?? '';
$FMLN_ZC = $_POST['FMLN_ZC'] ?? '';
$FMLN_NUMBER = $_POST['FMLN_NUMBER'];
$FMLN_FAX = $_POST['FMLN_FAX'];
$FMLN_PN = $_POST['FMLN_PN'] ?? '';
$FMLN_EMAIL = $_POST['FMLN_EMAIL'];


// เริ่มต้น Transaction
$objCon->begin_transaction();

try {

    // เพิ่มข้อมูลในตารางแรก
    $sql1 = "INSERT INTO `fm_location`( `FMLN_NAME`, `FMLN_ADDRESS`, `FMLN_MOO`, `FMLN_ROAD`, `FMLN_SD`, `FMLN_PROVINCE`, `FMLN_ZC`, `FMLN_NUMBER`, `FMLN_FAX`, `FMLN_PN`, `FMLN_EMAIL`) 
    VALUES('$FMLN_NAME','$FMLN_ADDRESS','$FMLN_MOO','$FMLN_ROAD','$FMLN_SD','$FMLN_PROVINCE','$FMLN_ZC','$FMLN_NUMBER','$FMLN_FAX','$FMLN_PN','$FMLN_EMAIL')";
    $objCon->query($sql1);

    // รับ ID ที่เพิ่งถูกเพิ่มจาก table1
    $last_id = $objCon->insert_id;

    // เพิ่มข้อมูลในตารางสอง
    $sql2 = "INSERT INTO `fm_location_log`( `FMLN_NAME`, `FMLN_ADDRESS`, `FMLN_MOO`, `FMLN_ROAD`, `FMLN_SD`, `FMLN_PROVINCE`, `FMLN_ZC`, `FMLN_NUMBER`, `FMLN_FAX`, `FMLN_PN`, `FMLN_EMAIL`) 
    VALUES('$FMLN_NAME','$FMLN_ADDRESS','$FMLN_MOO','$FMLN_ROAD','$FMLN_SD','$FMLN_PROVINCE','$FMLN_ZC','$FMLN_NUMBER','$FMLN_FAX','$FMLN_PN','$FMLN_EMAIL')";
    $objCon->query($sql2);

    // เพิ่มข้อมูลในตารางที่สาม
    $sql3 = "INSERT INTO `fm1`(`id_user`, `role`, `FMLN_ID`,  `FM01_STATUS`) 
    VALUES ('$id','$role','$last_id','รอดำเนินการ');";
    $objCon->query($sql3);


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

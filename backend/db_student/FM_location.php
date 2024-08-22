<?php
include_once('../../database/connect.php');
// `FMLN_NAME`, `FMLN_ADDRESS`, 
// `FMLN_MOO`, `FMLN_ROAD`, `FMLN_SD`, `FMLN_PROVINCE`, 
// `FMLN_ZC`, `FMLN_NUMBER`, `FMLN_FAX`, `FMLN_PN`, `FMLN_EMAIL`
// กรอกข้อมูล
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

    // เพิ่มข้อมูลในตารางที่สอง
    $sql2 = "INSERT INTO `fm01`(`FM01_ID`, `TC_ID`, `ST_ID`, `FMLN_ID`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
    $objCon->query($sql2);


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

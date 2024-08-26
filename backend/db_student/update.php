<?php
session_start();
include_once('../../database/connect.php');


// เก็บข้อมูล
// $id = $_SESSION["id"];
// $role =  $_SESSION["role"];
// $FMLN_NAME = $_POST['FMLN_NAME'];
// $FMLN_ADDRESS = $_POST['FMLN_ADDRESS'];
// $FMLN_MOO = $_POST['FMLN_MOO'] ?? '';
// $FMLN_ROAD = $_POST['FMLN_ROAD'] ?? '';
// $FMLN_SD = $_POST['FMLN_SD'] ?? '';
// $FMLN_PROVINCE = $_POST['FMLN_PROVINCE'] ?? '';
// $FMLN_ZC = $_POST['FMLN_ZC'] ?? '';
// $FMLN_NUMBER = $_POST['FMLN_NUMBER'];
// $FMLN_FAX = $_POST['FMLN_FAX'];
// $FMLN_PN = $_POST['FMLN_PN'] ?? '';
// $FMLN_EMAIL = $_POST['FMLN_EMAIL'];

$id = $_POST['id'];
$ID_IDEN = $_POST['ID_IDEN'] ?? '';
$name = $_POST['name'];
$ID_CN = $_POST['ID_CN'];
$SG = $_POST['SG'];
$PN = $_POST['PN'];
$EDUC_MAJOR = $_POST['EDUC_MAJOR'];
$email = $_POST['email'];
$NICKNAME = $_POST['NICKNAME'];
$DATE = $_POST['DATE'];
$AGE = $_POST['AGE'];
$RELIGION = $_POST['RELIGION'];
$CD = $_POST['CD'] ?? '';
$Ban = $_POST['Ban'];
$Road = $_POST['Road'] ?? '';
$District = $_POST['District'] ?? '';
$ADDRESS = $Ban . $Road . $District;
$SD = $_POST['SD'];
$PROVINCE = $_POST['PROVINCE'];
$ZC = $_POST['ZC'];
$CP = $_POST['CP'];
$CNPN = $_POST['CNPN'] ?? '';
$EDUCNAME = $_POST['EDUCNAME'] ?? '';
$EDUCEL = $_POST['EDUCEL'] ?? '';
$EDUCSM = $_POST['EDUCSM'] ?? '';
$EDUCGPA = $_POST['EDUCGPA'] ?? '';
$EDUCA = $_POST['EDUCA'] ?? '';
$EDUCPN = $_POST['EDUCPN'] ?? '';
$image_name = $_FILES['IMAGE']['name'];
$image_temp = $_FILES['IMAGE']['tmp_name'];
$exp = explode(".", $image_name);
$end = end($exp);
$name = time() . "." . $end;
if (!is_dir("./upload"))
    mkdir("upload");
$path = "upload/" . $name;
$allowed_ext = array("gif", "jpg", "jpeg", "png");

// เริ่มต้น Transaction
$objCon->begin_transaction();
try {
    in_array($end, $allowed_ext);
    move_uploaded_file($image_temp, $path);
    $sql = "UPDATE `users` SET `name`='$name' ,ID_CN = '$ID_CN' , `SG`='$SG' ,
    PN = '$PN', EDUC_MAJOR = '$EDUC_MAJOR',
    email = '$email' , NICKNAME = '$NICKNAME', DATE = '$DATE' , AGE = '$AGE', RELIGION = '$RELIGION', CD = '$CD',
    ADDRESS = '$ADDRESS' , SD  = '$SD' , PROVINCE = '$PROVINCE' , ZC = '$ZC' , CP = '$CP',
    CNPN ='$CNPN' , EDUCNAME = '$EDUCNAME' , EDUCEL = '$EDUCEL', EDUCSM = '$EDUCSM',EDUCGPA = '$EDUCGPA' , EDUCA = '$EDUCA', EDUCPN = '$EDUCPN',  IMAGE = '$path'
     WHERE id = $id";
    $objCon->query($sql);

    // // เพิ่มข้อมูลในตารางแรก
    // $sql1 = "INSERT INTO `fm_location`( `FMLN_NAME`, `FMLN_ADDRESS`, `FMLN_MOO`, `FMLN_ROAD`, `FMLN_SD`, `FMLN_PROVINCE`, `FMLN_ZC`, `FMLN_NUMBER`, `FMLN_FAX`, `FMLN_PN`, `FMLN_EMAIL`) 
    // VALUES('$FMLN_NAME','$FMLN_ADDRESS','$FMLN_MOO','$FMLN_ROAD','$FMLN_SD','$FMLN_PROVINCE','$FMLN_ZC','$FMLN_NUMBER','$FMLN_FAX','$FMLN_PN','$FMLN_EMAIL')";
    // $objCon->query($sql1);

    // // รับ ID ที่เพิ่งถูกเพิ่มจาก table1
    // $last_id = $objCon->insert_id;

    // // เพิ่มข้อมูลในตารางสอง
    // $sql2 = "INSERT INTO `fm_location_log`( `FMLN_NAME`, `FMLN_ADDRESS`, `FMLN_MOO`, `FMLN_ROAD`, `FMLN_SD`, `FMLN_PROVINCE`, `FMLN_ZC`, `FMLN_NUMBER`, `FMLN_FAX`, `FMLN_PN`, `FMLN_EMAIL`) 
    // VALUES('$FMLN_NAME','$FMLN_ADDRESS','$FMLN_MOO','$FMLN_ROAD','$FMLN_SD','$FMLN_PROVINCE','$FMLN_ZC','$FMLN_NUMBER','$FMLN_FAX','$FMLN_PN','$FMLN_EMAIL')";
    // $objCon->query($sql2);

    // // เพิ่มข้อมูลในตารางที่สาม
    // $sql3 = "INSERT INTO `fm1`(`id_user`, `role`, `FMLN_ID`,  `FM01_STATUS`) 
    // VALUES ('$id','$role','$last_id','รอดำเนินการ');";
    // $objCon->query($sql3);


    // หากไม่มีข้อผิดพลาดให้ยืนยันการทำ Transaction
    $objCon->commit();
    echo "Data updated successfully into all tables!";
} catch (Exception $e) {
    // หากเกิดข้อผิดพลาด ให้ยกเลิก Transaction
    $objCon->rollback();
    echo "Error: " . $e->getMessage();
}


// ปิดการเชื่อมต่อ
$objCon->close();

<?php
session_start();
include_once('../../database/connect.php');

$year = $_POST['year'];

// เริ่มต้น Transaction
$objCon->begin_transaction();

try {
    // เพิ่มข้อมูลในตารางแรก
    $sql = "SELECT * FROM `fm1` where YEAR(FM01_TD) = ?";

    // เตรียม statement
    $stmt = $objCon->prepare($sql);

    // ผูกข้อมูลกับ placeholders
    $stmt->bind_param("s", $year);
    // รัน statement
    $stmt->execute();
    // รับผลลัพธ์
    $result = $stmt->get_result();

    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">' . 'ลำดับ' . '</th>';
    echo '<th scope="col">' . 'รหัสนักศึกษา' . '</th>';
    echo '<th scope="col">' . 'ชื่อนักศึกษา' . '</th>';
    echo '<th scope="col">' . 'สถานที่ฝึก' . '</th>';
    echo '<th scope="col">' . 'ปีที่ฝึก' . '</th>';
    echo '<th scope="col">' . 'ที่อยู่' . '</th>';
    echo '<th scope="col">' . 'อำเภอ' . '</th>';
    echo '<th scope="col">' . 'จังหวัด' . '</th>';
    echo '<th scope="col">' . 'เบอร์โทรติดต่อ' . '</th>';
    echo '<th scope="col">' . 'ตำแหน่งงาน' . '</th>';
    echo '</tr>';
    echo '</thead> ';
    echo '<tbody>';
    // แสดงผลลัพธ์
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id_user'] . '</td>';
            echo '<td>' . '1631010541137' . '</td>';
            echo '<td>' . 'Teerapat' . '</td>';
            echo '<td>' . 'รัตนโกสินทร์' . '</td>';
            echo '<td>' . '2022' . '</td>';
            echo '<td>' . 's' . '</td>';
            echo '<td>' . 's' . '</td>';
            echo '<td>' . 's' . '</td>';
            echo '<td>' . 's' . '</td>';
            echo '<td>' . 's' . '</td>';
            echo '</tr>';
        }
    } else {
        echo "0 results";
    }
} catch (Exception $e) {
    // หากเกิดข้อผิดพลาด ให้ยกเลิก Transaction
    $objCon->rollback();
    echo "Error: " . $e->getMessage();
}


echo '</tbody>';
echo '</table>';

// ปิดการเชื่อมต่อ
$objCon->close();

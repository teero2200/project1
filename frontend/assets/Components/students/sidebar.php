<?php
session_start();


?>



<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Nav Item - Dashboard -->
    <div class="mt-5 ">
        <li class="nav-item text-center">
            <a class="nav-link text-dark " href="home.php">
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน้าแรก</span></a>
        </li>


        <?php if (empty($_SESSION['ST_ID'])) { ?>

            <li class="nav-item">
                <a class="nav-link text-dark" href="login.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เข้าสู่ระบบ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="chage_password.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เปลี่ยนรหัสผ่าน</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="forget_password.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลืมรหัสผ่าน</span></a>
            </li>
        <?php
        } elseif (!empty($_SESSION['ST_ID'])) { ?>

            <li class="nav-item">
                <a class="nav-link text-dark" href="creat.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลส่วนตัวของนักศึกษา</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="login.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เลือกหลักสูตร</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="profession.php">
                    <span>&nbsp;&nbsp;-คำร้องขอฝึกประสบการณ์วิชาชีพ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="field.php">
                    <span>&nbsp;&nbsp;-คำร้องขอฝึกประสบการณ์ภาคสนาม</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="approve.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตรวจสอบสถานะการอนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="undo.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดูข้อมูลย้อนหลัง</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/../project/backend/logout_student.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ออกจากระบบ</span></a>
            </li>
        <?php }  ?>

    </div>
</ul>
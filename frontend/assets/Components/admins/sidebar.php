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


        <?php if (empty($_SESSION['AM_ID'])) { ?>

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
        } elseif ($_SESSION['AM_ID']) { ?>
            <li class="nav-item">
                <a class="nav-link text-dark" href="new.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข่าวสาร</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="major.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลสาขา</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="teacher.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลส่วนตัวของอาจารย์</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="student.php">
                    <span>&nbsp;&nbsp;&nbsp;ค้นหานักศักษา เพื่อแก้ไขข้อมูล</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-dark" href="train.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แก้ไขหลักสูตรการฝึกงาน</span></a>
                <a class="nav-link text-dark" href="profession.php">
                    <span>&nbsp;&nbsp;หลักสูตรการฝึกประสบการณ์วิชาชีพ</span></a>
                <a class="nav-link text-dark" href="field.php">
                    <span>หลักสูตรการฝึกประสบการณ์วิชาชีพภาคสนาม</span></a>
            </li>



            <li class="nav-item">
                <a class="nav-link text-dark" href="experience.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;รายงานการฝึกประสบการณ์</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/../project/backend/logout_admin.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ออกจากระบบ</span></a>
            </li>
        <?php } ?>

    </div>
</ul>
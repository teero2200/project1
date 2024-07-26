<?php
session_start();


?>



<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Nav Item - Dashboard -->
    <div class="mt-5 ">


        <!-- ไม่มีตำแหน่ง -->
        <?php if (empty($_SESSION['role'])) { ?>
            <li class="nav-item text-center">
                <a class="nav-link text-dark " href="home.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน้าแรก</span></a>
            </li>

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


            <!-- ตำแหน่ง Admin -->
        <?php
        } elseif ($_SESSION['role'] == 'admin') { ?>
            <li class="nav-item text-center">
                <a class="nav-link text-dark " href="/project1/frontend/home.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน้าแรก</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/admins/new.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข่าวสาร</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/admins/major.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลสาขา</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/admins/teacher.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลส่วนตัวของอาจารย์</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/admins/student.php">
                    <span>&nbsp;&nbsp;&nbsp;ค้นหานักศักษา เพื่อแก้ไขข้อมูล</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/admins/train.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แก้ไขหลักสูตรการฝึกงาน</span></a>
                <a class="nav-link text-dark" href="/project1/frontend/admins/profession.php">
                    <span>&nbsp;&nbsp;หลักสูตรการฝึกประสบการณ์วิชาชีพ</span></a>
                <a class="nav-link text-dark" href="/project1/frontend/admins/field.php">
                    <span>หลักสูตรการฝึกประสบการณ์วิชาชีพภาคสนาม</span></a>
            </li>



            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/admins/experience.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;รายงานการฝึกประสบการณ์</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/../project1/backend/logout.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ออกจากระบบ</span></a>
            </li>



            <!-- ตำแหน่ง Teacher -->
        <?php } elseif ($_SESSION['role'] == 'teacher') { ?>
            <li class="nav-item text-center">
                <a class="nav-link text-dark " href="/project1/frontend/home.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน้าแรก</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/teachers/profession.php">
                    <span>&nbsp;&nbsp;&nbsp;เกณฑ์การฝึกประสบการวิชาชีพ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/teachers/field.php">
                    <span>&nbsp;เกณฑ์การฝึกประสบการภาคสนาม</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/teachers/approve.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ขออนุมัติฝึกประสบการณ์</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/teachers/profession_report.php">
                    <span>&nbsp;รายงานการฝึกประสบการณ์วิชาชีพ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/teachers/field_report.php">
                    <span>รายงานการฝึกประสบการณ์ภาคสนาม</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/teachers/not_approve_report.php">
                    <span>รายงานนักศึกษาที่ยังไม่ได้รับอนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/teachers/approve_report.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;รายงานนักศึกษาที่รับอนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/teachers/time_report.php">
                    <span>&nbsp;&nbsp;รายงานระยะเวลาที่นักศึกษาฝึกงาน</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/teachers/time_year_report.php">
                    <span>รายงานนักศึกษาที่ออกฝึกประสบการณ์วิชาชีพแต่ละปี</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/../project1/backend/logout.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ออกจากระบบ</span></a>
            </li>


            <!-- ตำแหน่ง Student -->
        <?php } elseif ($_SESSION['role'] == 'student') { ?>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/students/creat.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลส่วนตัวของนักศึกษา</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/login.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เลือกหลักสูตร</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/students/profession.php">
                    <span>&nbsp;&nbsp;-คำร้องขอฝึกประสบการณ์วิชาชีพ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/students/field.php">
                    <span>&nbsp;&nbsp;-คำร้องขอฝึกประสบการณ์ภาคสนาม</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/students/approve.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตรวจสอบสถานะการอนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/frontend/students/undo.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดูข้อมูลย้อนหลัง</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/../project1/backend/logout.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ออกจากระบบ</span></a>
            </li>
        <?php } ?>



    </div>
</ul>
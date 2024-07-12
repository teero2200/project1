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


        <?php if (empty($_SESSION['TC_ID'])) { ?>

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
        } elseif (!empty($_SESSION['TC_ID'])) { ?>

            <li class="nav-item">
                <a class="nav-link text-dark" href="profession.php">
                    <span>&nbsp;&nbsp;&nbsp;เกณฑ์การฝึกประสบการวิชาชีพ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="field.php">
                    <span>&nbsp;เกณฑ์การฝึกประสบการภาคสนาม</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="approve.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ขออนุมัติฝึกประสบการณ์</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="profession_report.php">
                    <span>&nbsp;รายงานการฝึกประสบการณ์วิชาชีพ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="field_report.php">
                    <span>รายงานการฝึกประสบการณ์ภาคสนาม</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="not_approve_report.php">
                    <span>รายงานนักศึกษาที่ยังไม่ได้รับอนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="approve_report.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;รายงานนักศึกษาที่รับอนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="time_report.php">
                    <span>&nbsp;&nbsp;รายงานระยะเวลาที่นักศึกษาฝึกงาน</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="time_year_report.php">
                    <span>รายงานนักศึกษาที่ออกฝึกประสบการณ์วิชาชีพแต่ละปี</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/../project/backend/logout_teacher.php">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ออกจากระบบ</span></a>
            </li>
        <?php }  ?>

    </div>
</ul>
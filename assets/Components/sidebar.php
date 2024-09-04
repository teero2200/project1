<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Nav Item - Dashboard -->
    <div class="mt-5 text-center">

        <?php if (empty($_SESSION['role'] ?? '')) : ?>
            <!-- ไม่มีตำแหน่ง -->
            <li class="nav-link nav-item">
                <a class=" text-dark" href="home.php">
                    <span>หน้าแรก</span></a>
            </li>
            <li class="nav-link nav-item">
                <a class=" text-dark" href="login.php">
                    <span>เข้าสู่ระบบ</span></a>
            </li>
            <li class="nav-link nav-item">
                <a class=" text-dark" href="chage_password.php">
                    <span>เปลี่ยนรหัสผ่าน</span></a>
            </li>
            <li class="nav-link nav-item">
                <a class=" text-dark" href="forget_password.php">
                    <span>ลืมรหัสผ่าน</span></a>
            </li>
            <!-- ตำแหน่ง Admin -->
        <?php elseif ($_SESSION['role']   == 'admin'): ?>
            <li class="nav-item text-center">
                <a class="nav-link text-dark " href="/project1/home.php">
                    <span>หน้าแรก</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/admins/new/index.php">
                    <span>ข่าวสาร</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/admins/major/major.php">
                    <span>ข้อมูลสาขา</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/admins/teachers/index.php">
                    <span>ข้อมูลส่วนตัวของอาจารย์</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/admins/student.php">
                    <span>ค้นหานักศักษา เพื่อแก้ไขข้อมูล</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/admins/train.php">
                    <span>แก้ไขหลักสูตรการฝึกงาน</span></a>
                <a class="nav-link text-dark" href="/project1/admins/profession.php">
                    <span>หลักสูตรการฝึกประสบการณ์วิชาชีพ</span></a>
                <a class="nav-link text-dark" href="/project1/admins/field.php">
                    <span>หลักสูตรการฝึกประสบการณ์วิชาชีพภาคสนาม</span></a>
            </li>



            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/admins/experience.php">
                    <span>รายงานการฝึกประสบการณ์</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="logout.php">
                    <span>ออกจากระบบ</span></a>
            </li>
        <?php elseif (($_SESSION['role']  == 'teacher')) : ?>
            <!-- ตำแหน่ง Teacher -->
            <li class="nav-item text-center">
                <a class="nav-link text-dark " href="/project1/home.php">
                    <span>หน้าแรก</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/teachers/profession.php">
                    <span>เกณฑ์การฝึกประสบการวิชาชีพ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/teachers/field.php">
                    <span>เกณฑ์การฝึกประสบการภาคสนาม</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/teachers/approve.php">
                    <span>ขออนุมัติฝึกประสบการณ์</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/teachers/profession_report.php">
                    <span>รายงานการฝึกประสบการณ์วิชาชีพ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/teachers/field_report.php">
                    <span>รายงานการฝึกประสบการณ์ภาคสนาม</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/teachers/not_approve_report.php">
                    <span>รายงานนักศึกษาที่ยังไม่ได้รับอนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/teachers/approve_report.php">
                    <span>รายงานนักศึกษาที่รับอนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/teachers/time_report.php">
                    <span>รายงานระยะเวลาที่นักศึกษาฝึกงาน</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/teachers/time_year_report.php">
                    <span>รายงานนักศึกษาที่ออกฝึกประสบการณ์วิชาชีพแต่ละปี</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/../project1/backend/logout.php">
                    <span>ออกจากระบบ</span></a>
            </li>

        <?php elseif (($_SESSION['role']  == 'student')) : ?>
            <!-- ตำแหน่ง Student -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/students/creat.php">
                    <span>ข้อมูลส่วนตัวของนักศึกษา</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/students/select.php">
                    <span>เลือกหลักสูตร</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/students/profession.php">
                    <span>-คำร้องขอฝึกประสบการณ์วิชาชีพ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/students/field.php">
                    <span>-คำร้องขอฝึกประสบการณ์ภาคสนาม</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/students/approve.php">
                    <span>ตรวจสอบสถานะการอนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/students/no_approve.php">
                    <span>ไม่อนุมัติ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/project1/students/undo.php">
                    <span>ดูข้อมูลย้อนหลัง</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/../project1/backend/logout.php">
                    <span>ออกจากระบบ</span></a>
            </li>
        <?php endif; ?>



    </div>
</ul>
<?php

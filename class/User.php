<?php

class User
{
    private  $serverName = "localhost";
    private  $userName = "root";
    private  $userPassword = "";
    private   $dbName = "db_project";
    private  $objCon = null;

    public function __construct()
    {
        $objCon = mysqli_connect($this->serverName, $this->userName, $this->userPassword, $this->dbName);
        $this->objCon  =  $objCon;
    }


    // Login
    public  function login($ID_IDEN, $password)
    {
        session_start();
        $strSQL = "SELECT * FROM users WHERE ID_IDEN = '$ID_IDEN' AND password = '$password'";
        $objQuery = mysqli_query($this->objCon, $strSQL);
        $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);


        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

        $_SESSION['ID_CN'] = $objResult['ID_CN'];

        if (!$objResult) {
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "เข้าสู่ระบบไม่สำเร็จ",
                text: "กรุณาตรวจสอบข้อมูลใหม่อีกครั้ง",
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = "login.php";
            });
            </script>';
        } else {

            $_SESSION["id"] = $objResult["id"];
            $_SESSION["ID_IDEN"] = $objResult["ID_IDEN"];
            $_SESSION["name"] = $objResult["name"];
            $_SESSION["email"] = $objResult["email"];
            $_SESSION["role"] = $objResult["role"];

            session_write_close();

            if ($objResult["Status"] == "ADMIN") {
                header("location:admin_page.php");
            } else {
                header("location:home.php");
            }
        }
        mysqli_close($objCon);
    }


    // Forget Password
    public function forgetPassword($email)
    {

        // ค้นหาข้อมูลที่กรอก
        $strSQL = "SELECT * FROM users WHERE email = '$email' ";
        $objQuery = mysqli_query($this->objCon, $strSQL);
        $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
        $id = $objResult['id'];
        // echo $id;
        if (!$objResult) {
            echo "Email not found";
        } else {
            header("Location: chage_password.php?id=$id");
            exit;
        }
        mysqli_close($objCon);
    }


    // change Password
    public function changePassword($id, $strPassword, $strNPassword, $strCNPassword)
    {
        $strSQL = "SELECT * FROM users WHERE password = '$strPassword' And id = '$id' ";
        $objQuery = mysqli_query($this->objCon, $strSQL);
        $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
        // print_r($objResult);
        // // echo $strEmail;
        // die;

        if (!$objResult) {
            echo "Password Incress";
        } elseif ($strNPassword != $strCNPassword) {
            echo "Password Not Match";
        } else {
            $strSQL = "UPDATE users SET password = '$strNPassword' WHERE id = '$id' ";
            $objQuery = mysqli_query($this->objCon, $strSQL);
            header("location: login.php");
            echo "Password Change Successfully";
        }
        mysqli_close($objCon);
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("location:login.php");
    }
}

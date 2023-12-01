<?php
session_start();
include "../../model/pdo.php";
include "../../model/taikhoan.php";
    if (isset($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if (check_user($user, $pass)){
            $_SESSION['user'] = check_user($user, $pass);
            if (check_role($user) == 1) {
                header("location: ../index.php");
                die;
            } else {
                header("location: ../../index.php");
                die;
            }
        }
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - H2 Fashion</title>
    <link rel="shortcut icon" href="../../view/image/h2_fashion_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../view/css/style.css">
    <link rel="stylesheet" href="../../view/css/account.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="https://kit.fontawesome.com/bb3436b3fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-GLhlTQ8iK1vrZLlOT+1S4YU6kYZlqLOdj0c5rqQFqI2HT6en5l5Fmee5dFjxIxt0" crossorigin="anonymous">
</head>

<body>

    <div class="header">
        <p>TRANG QUẢN TRỊ H2 FASHION </p>
        <!-- <marquee behavior="scroll" direction="left" scrollamount="5">
            Xin chào admin chúc bạn 1 ngày tốt lành <i class="fa-regular fa-face-smile fa-xl"
                style="color: #ffffff;"></i>
        </marquee> -->
        <!-- <a href="#">Xin chào admin</a> -->
    </div>

    <div class="nav">
        <h3 class="bst">H2 FASHION</h3>
        <img src="../../view/image/h2_fashion_logo.png" alt="" width="210px" style="margin: 25px 0px;">


        <!-- <a href="../index.php"> Trang Chủ</a>
        <a href="index.php?act=listdm"> Quản lý danh mục</a>
        <a href="index.php?act=listsp"> Quản lý sản phẩm</a>
        <a href="index.php?act=dskh">Khách hàng</a>          
        <a class="nav-link" href="?act=donhang">Đơn hàng</a>
        <a class="nav-link" href="?act=bl">Bình luận</a> -->


        <!-- <div class="adm">
            <a href="index.php?act=dangxuat">Đăng Xuất <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i></a>
            <div class="">

            <i class="fa-solid fa-user fa-lg"></i>
            </div>
        </div> -->
    </div>
    <div class="main">
<div class="page">
    <div class="container">
        <?php
  
            
            ?> 
            <h2>Đăng Nhập</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Tên Đăng Nhập:</label>
                    <input type="text" name="user" required>
                </div>
                <div class="form-group">
                    <label for="">Mật Khẩu:</label>
                    <input type="password" name="pass" required>
                </div>
                <div class="form-group">
                    <input class="int_sbm" name="dangnhap" type="submit" value="Đăng Nhập"></input>
                </div>
                <div class="form-group">
                    <p>Chưa có tài khoản? <a href="index.php">Quay về trang chủ <a href="index.php?act=dangky">Đăng ký
                                ngay</a></p>
                </div>
            </form>
            <?php

        // }
        // if (isset($thongbao)) {
        //     echo $thongbao;
        // }
        ?>
    </div>
</div>
        </div>
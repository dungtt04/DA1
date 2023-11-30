<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H2 Fashion</title>
    <link rel="shortcut icon" href="view/image/h2_fashion_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./view/css/style2.css">
    <link rel="stylesheet" href="./view/css/spct.css">
    <link rel="stylesheet" href="./view/css/cart.css">
    <link rel="stylesheet" href="./view/css/fo.css">
    <link rel="stylesheet" href="./view/css/account.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="./view/css/style_login.css"> -->
    <style>
     
    </style>
</head>

<body>
    <!-- header section starts -->
    <!-- <marquee behavior="" direction="">
        hello
    </marquee> -->
    <header>

        <a href="index.php" class="logo_book"> <img src="view/image/h2_fashion_logo.png" alt=""></a>

        <!-- menu sách -->
        <nav class="nav_menu">
            <ul class="ul_menu">
                <li class="li_menu">
                    <a href="#"><i class="fa-solid fa-list-ul fa-lg"></i> Danh mục</a>
                    <div class="book-categories">
                        <h2>Danh Mục</h2>
                        <ul>
                            <?php
                            $dsdm = loadall_danhmuc();
                            foreach ($dsdm as $dm) {

                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $dm_id;
                                echo '<a href="' . $linkdm . '">' . $dm_name . '</a>';
                            }
                            ?>
                            <!-- Thêm các danh mục sách khác tùy theo nhu cầu -->
                        </ul>
                    </div>
                </li>

                <!-- Thêm các mục menu khác tùy theo nhu cầu -->
            </ul>
        </nav>
        <!-- end menu sách -->


        <nav class="navbar">

            <nav class="navbar">
                <a class="active" href="index.php?act=index.php"><i class="fa-solid fa-house fa-lg"></i> Trang Chủ</a>
                <a href="index.php?act=sanpham"><i class="fa-solid fa-book fa-lg"></i>  Sản Phẩm</a>
                <!-- <a href="index.php"><i class="fa-solid fa-blog fa-lg"></i>  Blog</a> -->
                <!-- <a href="#menu">menu</a>
                <a href="#review">review</a>
                <a href="#order">order</a> -->
                <a href="index.php?act=mybill"><i class="fa-solid fa-book fa-lg"></i>  Lịch Sử Đơn Hàng </a>
            </nav>

        </nav>


        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="index.php?act=spyt" class="fas fa-heart"></a>
            <a href="index.php?act=addtocart" class="fas fa-shopping-cart"></a>
        </div>
        <?php
        // include 'model/taikhoan.php';
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            echo ' <div class="user-menu">
            <button id="user-button"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" id="account"><path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm0 6c3.31 0 6 2.69 6 6 0 3.32-2.69 6-6 6s-6-2.68-6-6c0-3.31 2.69-6 6-6zm0 28.4c-5.01 0-9.411-2.56-12-6.44.05-3.97 8.01-6.16 12-6.16s11.94 2.19 12 6.16c-2.59 3.88-6.99 6.44-12 6.44z"></path><path fill="none" d="M0 0h48v48H0z"></path></svg>
            </button>
            <div class="user-links" id="user-links">
                <a  href="index.php?act=dangnhap">Thông tin tài khoản</a> <!--Chèn link dẫn đến file đăng nhập vào đây -->
                <a  href="index.php?act=dangxuat">Đăng xuất</a>
            </div>
        </div>';
        } else {
            echo '<div class="user-menu">
            <button id="user-button">Đăng nhập/Đăng ký</button>
            <div class="user-links" id="user-links">
                <a  href="index.php?act=dangnhap">Đăng nhập</a> <!--Chèn link dẫn đến file đăng nhập vào đây -->
                <a  href="index.php?act=dangky">Đăng ký</a> <!--Chèn link dẫn đến file đăng ký vào đây -->
                <a  href="index.php?act=dangxuat">Đăng xuất</a>
            </div>
        </div>';
       }
       ?>
        
    </header>

    <!-- header section ends -->

    <!-- search form -->

    <form action="index.php?act=sanpham" id="search-form" method="POST">
        <input type="search" placeholder="search here ..." name="kyw" id="search-box">
        <label for="search-box"  class="fas fa-search"></label>
        <i class="fas fa-times" id="close" name="timkiem"></i>
    </form>

    <!-- search form -->

    <!-- home section starts -->

<section class="home1">
    
</section>
    <!-- home section ends -->
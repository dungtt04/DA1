<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/cart.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "header.php";
// controller

if (!isset($_SESSION['user'])) {
    header("Location:account/login.php");
    // header("Location:index.php");
}
if (isset($_SESSION['user'])) {
    // var_dump($_SESSION['user']);
    if (check_role($_SESSION['user']['tk_name']) == 0) {
        header("location: ../index.php");
        die;
    }
}

$show = thongkesp_dm();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'doanhthu':
            include 'doanhthu_sp.php';
            break;
        case 'adddm':
            // kiểm tra ng dùng có ấn vào add ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if ($_POST['tenloai'] != '') {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbaor = "Thêm thành công";
                } else {
                    $thongbaor = 'Mời nhập tên danh mục';
                }
            }
            include "danhmuc/add.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'deletedm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();

            include "danhmuc/list.php";
            break;
        case 'editdm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $danhmuc = loadone_danhmuc($_GET['id']);
            }
            // $listdanhmuc = loadall_danhmuc();
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat']) && ($_POST['tenloai'] != ' ')) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cập nhật thành công";
            } else {
                $thongbaor = 'tên rỗng';
            }
            // $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;


        // controller sản phẩm
        // controller sản phẩm

        case 'addsp':
            // kiểm tra ng dùng có ấn vào add ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if (($_POST['tensp'] != "") && ($_POST['giasp'] != "")) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $tacgia = $_POST['tacgia'];
                    $soluong =$_POST['soluong'];
                    $hinh = $_FILES['hinh']['name'];
                    $dir = "../upload/";
                    $target_file = $dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {

                    } else {

                    }
                    insert_sanpham($tensp, $giasp, $hinh, $tacgia, $soluong,$mota, $iddm);
                    $thongbao = "Thêm thành công";
                } else {
                    $thongbaor = 'Vui lòng nhập tên và giá sản phẩm';

                }

            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $tendm = load_ten_dm($iddm);

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'deletesp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();

            include "sanpham/list.php";
            break;
        case 'editsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $tacgia = $_POST['tacgia'];
                $soluong =$_POST['soluong'];
                $hinh = $_FILES['hinh']['name'];
                $dir = "../upload/";
                $target_file = $dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file))
                    ;
                $listdanhmuc = loadall_danhmuc();
                // var_dump($_POST);
                update_sanpham($id, $tensp, $giasp, $hinh, $tacgia, $soluong,$mota, $iddm);
                $thongbao = "cập nhật thành công";

            } else {
                $err = "lỗi";
            }
            $listsanpham = loadall_sanpham("", 0);
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/list.php";
            break;

        case 'dskh':
            $list_taikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'delete_tk':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_taikhoan($_GET['id']);
            }
            $list_taikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
        
        break;
        
        
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user, $pass);
                // if (is_array($check_user) && ($check_user['tk_role'] == 0)) {
                //     $_SESSION['user'] = $check_user;
                //     header('Location:index.php');
                // } 
                if (is_array($check_user) && ($check_user['tk_role'] != 0)) {
                    header('Location:index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra lại user or pass";
                    # code...
                }
            }
            include "account/login.php";
            break;



            // DON HANG
            case 'donhang':
                if (isset($_POST['searchdh'])) {
                    $listbill = search_bill($_POST['iddh']);
                } else {
                    $listbill = loadall_bill(0);
                }
    
                include 'donhang/list-donhang.php';
                break;
        case 'updatedh':
            if (isset($_GET['iddh'])) {
                $dh = loadone_bill($_GET['iddh']);
                $idbill=$_GET['iddh'];
                $listbillct = loadall_billct($idbill);
                }


            if (isset($_POST['updatedh'])) {
                $id = $_POST['iddh'];
                $tt = $_POST['ttdh'];
                update_dh($id, $tt);
                header("location:index.php?act=donhang");
            }
            include 'donhang/edit-donhang.php';
            break;

        case 'deletedh':
            if (isset($_GET['iddh'])) {
                delete_dh($_GET['iddh']);
                header("location:index.php?act=donhang");
            }
            break;

        //Cotroler bình luận        
        case 'bl':
            $binh_luan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $binh_luan = loadall_binhluan(0);

            include "binhluan/list.php";

            break;
        case 'dangxuat':
            session_unset();
            header('Location:../index.php');
            break;
        default:
            include "home.php";
            break;

    }
} else {
    include "home.php";
}

include "footer.php";
?>
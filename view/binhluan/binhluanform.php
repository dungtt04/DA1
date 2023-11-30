<?php
ob_start();
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
include "../../model/taikhoan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
$list_taikhoan = loadall_taikhoan();

// var_dump($idpro);
// die;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    .comments {
  max-width: 90%;
  margin: 0 auto;
}

.comment {
  display: flex;
  align-items: flex-start;
  margin-bottom: 20px;
}

.avatar {
  margin-right: 10px;
}

#account {
  width: 48px;
  height: 48px;
}

.user-info {
  display: flex;
  align-items: center;
  margin-bottom: 5px;
}

.user-name {
  font-weight: bold;
  margin-right: 10px;
}

.comment-date {
  color: #888;
}

.comment-content {
    width: 100%;
    text-align: left;
  border: 1px solid #ccc;
  padding: 10px;
}


    .box_bl{
        font-size: 15px;t
    }    
    .box_bl input[type=text]{
        width: 60%;
        border: 1px solid black;
        height: 30px;
        padding: 20px
        

    }
    .box_bl input[type=submit]{
        border-radius: 15px;
        width: 200px;
        height: 40px;
        background-color: #192a56;
        color: white;
    }
    .box_bl input[type=submit]:hover{
        border-radius: 15px;
        width: 200px;
        height: 40px;
        background-color: #27ae60;
        color: white;
    }

    /* .binhluan table {
        width: 90%;
        margin-left: 5%;
    }

    .binhluan table td:nth-child(1) {
        width: 50%;
    }

    .binhluan table td:nth-child(2) {
        width: 20%;
    }

    .binhluan table td:nth-child(3) {
        width: 30%;
    } */
</style>

<body>

    <div class="frm_bl">
        <div class="box_title"><h3>BÌNH LUẬN</h3></div>
        <div class="box_content2 c binhluan">
            <?php
            foreach ($dsbl as $bl) {
                extract($bl);
                echo '
                <div class="comments">
                <div class="comment">
                  <div class="avatar">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" id="account"><path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm0 6c3.31 0 6 2.69 6 6 0 3.32-2.69 6-6 6s-6-2.68-6-6c0-3.31 2.69-6 6-6zm0 28.4c-5.01 0-9.411-2.56-12-6.44.05-3.97 8.01-6.16 12-6.16s11.94 2.19 12 6.16c-2.59 3.88-6.99 6.44-12 6.44z"></path><path fill="none" d="M0 0h48v48H0z"></path></svg>
                  </div>
                  <div class="comment-details">
                    <div class="user-info">
                      <span class="user-name">'.$tk_name.'</span>
                      <span class="comment-date">'.$ngaybinhluan .'</span>
                    </div>
                    <p class="comment-content">'.$noidung .'</p>
                  </div>
                </div>
              </div>
            ';

            }
            ?>

        </div>
        <div class="box_footer sear_box">
            <form class="box_bl" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" id="account"><path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm0 6c3.31 0 6 2.69 6 6 0 3.32-2.69 6-6 6s-6-2.68-6-6c0-3.31 2.69-6 6-6zm0 28.4c-5.01 0-9.411-2.56-12-6.44.05-3.97 8.01-6.16 12-6.16s11.94 2.19 12 6.16c-2.59 3.88-6.99 6.44-12 6.44z"></path><path fill="none" d="M0 0h48v48H0z"></path></svg>
                    <input type="text" name="noidung" id="" claas="bl_content" placeholder="Nhập nội dung bình luận">
                    <input type="submit" name="gui_bl" value="Gửi bình luận" id="">
                <?php
                } else {
                ?>
                
                    <div style="color:red">Đăng nhập để bình luận sản phẩm</div>
                <?php
                }
                ?>
            </form>
        </div>

        <?php

        if (isset($_POST['gui_bl']) && $_POST['gui_bl']) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['tk_id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location: ". $_SERVER['HTTP_REFERER']); 
        }
        ?>
    </div>

</body>

</html>
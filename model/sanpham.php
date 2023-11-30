<?php
    function insert_sanpham($tenloai,$giasp,$hinh,$sp_gia_moi,$mota,$iddm){
        $sql = "INSERT INTO san_pham(sp_name,sp_price,sp_img,sp_gia_moi,sp_mota,dm_id) VALUES('$tenloai','$giasp','$hinh', '$sp_gia_moi','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "DELETE FROM san_pham WHERE sp_id=".$id;
        pdo_execute($sql);
    }
    function loadall_spyt(){
        $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY sp_luotxem DESC LIMIT 0,8";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadone_spyt(){
        $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY sp_luotxem DESC LIMIT 1";
        $onesanpham = pdo_query($sql);
        return $onesanpham;
    }
    function loadall_sanpham_home(){
        $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY sp_id DESC LIMIT 0,9";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "SELECT * FROM san_pham WHERE 1";
        if ($kyw!="") {
            $sql.=" AND sp_name like '%".$kyw."%'";
        }
        if ($iddm>0) {
            $sql.=" AND dm_id ='".$iddm."'";
        }
        $sql.=" ORDER BY sp_id DESC";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadone_sanpham($id){
        // $iddm = $_GET['id'];
        $sql = "SELECT * FROM san_pham WHERE sp_id=".$id;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }
    function load_spcl($id,$dm_id){
        // $iddm = $_GET['id'];
        $sql = "SELECT * FROM san_pham WHERE dm_id='$dm_id' AND sp_id <>".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id, $tensp, $giasp, $hinh, $tacgia, $mota, $iddm){
        if ($hinh !='') {
            $sql = "UPDATE `san_pham` SET  `sp_name`= '$tensp', `sp_price`= '$giasp', `sp_img`= '$hinh', `sp_gia_moi`= '$tacgia', `sp_mota`= '$mota',`dm_id` = '$iddm' WHERE `sp_id`=".$id;           
        }else {
            $sql = "UPDATE `san_pham` SET  `sp_name`= '$tensp', `sp_price`= '$giasp',`sp_gia_moi`= '$tacgia', `sp_mota`= '$mota', `dm_id`= '$iddm' WHERE `sp_id`=" .$id;           
        }
        // echo $sql;die;
         pdo_execute($sql);
    }
?>


<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan)
    {
        $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) VALUES('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idpro)
    {
        $sql = "SELECT binhluan.*, tai_khoan.tk_name, san_pham.sp_name
        FROM binhluan 
        LEFT JOIN tai_khoan ON binhluan.iduser = tai_khoan.tk_id 
        LEFT JOIN san_pham ON binhluan.idpro = san_pham.sp_id 
        WHERE 1";
        if ($idpro > 0) {
            $sql .= " AND idpro='$idpro'";
        }
    
        $sql .= " ORDER BY id DESC";
    
        $list_binhluan = pdo_query($sql);
        return $list_binhluan;
    }
    function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id=" . $id;
    pdo_execute($sql);
}
function load_usermame($iduser)
{
    $sql="SELECT*FROM binhluan";
    if ($iduser > 0) {
        $taikhoan = pdo_query_one($sql);
        extract($taikhoan);
        return $tk_name;
    } else {
        return "";
    }

}

?>

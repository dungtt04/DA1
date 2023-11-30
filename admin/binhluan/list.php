<style>
    .frmlist_pro table{
        width: 100&;
    }

</style>
<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="row frmcontent ">
            <div class="row frm_dm frmlist_pro">
                                        <table>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>NỘI DUNG BÌNH LUẬN</th>
                                <th>USER</th>
                                <th>ID product</th>
                                <th>Ngày bình luận</th>
                                <th>Thao tác</th>
                            </tr>
                            <?php
                                foreach ($binh_luan as $bl) {
                                    extract ($bl);
                                    // $suabl="index.php?act=suabl&id=".$id;
                                    $xoabl="index.php?act=xoabl&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$tk_name.'</td>
                                    <td>'.$sp_name.'</td>
                                    <td>'.$ngaybinhluan.'</td>
                                    <td> <a href="' . $xoabl . '"><i class="fa-solid fa-trash fa-fade fa-xl" style="color: #020c1d;"></i></a> </td>
                                    </tr>';
                                }
                            ?>
                        </table>
                    </div>

            </div>
        </div>

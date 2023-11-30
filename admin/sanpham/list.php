<div class="row">
    <div class="row  mb">
        <h2 class="tieude">DANH SÁCH SẢN PHẨM</h2>
    </div>
    <form class="frm_search" action="?act=listsp" method="POST">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo ' <option value="'.$dm_id.'">'.$dm_name.'</option>';
            }
            ?>
        </select>
        <div class="searchh">
            <input type="text" placeholder="Nhập tên sản phẩm" name="kyw">
            <input type="submit" name="listok" value="Go">
        </div>
    </form>
    <div class="row mb10" style="text-align: end;text-decoration: none;">
        <a style="text-decoration: none;" href="index.php?act=addsp">Nhập Thêm</a>
    </div>
    <div class="row frm_content">
        <div class="frm_dm">
            <table>
                <tr>
                    <th>LOẠI SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>GIÁ</th>
                    <th>GIÁ MỚI</th>
                    <th>SỐ</th>
                    <th>LƯỢT XEM</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $editsp = "index.php?act=editsp&id=".$sp_id;
                    $deletesp = "index.php?act=deletesp&id=".$sp_id;
                    $hinhpath = "../upload/" . $sp_img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img class='img_sp' src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "Ko có hình";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    foreach ($listdanhmuc as $dm) {
                        extract($dm);
                        // var_dump($dm);
                        if ($dm['dm_id'] == $sanpham['dm_id']) {
                        echo '<tr>
                                <td>'.$dm_name.'</td>';
                        }
                    }
                       echo
                            '<td>' . $hinh . '</td>
                            <td>' . $sp_name . '</td>
                            <td>' . $sp_price . '</td>
                            <td>' . $sp_gia_moi . '</td>
                            <td>' . $sp_quantity . '</td>
                            <td>' . $sp_luotxem . '</td>
                            ';        
                ?>
                 <td> <a href="<?php echo $editsp ?>"><i class="fa-regular fa-pen-to-square fa-fade fa-xl" style="color: #20365a;"></i></a> 
                 | <a  onclick="return confirm('Bạn có muốn xóa không?')" href="<?php echo $deletesp ?>"> <i class="fa-solid fa-trash fa-fade fa-xl" style="color: #020c1d;"></i></a> </td>
                </tr>
<?php }?>
            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=addsp"><input class="add_css" type="button" name="" id="" value="Nhập Thêm"></a>
        </div>
    </div>
    <?php if (isset($thongbao)) {
    # code...
    echo $thongbao;
}

?>
</div>
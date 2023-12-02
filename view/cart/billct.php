<div class="row ">
    <a href="index.php?act=mybill"><i class="fa-solid fa-arrow-right fa-rotate-180 fa-2xl"></i></a>
    <div class="card main-web"><br>
        <h1>Chi Tiết Đơn Hàng</h1><br>
        <table class="frm_dm" style="width: 98%; font-size: 17px; margin-left: 1%;">
            <thead>
                <tr>
                    <th style=" border-bottom:1px solid green; " class="text-center">Mã đơn hàng</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Tên khách hàng</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Hình ảnh sản phẩm</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Tên sản phẩm</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Số lượng sản phẩm</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Giá sản phẩm</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Tổng giá trị đơn hàng</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Ngày đặt</th>
                    <th style=" border-bottom:1px solid green; " class="text-center">Tình trạng đơn hàng</th>
                    <!-- <th style=" border-bottom:1px solid green" class="text-center">Bill Cỏmim</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listbillct as $value):
                    extract($value);
                    $huydh='index.php?act=huydh&id='.$bill_id;
                    //  echo '<pre>';
                    // var_dump($value);    
                    $trangthai = trangthai($bill_trangthai);
                    // $soluong = loadall_cart_count($bill_id)
                        ?>
                    <tr>
                        <td style="padding:10px" class="text-center">H2-
                            <?= $bill_id; ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $bill_name; ?>
                        </td>
                        <td style="padding:10px; width: 20px;" class="text-center"><img style="width: 80px;"
                                src="<?= $cart_img; ?>" alt=""></td>
                        <td style="padding:10px" class="text-center">
                            <?= $cart_name; ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $cart_soluong ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $cart_price ?>.000
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= number_format($bill_tongtien) ?>.000vnd
</td>
<td style="padding:10px" class="text-center">
                            <?= $bill_ngaydat; ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $trangthai ?>
                        </td>
                        <td><a href="<?=$huydh?>" class="btn2 btn-success">Hủy đơn</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <?php

            ?>
        </table>
    </div>
</div>
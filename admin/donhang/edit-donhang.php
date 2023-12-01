<div>
  <h3 style="text-align:center;">CẬP NHẬT ĐƠN HÀNG</h3>
  <form action="?act=updatedh" method="post">
    <?php
    if (is_array($dh)) {
      extract($dh);
      // var_dump ($dh);
    }
    $soluong = loadall_cart_count($bill_id);
    ?>
    <div class="mb-3">
      <label for="name" class="form-label">Mã đơn hàng</label>
      <input type="text" class="form-control" name="iddh" value="<?= $bill_id; ?>" readonly> <br>
      <!-- <label for="name" class="form-label">Họ tên người nhận:  <?= $bill_name; ?></label> <br>
      <label for="name" class="form-label">Địa chỉ: <?= $bill_diachi; ?></label> <br>
      <label for="name" class="form-label"> Email:  <?= $bill_email; ?></label> <br>
      <label for="name" class="form-label"> Số điện thoại: <?= $bill_tel; ?></label> <br>
      <label for="name" class="form-label">Số lượng đơn: <?= $soluong; ?></label> <br>
      <label for="name" class="form-label">Tổng tiền: <?= number_format($bill_tongtien); ?></label> <br>
      <label for="name" class="form-label"> Ngày đặt: <?= $bill_ngaydat; ?></label> -->
    </div>
    <div class="card main-web"><br>
        <!-- <h1>Chi Tiết Đơn Hàng</h1><br> -->
        <table class="frm_dm" style="width: 98%; font-size: 17px; margin-left: 1%;">
            <thead>
                <tr>
                    <!-- <th style=" border-bottom:1px solid green; " class="text-center">Mã đơn hàng</th> -->
                    <th style=" border-bottom:1px solid green; " class="text-center">Tên khách hàng</th>
                    <!-- <th style=" border-bottom:1px solid green; " class="text-center">Hình ảnh sản phẩm</th> -->
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
                        <!-- <td style="padding:10px" class="text-center">H2-
                            <?= $bill_id; ?>
                        </td> -->
                        <td style="padding:10px" class="text-center">
                            <?= $bill_name; ?>
                        </td>
                        <!-- <td style="padding:10px; width: 20px;" class="text-center"><img style="width: 80px;"
                                src="<?= $cart_img; ?>" alt=""></td> -->
                        <td style="padding:10px" class="text-center">
                            <?= $cart_name; ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $cart_soluong ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $cart_price ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= number_format($bill_tongtien) ?>vnd
</td>
<td style="padding:10px" class="text-center">
                            <?= $bill_ngaydat; ?>
                        </td>
                        <td style="padding:10px" class="text-center">
                            <?= $trangthai ?>
                        </td>
                        <!-- <td><a href="<?=$huydh?>" class="btn2 btn-success">Hủy đơn</a></td> -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <?php

            ?>
        </table>
    </div>

    <div class="mb10 ">
 
      <label for="name" class="form-label">Tình trạng đơn hàng</label>
      <select class="form-select" name="ttdh" aria-label="Default select example">
          <option value="0" <?php echo ($bill_trangthai==0) ? "selected" : ""; ?>>
          Đơn hàng chờ xác nhận
        </option>
        <option value="1" <?php echo ($bill_trangthai == 1) ? "selected" : ""; ?>>
          Đơn hàng đã được xác nhận
        </option>
        <option value="2" <?php echo ($bill_trangthai == 2) ? "selected" : ""; ?>>
          Đơn hàng đang được giao
        </option>
        <option value="3" <?php echo ($bill_trangthai == 3) ? "selected" : ""; ?>>
          Đơn hàng giao thành công
        </option>
        <option value="4" <?php echo ($bill_trangthai==4) ? "selected" : ""; ?>>
          Hủy đơn hàng
          </option>
      </select>
    </div>
    <button type="submit" name="updatedh" class="add_css">Cập Nhật</button>

  </form>
</div>
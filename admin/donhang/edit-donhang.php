<div class="col-md-8">
  <h3>Sửa đơn hàng</h3>
  <form action="?act=updatedh" method="post">
    <?php
    if (is_array($dh)) {
      extract($dh);
      // var_dump ($dh);
    }
    ?>
    <div class="mb-3">
      <label for="name" class="form-label">Mã đơn hàng</label>
      <input type="text" class="form-control" name="iddh" value="<?= $bill_id; ?>" readonly> <br>

      <label for="name" class="form-label">Tình trạng đơn hàng</label>
      <select class="form-select" name="ttdh" aria-label="Default select example">
          <option value="0" <?php echo ($bill_trangthai==0) ? "selected" : ""; ?>>
          Đơn hàng chờ xác nhận
          </option>
          <option value="1" <?php echo ($bill_trangthai==1) ? "selected" : ""; ?>>
          Đơn hàng đã được xác nhận
          </option>
          <option value="2" <?php echo ($bill_trangthai==2) ? "selected" : ""; ?>>
          Đơn hàng đang được giao
          </option>
          <option value="3" <?php echo ($bill_trangthai==3) ? "selected" : ""; ?>>
          Đơn hàng giao thành công
          </option>
          <option value="3" <?php echo ($bill_trangthai==4) ? "selected" : ""; ?>>
          Hủy đơn hàng
          </option>
      </select>
    </div>
    <button type="submit" name="updatedh" class="btn btn-success">Cập Nhật</button>

  </form>
</div>
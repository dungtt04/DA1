<style>
      .dh{
        padding-left: 572px;
    }
    .dh-content{
        display: flex;
        align-items: center;
    }
    .dh_content .dh_content1{
        width: 200px;
        text-align: left;
    }
    h1{
      text-align: center;
      font-weight: bold;
      font-size: 25px;
    }
    .frm_dm table {
    width: 100%;
    /* border-collapse: collapse; */
}
.frm_dm {
    /* width: 100%; */
}
.frm_dm table tr th,td{
    padding: 15px;
     text-align: center;
 
 }
.frm_dm table th{
    border-bottom: 2px solid green;

}

</style>
<!-- <div class="row mt-4 main-web">
  <div class="col-md-12 pr-0 pl-0">
    <div class="card mt-5"> -->
      <h1>ĐƠN HÀNG CỦA TÔI</h1>
      
    <div class="row frm_dm frmlist_pro">
      <table class="table ">
            <tr>
                <th class="text-center">Mã đơn hàng</th>
                <th class="text-center">Ngày đặt</th>
                <th>Thông tin khách hàng</th>
                <th class="text-center">Tình trạng đơn hàng</th>
                <th></th>
            </tr>

            <?php
            foreach ($listbill as $value) :
                extract($value);
                $ctdh='index.php?act=ls_bill&id='.$bill_id;
                $trangthai=trangthai($bill_trangthai);
                $soluong=loadall_cart_count($bill_id);
            ?>
            <tr>
                <td class="text-center">H2-<?=$bill_id?></td>
                <td class="text-center"><?=($bill_ngaydat);?></td>
                <td style="text-align: left">
                  Tên khách hàng: <?=$bill_name?> <br>
                  Địa chỉ: <?=$bill_diachi?> <br>
                  SĐT: <?=$bill_tel?> <br>


                </td>
                <td class="text-center"><?=$trangthai?></td>
                <td><a href="<?=$ctdh?>" class="btn2 btn-success">Chi tiết</a></td>
            </tr>
            <?php endforeach;?>
        <?php
       
        ?>
      </table>
    </div>
    <!-- </div>
  </div>
</div> -->
<style>
    .card-header{
        font-size: 25px;
        font-weight: bold;
        color: green;
    }
    .card-header1{
        font-size: 20px;
        font-weight: bold;
        color:var(--blaack);
    }
    .card-header1:hover{
        font-size: 20px;
        font-weight: bold;
        color:var(--green);
    }
    .mt-4{
        font-size: 15px;
        margin-bottom: 20px;
    }
    .table-content{
        display: flex;
        justify-content:center;
        width: 70%;
        text-align: left;
    }
    .dh{
        padding-left: 572px;
        text-align: left;
    }
    .dh-content{
        display: flex;
        text-align: left;
        align-items: center;
    }
    .dh_content .dh_content1{
        width: 200px;
        text-align: left;
    }
</style>
<div class="row mt-4 main-web">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-header">CẢM ƠN</div>
            <table class="table">
                <p class="text-center mt-4">Cảm ơn quý khách đã đặt hàng!!!</p>
                <hr>
                <hr>
            </table>
        </div>
    </div>
    <?php
    if (isset($bill) && is_array($bill)) {
        extract($bill);
        // var_dump($bill);
        // die();
    }
    ?>
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-header1">THÔNG TIN ĐƠN HÀNG</div>
            <div class="dh">
            <div class="dh-content">
                <div class="dh-content1">Mã đơn hàng: </div>
                <div class="dh-content2">DAM <?=$idbill?></div>
            </div>
            <div class="dh-content">
                <div class="dh-content1">Ngày đặt hàng:</div>
                <div class="dh-content2"> <?=$ngaydathang?></div>
            </div>
            <div class="dh-content">
                <div class="dh-content1">Tổng:</div>
                <div class="dh-content2"><?= number_format($bill_tongtien).'.000 VNĐ' ?></div>
            </div>
            <!-- <div class="dh-content">
                <div class="dh-content1">Hình thức thanh toán:</div>
                <div class="dh-content2"><?php
                        if ($bill_pttt==0) {
                            echo "Trả tiền khi nhận hàng";
                        }
                        if ($bill_pttt==1) {
                            echo "Chuyển khoản ngân hàng";
                        }
                        if ($bill_pttt==2) {
                            echo "Thanh toán online";
                        }                        
                        ?>
                </div>
            </div> -->
            </div>

        </div>
    </div>
    <form action="?act=ctbill" method="post">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header1">Thông tin đặt hàng</div>
                <div class="dh">
            <div class="dh-content">
                <div class="dh-content1">Khách hàng: </div>
                <div class="dh-content2">DAM <?=$name?></div>
            </div>
            <div class="dh-content">
                <div class="dh-content1">Địa chỉ:</div>
                <div class="dh-content2"> <?=$address?></div>
            </div>
            <div class="dh-content">
                <div class="dh-content1">SỐ điện thoại: </div>
                <div class="dh-content2"> <?=$tel?></div>
            </div>
            <div class="dh-content">
                <div class="dh-content1">Email:  </div>
                <div class="dh-content2"> <?=$tel?></div>
            </div>
            <!-- <div class="row frm_dm frmlist_pro">

                <table class="">
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td> <input class="w-100" type="text" name="diachi" value="<?php echo $address; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <input class="w-100" type="text" name="email" value="<?php echo $email; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td> <input class="w-100" type="text" name="std" value="<?php echo $tel; ?>"> </td>
                    </tr>
                </table>
            </div> -->
        </div>
        <div class="row mt-4 main-web">
            <div class="col-md-12 pr-0 pl-0">
                <div class="card mt-5">
                    <div class="card-header1">SẢN PHẨM BẠN MUA</div>
                    <div class="row frm_dm frmlist_pro">

                    <table class="table">
                        <?php
                        bill_chitiet($billct);
                        // viewcart(0);
                        ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<style>
    .frm_dm table {
    width: 100%;
    /* border-collapse: collapse; */
}
.frm_dm {
    /* width: 100%; */
}

.frm_dm table th{
    border-bottom: 2px solid green;

}
`.card-header{
    font-size: 30px;
}
</style>
<div class="row mt-4 main-web" style="text-align: center;">
    <form action="?act=confirmbill" method="post">
        <div class="col-md-12">
            <div class="card mt-5">
                <?php
                if (!isset($_SESSION['user'])) {
                    $name = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                } else {
                    $name = $_SESSION['user']['tk_name'];
                    $address = $_SESSION['user']['tk_address'];
                    $email = $_SESSION['user']['tk_email'];
                    $tel = $_SESSION['user']['tk_tel'];
                }
                ?>
                <div style="font-size: 30px; font-weight:bold; ">Thông tin đặt hàng</div>
                <table class=" table table2" style="text-align:left">
                    <tr class="tr">
                        <td>Người đặt hàng</td>
                        <td> <input class="w-100" type="text" name="userbuy" value="<?php echo $name; ?>" required> </td>
                    </tr>
                    <tr class="tr">
                        <td>Địa chỉ</td>
                        <td> <input class="w-100" type="text" name="diachi" value="<?php echo $address; ?>" required> </td>
                    </tr>
                    <tr class="tr">
                        <td>Email</td>
                        <td> <input class="w-100" type="text" name="email" value="<?php echo $email; ?>"> </td>
                    </tr>
                    <tr class="tr">
                        <td>Số điện thoại</td>
                        <td> <input class="w-100" type="text" name="std" value="<?php echo $tel; ?> " required > </td>
                    </tr>
                    <tr class="tr">
                        <td>Thông tin thanh toán</td>
                        <td class="tttt">
                            <div><input type="radio" name="pttt" value="0" checked> <span class="mx-2">Thanh toán khi nhận hàng</span></div>
                            <div><input type="radio" name="pttt" value="1"> <span class="mx-2"> Chuyển khoản ngân hàng </span></div>
                            <div><input type="radio" name="pttt" value="2"> <span class="mx-2"> Thanh toán online</span></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mt-4 main-web">
            <div class="col-md-12 pr-0 pl-0">
                <div class="card mt-5">
                    <div style="font-size: 30px; font-weight:bold; ">Thông Tin Đơn hàng</div>
                    <table class="table" style="width: 100%; text-align:left;">
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                    <div class="text-right">
                        <input type="submit" name="gui" class="btn btn-success w-25 mb-3 mx-3" value="Đồng ý đặt hàng"></input>
                        <!-- <input class="btn btn-success w-25 mb-3 mx-3" value="Đồng ý đặt hàng" readonly></input> -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
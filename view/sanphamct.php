<style>
    .box_bl {
        margin-top: 22px;
    }
    .btn_success2{
        background-color: red;
    }
    .frm_bl {
        text-align: center;
        font-size: medium;
        margin-top: 30px;
        border-top: 1px solid;
    }
    .tt{
        display: flex;
        Justify-content: center;
    }
    .spk a {
        color: green;
    }

    .spk {
        text-align: center;
        font-size: 20px;
        margin-top: 50px;
        font-weight: bold;
    }

    .tietl_cl {
        text-align: center;
        margin: 30px;
        border-top: 1px solid;
        border-bottom: 1px solid;
    }

    .sp_cungloai {
        margin-top: 50px;
        font-size: 13px;
    }

    .price {
        color: red;
        font-weight: bold;
        font-size: 15px;
    }

    .product_cl .spcl_img img {
        width: 230px;
    }

    .product_cl {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 0.1%;
        text-align: center;

    }

    .product {
        /* height: 900px; */
        height: auto;
    }

    .product-content {
        margin: 0px auto;
        width: 80%;
        margin-top: 30px;
        height: auto;
        display: flex;
    }

    .product-content-left {
        width: 50%;
        /* float: left; */
        margin-top: 50px;
    }

    .product-content-right {
        width: 50%;
        float: left;
        margin-top: 50px;
        border-radius: 13px;
        background-color: rgb(243, 244, 247);

    }

    .product-content-left-big-img {
        padding-right: 5px;
        display: flex;

    }

    .product-content-left-big-img img {
        width: 100%;
    }

    .product-content-left-small-img {
        width: 18%;
        display: flex;
        margin: 35px 90px;
    }

    .product-content-left-small-img img {
        width: 100%;
    }

    .name h1 {
        color: black;
        font-size: 30px;
        margin-bottom: 15px;
    }

    .name {
        margin-left: 30px;
    }

    .name p {
        margin-bottom: 20px;
    }

    .price {
        margin: 20px 30px;
    }

    .price p {
        color: rgb(235, 22, 22);
        font-size: 20px;
        margin-bottom: 20px;
    }

    .quantyti {
        margin: 20px 30px;
        display: flex;
        margin-bottom: 20px;
    }

    .quantyti p {
        font-size: 14px;
    }

    .quantyti input {
        width: 30px;
        padding-left: 3px;
        text-align: center;
        cursor: pointer;
        border: 1px solid #ececec;
    }

    .quantyti button {
        width: 20px;
        height: 20px;
        outline: none;
        background: none;
        border: 1px solid #ececec;
        cursor: pointer;
    }

    .quantyti button:hover {
        background-color: #d2cfcf;
    }

    .dathang {
        Display: Flex;
        Justify-Content: Space-Around;
    }

    .dathang button {
        float: left;
        width: auto;
        height: 40px;
        margin: 20px 20px;
        border-radius: 15px;

    }

    .dathang button p {
        font-size: 15px;
    }

    .muangay{
        background-color: var(--blaack);
    }
    .muangay a{
        color: #FFF;
    }
    .muangay:hover {
        background-color: var(--green);
    }

    .themgiohang:hover {
        background-color: #C9420D;
    }

    .themgiohang {
        color: #ffffff;
        background-color: #dfbbad;
    }

    .tinhtrang {
        font-size: 20px;
        margin: 20px 30px;
    }

    .tinhtrang1 {
        opacity: 0.7;
        float: left;
    }

    .tinhtrang2 {
        font-size: 20px;
        float: left;
        color: green;
    }
    .tinhtrang3 {

        float: left;
        color: red;
    }

    .TG1 {
        float: left;
    }

    .TG2 {
        color: #C9420D;
    }

    .NXB1 {
        float: left;
    }

    .NXB2 {
        color: #C9420D;
    }

    .thongtin {
        margin: 30px 30px;
        font-weight: bold;

    }

    .thongtin span {
        font-size: 17px;
    }

    .thongtin p {
        padding-top: 10px;
        font-size: 15px;
    }

    .fstq1 {
        float: left;
    }

    .fstq2 {
        color: #C9420D;
    }

    .fsnt1 {
        float: left;
    }

    .fsnt2 {
        color: #C9420D;
    }

    .noidung {
        border-top: 1px #dddddd solid;
        margin: 20px 30px;
    }

    .nd1 {
        font-weight: bold;
        font-size: 25px;
    }

    .nd2 {
        font-size: 14px;

    }
    .stars{
        margin: 0px 20px;
        color:rgba(206, 206, 7, 0.941)
    }
</style>
<div class="product">
    <?php
    extract($onesp);
    $sp_img = $img_path . $sp_img;
    ?>
    <div>
        <?php echo ' <form action="?act=addtocart" method="POST" class="product-content ">
        <div class="product-content-left ">
            <div class="product-content-left-big-img">
                <img src="' . $sp_img . '" alt="">; 
            </div>
            <div class="product-content-left-small-img">
                <img src= ' . $sp_img . ' alt="">
                <img src= ' . $sp_img . ' alt="">
                <img src= ' . $sp_img . ' alt="">
            </div>
        </div>
        <div class="product-content-right">
            <div class="name">
                <h1>
                    ' . $sp_name . '
                </h1>
            </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>

            <div class="price">
                <p>GIÁ BÁN :
                    ' . $sp_price . '.000<sup></sup>
                </p>
            </div>

            <div class="quantyti">
            '; 
            if ($sp_quantity>0) {
                echo '<p style="font-weight: bold;">SỐ LƯỢNG : </p>
                <input type="text" name="" onclick="handleMinus()" value="-" readonly>
                <input type="text" name="amount" id="amount" value="1">
                <input type="text" name="" onclick="handlePlus()"  value="+" readonly>';
            }
            echo '

                <input type="hidden" name="idsp" value="' . $sp_id . '">
                <input type="hidden" name="namesp" value="' . $sp_name . '">
                <input type="hidden" name="img" value="' . $sp_img . '">
                <input type="hidden" name="price" value="' . $sp_price . '">
            </div>
            '; 
            if ($sp_quantity>0) {
                echo '            <div class="tinhtrang">
                <p class="tinhtrang1">Tình Trạng: </p>
                <p class="tinhtrang2">Còn hàng </p>
            </div>
';
             } else{
                echo '            <div class="tinhtrang">
                <p class="tinhtrang1">Tình Trạng: </p>
                <p class="tinhtrang3">Hết hàng </p>
            </div>
';
             }
            if ($sp_quantity>0) {
                echo '<div class="dathang">
                <button type="submit" name="addtocart" class="btn2 btn-success ">Thêm giỏ hàng</button>
                </form>
                <form action="index.php?act=buynow" method="post">
                <input type="hidden" name="idsp" value="' . $sp_id . '">
                <input type="hidden" name="namesp" value="' . $sp_name . '">
                <input type="hidden" name="img" value="' . $sp_img . '">
                <input type="hidden" name="price" value="' . $sp_price . '">
                <button type="submit" name="buynow" class="btn2 btn-success ">Mua ngay</button>
            </form>

                
            </div>';
            } else {
                echo ' <br> <br> <p class=" btn-success2">SẢN PHẨM HẾT HÀNG</p>
                </form>';
            }
            
             echo '
            <div class="thongtin">
                <span>Thông tin & Khuyến mãi </span>
                <p>Đổi trả hàng trong vòng 7 ngày</p>
                <div class="fsnt">
                    <p class="fsnt1">Freeship nội thành Sài Gòn từ</p>
                    <p class="fsnt2">: 150.000đ*</p>
                </div>
                <div class="fstq">
                    <p class="fstq1">Freeship toàn quốc từ </p>
                    <p class="fstq2">: 250.000đ</p>
                </div>
            </div>
            <div class="noidung">
                <p class="nd1">Mô tả sản phẩm<br></p>
                <P class="nd2">
                    "' . $sp_mota . '"
                </P>
            </div>
        </div>
        </form>'; ?>

    </div>
</div>

<div class="sp_cungloai">
    <div class="tietl_cl">
        <h2>Sản Phẩm Cùng Loại </h2>
    </div>
    <div class="product_cl">
        <?php
        foreach ($spcl as $spcl) {
            extract($spcl);
            $sp_img = $img_path . $sp_img;
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            // echo '<li><a href="'.$linksp.'">'.$sp_name.'</a></li>';
            echo '
                                <div class="pro_cl">
                                    <div class="spcl_img">
                                    <a href="' . $linksp . '"><img src="' . $sp_img . '" alt=""></a>
                                        </div>
                                        <div class="tiet_spcl">
                                            <span class="price">$ ' . $sp_price . '</span>
                                            <h2><a href="' . $linksp . '">' . $sp_name . '</a></h2>
                                        </div>
                            </div>';
        }
        ?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#binhluan").load("view/binhluan/binhluanform.php", { idpro: <?php echo $id ?> });
    });
</script>

<div class="row" id="binhluan">

</div>


<script>
    let amountElement = document.getElementById('amount');
    let amount = amountElement.value;
    // console.log(amount);
    let render = (amount) => {
        amountElement.value = amount
    }
    //HandelPlus
    let handlePlus = () => {
        amount++;
        render(amount);
    }
    //handel Minus
    let handleMinus = () => {
        if (amount > 1)
            amount--;
        render(amount);
    }
    amountElement.addEventListener('input', () => {
        amount = amountElement.value;
        amount = parseInt(amount);
        amount = (isNaN(amount) || amount == 0) ? 1 : amount;
        render(amount);

    });
</script>
</body>

</html>
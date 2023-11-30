<style>
    .btn-success3{
        padding: 10px 10px;

        display: inline-block;
    color: #fff;
    background-color: red;
    border-radius: 0.5rem;
    /* cursor: pointer; */
    font-weight:bold;
}
    .btn-success3:hover{
        background-color: var(--green);
    }
    .h3-content{
        font-size: 30px;
    }
</style>
<!-- dishes sectionl starts -->
<section class="home" id="home">

<div class="swiper mySwiper home-slider">

    <div class="swiper-wrapper wrapper">

        <!-- <div class="swiper-slide slider"> -->
        <!-- <div class="content">
        <span>our special diesh</span>
        <h3>Sơ mi trắng</h3>
        <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
        <a href="#" class="btn">order now</a>
    </div>
    <div class="image">
        <img src="image/home-img-1.jpg" alt="">
    </div> -->

        <?php
        include "global.php";
        $spnew = loadall_sanpham_home();
        foreach ($spnew as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $hinh = $img_path . $sp_img;
            echo '<div class="swiper-slide slider">
                    <div class="content">
                      
                        <h3>    <a href="' . $linksp . '">' . $sp_name . '</a></h3>
                        <p>'.$sp_mota.'</p>
                        <a href="'.  $linksp.'" class="btn">Xem Chi Tiết</a>
                    </div>
                    <div class="image" style="width: 90%; margin-left: 20px;">
                    <img src="' . $hinh . '" alt="">
                    </div>
                </div>';
        }
        ?>
        <!-- </div> -->
        <!-- <div class="swiper-slide slider">
</div> -->
    </div>
    <!-- <div class="swiper-pagination"></div> -->
</div>
</section>

<section class="dishes" id="dishes">

    <h3 class="sub-heading"> TOP SẢN PHẨM YÊU THÍCH</h3>
    <h1 class="heading">  </h1>

    <div class="box-container">
        <?php
        $dsspyt = loadall_spyt();
        foreach ($dsspyt as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $sp_img = $img_path . $sp_img;
            echo ' <div class="box">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="' . $linksp . '"><img src="' . $sp_img . '" alt=""></a>
                        <h3><a href="' . $linksp . '">' . $sp_name . '</a></h3>
                      <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                    ';
                    ?>


                        <span><?= $sp_gia_moi?>.000 VNĐ <del><?=$sp_price?>.000 VNĐ</del></span>
                       
                        <form action="?act=addtocart" method="POST">
                               <input type="hidden" name="amount" id="amount" value="1">
                                <input type="hidden" name="idsp" value="<?= $sp_id?>">
                                <input type="hidden" name="namesp" value="<?=$sp_name?>">
                                <input type="hidden" name="img" value="<?=$sp_img?>">
                                <input type="hidden" name="price" value="<?=$sp_price?>">
                                <?php
                                                                if ($sp_quantity>0) {
                                                                    echo '<div class="dathang">
                                                                    <button type="submit" name="addtocart" class="btn2 btn-success ">Thêm giỏ hàng</button>
                                                                    </form>
                                                    
                                                                    
                                                                </div>';
                                                                } else {
                                                                    echo '  <div class=" btn-success3">SẢN PHẨM HẾT HÀNG</div>
                                                                    </form>';
                                                                }
                                
                                ?>
                                </form>
                     </div>
        <?php
                    }
        ?>
    </div>
</section>

<!-- dishes sectionl ends -->

<!-- about section starts -->

<section class="about" id="about">

    <h3 class="sub-heading">SẢN PHẨM ĐƯỢC YÊU THÍCH NHẤT </h3>
    <h1 class="heading"> </h1>

    <div class="row">
        <?php
        $onespyt = loadone_spyt();
        foreach ($onespyt as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $sp_img = $img_path . $sp_img;
            echo '
                <div class="image" style="width: 39%;  text-align: center;">
                    <a href="' . $linksp . '"><img src="' . $sp_img . '" alt=""></a>
                </div>
                
                ';
        }
        ?>
        <div class="content">
           <?php
            echo  "<h3> $sp_name</h3>
            <h2>Giá Mới : $sp_gia_moi</h2>
            <p>$sp_mota</p>";
                 ?>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="<?=  $linksp?>" class="btn">Xem Chi Tiết</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu setions starts -->

<setion class="menu" id="menu">

    <h3 class="sub-heading">TẤT CẢ SẢN PHẨM </h3>
    <h1 class="heading">  </h1>

    <div class="box-container">
        <?php
        $spnew = loadall_sanpham_home();
        foreach ($spnew as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $sp_img = $img_path . $sp_img;
            echo ' <div class="box">
                        <div class="image img2">
                            <img src="' . $sp_img . '" alt="">
                            <a href="#" class="fas fa-heart"></a> <!--Trái tim-->
                        </div>

                        <div class="content">
                            <h3><a href="' . $linksp . '">' . $sp_name . '</a></h3>
                            <div class="stars">
                            <i class="fas fa-star"></i> <!--Ngôi sao-->
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>

                                <span class="price">' . $sp_gia_moi .'VNĐ</span>
                                <span class="price"><del>' . $sp_price .'VNĐ</del></span>
                                ';
                       
                                if ($sp_quantity>0) {
                                    echo '<div class="dathang">
                                    <button type="submit" name="addtocart" class="btn2 btn-success ">Thêm giỏ hàng</button>
                                    </form>
                    
                                    
                                </div>';
                                } else {
                                    echo ' <br> <br> <div class=" btn-success3">SẢN PHẨM HẾT HÀNG</div>
                                    </form>';
                                }
                    echo'
                        </div>
                    </div>';
        }
        ?>
    </div>

</setion>
<!-- menu setions ends -->

<!-- review section starts -->

<!-- <section class="review" id="review"> -->


<!-- </section> -->

<!-- review section ends -->
<!-- </div> -->

<!-- </section> -->

<!-- review section ends -->

<!-- oder section starts -->

<!-- <section class="oder" id="oder"> -->


<!-- </section> -->

<!-- oder section ends -->
<!-- dishes sectionl starts -->

<!-- dishes sectionl ends -->

<!-- about section starts -->


<!-- about section ends -->

<!-- menu setions starts -->

<setion class="menu" id="menu">

    <h3 class="sub-heading"> DANH SÁCH SẢN PHẨM </h3>
    <h1 class="heading">
        <?php echo $tendm ?>
    </h1>

    <div class="box-container">
        <?php
        foreach ($dssp as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $sp_img = $img_path . $sp_img;
            echo ' <div class="box">
                        <div class="image img2">
                            <a href="' . $linksp . '"><img src="' . $sp_img . '" alt=""></a>
                            <a href="" class="fas fa-heart"></a> <!--Trái tim-->
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
                                <span class="price">' . $sp_price . '.000 VNĐ</span>
                                <form action="?act=addtocart" method="POST">
                               <input type="hidden" name="amount" id="amount" value="1">
                                <input type="hidden" name="idsp" value="' . $sp_id . '">
                                <input type="hidden" name="namesp" value="' . $sp_name . '">
                                <input type="hidden" name="img" value="' . $sp_img . '">
                                <input type="hidden" name="price" value="' . $sp_price . '">';
                                if ($sp_quantity>0) {
                                    echo '<div class="dathang">
                                    <button type="submit" name="addtocart" class="btn2 btn-success ">Thêm giỏ hàng</button>
                                    </form>
                    
                                    
                                </div>';
                                } else {
                                    echo ' <br> <br> <div class=" btn-success3">SẢN PHẨM HẾT HÀNG</div>
                                    </form>';
                                }
                                echo '</form>
                        </div>
                    </div>';
        }
        ?>

        <!-- <form action="index.php?act=add_cart" method="POST">
    <input type="hidden" name="id" id="" value="'.$sp_id.'">
    <input type="hidden" name="name" id="" value="'.$sp_name.'">
    <input type="hidden" name="img" id="" value="'.$sp_img.'">
    <input type="hidden" name="price" id="" value="'.$sp_price.'">
    <a href="#" class="btn"><input type="submit" name="add_cart" id="" value="Thêm vào giỏ hàng"></a>
</form> -->


    </div>
</setion>
<!-- </setion> -->
<!-- menu setions ends -->

<!-- content -->
<div class="row margin-bot">
            <div class="box-left margin-right">
                <div class="row">
                    <div class="box-right_banner">
                        <img src="img/banner.jpg" alt="">
                    </div>
                </div>

                <div class="row">
                    <?php
                    $i=0;
                    foreach ($pro_new as $value) {
                        extract($value);
                        $linkpro="index.php?act=detailpro&idpro=".$id;
                        $img=$img_path.$pro_img;
                        if(($i==2)||($i==5)||($i==8)){
                            $margin_right="";
                        } else {
                            $margin_right="margin_right";
                        }
                        echo '<div class="box-right_product '.$margin_right.'">
                                <div class="box-right_img">
                                    <a href="'.$linkpro.'"><img src="'.$img.'" alt=""></a>
                                </div>
                                <p>'.$price.'</p>
                                <a href="'.$linkpro.'">'.$pro_name.'</a>
                                <div class="row addcart">
                                    <form action="index.php?act=addtocart" method="post">
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input type="hidden" name="pro_name" value="'.$pro_name.'">
                                        <input type="hidden" name="pro_img" value="'.$pro_img.'">
                                        <input type="hidden" name="price" value="'.$price.'">
                                        <input type="submit" name="btn_addtocart" value="Thêm vào giỏ hàng">
                                    </form>
                                </div>      
                            </div>';
                    }
                    ?>
                </div>
            </div>
            <div class="box-right">
                <?php
                include 'boxright.php';
                ?>
            </div>
        </div>
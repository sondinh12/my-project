<!-- content -->
<div class="row margin-bot">
    <div class="box-left margin-right">
        <div class="row margin-bot">
            
            <div class="box-left_title">Sản phẩm <strong><?=$nameCate?></strong></div>
            <div class="row box-left_content">
                <?php
                $i=0;
                    foreach ($listproduct as $value) {
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
                            </div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="box-right">
        <?php
        include 'boxright.php';
        ?>
    </div>
</div>
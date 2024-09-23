<!-- content -->
<div class="row margin-bot">
    <div class="box-left margin-right">
        <div class="row margin-bot">
            <?php
            extract($onepro);
            ?>
            <div class="box-left_title"><?=$pro_name?></div>
            <div class="row box-left_content">
                <?php
                extract($onepro);
                $img=$img_path.$pro_img;
                echo '<div class="row margin-bot pro_detail"><img src="'.$img.'"></div>';
                echo $detail;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                    $("#comment").load("view/comment/cmt.php", {idpro: <?= $id ?>});
            });
        </script>
        <div class="row" id="comment">
            
        </div>

        <div class="row">
            <div class="box-left_title">Sản phẩm cùng loại</div>
            <div class="row box-left_content">
                <?php
                foreach ($prosame as $values) {
                    extract($values);
                    $linksame="index.php?act=detailpro&idpro=".$id;
                    echo '<li><a href="'.$linksame.'">'.$pro_name.'</a></li>';
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
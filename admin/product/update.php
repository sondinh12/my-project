<?php
if(is_array($up_pro)){
    extract($up_pro);
}
$imgpath="../upload/".$pro_img;
if(is_file($imgpath)){
    $img="<img src='".$imgpath."' height='80'>";
} else {
    $img="No image";
}
?>

<div class="row">
            <div class="row header-admin-content"><h1>CẬP NHẬT SẢN PHẨM</h1></div>
        </div>

        <div class="row admin-form-content">
            <form action="index.php?act=update_pro" enctype="multipart/form-data" method="post">
                <div class="row margin-bot-10">
                    <!-- Mã sản phẩm <br>
                    <input type="text" disabled name="code-pro-id" id=""> -->
                    <select name="cate_id_pro">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach($listcate as $cate){
                            extract($cate);
                            if($cate_id == $cate_id_pro){
                                echo '<option value="'.$cate_id.'" selected>'.$cate_name.'</option>';
                            } else {
                                echo '<option value="'.$cate_id.'">'.$cate_name.'</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="row margin-bot-10">
                    Tên sản phẩm <br>
                    <input type="text" name="pro_name" value="<?=$pro_name?>">
                </div>
                <div class="row margin-bot-10">
                    Giá <br>
                    <input type="text" name="price" value="<?=$price?>">
                </div>
                <div class="row margin-bot-10">
                    Ảnh <br>
                    <input type="file" name="pro_img">
                    <?=$img?>
                </div>
                <div class="row margin-bot-10">
                    Mô tả <br>
                    <textarea name="detail" cols="30" rows="10"><?=$detail?></textarea>
                </div>
                <div class="row margin-bot-10">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="btn_update-pro" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listpro"><input type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                    echo $notify;  
                ?>
            </form>
        </div>
    </div>
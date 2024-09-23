<div class="row">
            <div class="row header-admin-content"><h1>THÊM MỚI SẢN PHẨM</h1></div>
        </div>

        <div class="row admin-form-content">
            <form action="index.php?act=insertpro" enctype="multipart/form-data" method="post">
                <div class="row margin-bot-10">
                    Danh mục<br>
                    <select name="cate_id_pro" >
                        <?php
                        foreach($listcate as $cate){
                            extract($cate);
                            echo '<option value="'.$cate_id.'">'.$cate_name.'</option>';
                        }
                        ?>
                        
                    </select>
                </div>
                <div class="row margin-bot-10">
                    Tên sản phẩm <br>
                    <input type="text" name="pro_name">
                </div>
                <div class="row margin-bot-10">
                    Giá <br>
                    <input type="text" name="price">
                </div>
                <div class="row margin-bot-10">
                    Ảnh <br>
                    <input type="file" name="pro_img">
                </div>
                <div class="row margin-bot-10">
                    Mô tả <br>
                    <textarea name="detail" cols="30" rows="10"></textarea>
                </div>
                <div class="row margin-bot-10">
                    <input type="submit" name="btn_insert-pro" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listpro"><input type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                    echo $notify;
                ?>
            </form>
        </div>
    </div>
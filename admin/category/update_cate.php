<?php
if(is_array($up_cate)){
    extract($up_cate);
}
?>

<div class="row">
            <div class="row header-admin-content"><h1>CẬP NHẬT HÀNG HÓA</h1></div>
        </div>

        <div class="row admin-form-content">
            <form action="index.php?act=update_cate" method="post">
                <div class="row margin-bot-10">
                    Mã loại <br>
                    <input type="text" disabled name="code-pro" id="">
                </div>
                <div class="row margin-bot-10">
                    Tên loại <br>
                    <input type="text" name="cate_name" id="" value="<?php if(isset($up_cate)&&($up_cate!="")) echo $up_cate; ?>">
                </div>

                <div class="row margin-bot-10">
                    <input type="hidden" name="id_cate" value="<?php if(isset($cate_id)&&($cate_id>0)) echo $cate_id; ?>" id="">
                    <input type="submit" name="btn_upcate" value="CẬP NHẬT"  id="">
                    <input type="reset" value="NHẬP LẠI" name="" id="">
                    <a href="index.php?act=listcate"><input type="button" value="DANH SÁCH" name="" id=""></a>
                </div>
                <?php
                    echo $notify;
                ?>
            </form>
        </div>
    </div>
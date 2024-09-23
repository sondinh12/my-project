<div class="row">
            <div class="row header-admin-content"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
        </div>

        <div class="row admin-form-content">
            <form action="index.php?act=cate" method="post">
                <div class="row margin-bot-10">
                    Mã loại <br>
                    <input type="text" disabled name="code-pro" id="">
                </div>
                <div class="row margin-bot-10">
                    Tên loại <br>
                    <input type="text" name="cate_name" id="">
                </div>

                <div class="row margin-bot-10">
                    <input type="submit" name="btn_cate" value="THÊM MỚI" name="" id="">
                    <input type="reset" value="NHẬP LẠI" name="" id="">
                    <a href="index.php?act=listcate"><input type="button" value="DANH SÁCH" name="" id=""></a>
                </div>
                <?php
                    echo $notify;
                ?>
            </form>
        </div>
    </div>
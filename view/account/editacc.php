<!-- content -->
<div class="row margin-bot">
    <div class="box-left margin-right">
        <div class="row margin-bot">
            <div class="box-left_title">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row box-left_content form-user">
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=editacc" method="post">
                    <div class="row margin-bot-10">
                        Email
                        <input type="email" name="email" placeholder="Nhập email của bạn" value="<?= $email ?>">
                    </div>
                    <div class="row margin-bot-10">
                        Tên đăng nhập
                        <input type="text" name="user" placeholder="Nhập username" value="<?= $user ?>">
                    </div>
                    <div class="row margin-bot-10">
                        Mật khẩu
                        <input type="password" name="password" placeholder="Nhập password" value="<?= $pass ?>">
                    </div>
                    <div class="row margin-bot-10">
                        Địa chỉ
                        <input type="text" name="address" placeholder="Nhập địa chỉ" value="<?= $address ?>">
                    </div>
                    <div class="row margin-bot-10">
                        Điện thoại
                        <input type="text" name="phone" placeholder="Nhập số điện thoại" value="<?= $phone ?>">
                    </div>
                    <div class="row margin-bot-10">
                        <input type="hidden" name="id" id="" value="<?= $id_user ?>">
                        <input type="submit" name="btn_upacc" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="notify">
                <?php
                if(isset($notify)&&($notify!="")){
                    echo $notify;
                }
                ?>
                </h2>
            </div>
        </div>

    </div>

    <div class="box-right">
        <?php
        include 'view/boxright.php';
        ?>
    </div>
</div>
<!-- content -->
<div class="row margin-bot">
    <div class="box-left margin-right">
        <div class="row margin-bot">
            <div class="box-left_title">QUÊN MẬT KHẨU</div>
            <div class="row box-left_content form-user">
                <form action="index.php?act=forgetpass" method="post">
                    <div class="row margin-bot-10">
                        Email
                        <input type="email" name="email" placeholder="Nhập email của bạn">
                    </div>
                    <div class="row margin-bot-10">
                        <input type="submit" name="btn_forget" value="Gửi">
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
<div class="row margin-bot">
                    <div class="box-left_title">TÀI KHOẢN</div>
                    <div class="box-left_content form-user">
                        <?php
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                        ?>
                            <div class="row form-user-margin">
                                <span class="form-user-text">Xin chào <?= $user ?></span> <br>
                            </div>
                            <div class="row form-user-margin">
                                <li>
                                    <a href="index.php?act=forgetpass"><span class="form-user-li">Quên mật khẩu</span></a>
                                </li>
                                <li>
                                    <a href="index.php?act=editacc"><span class="form-user-li">Cập nhật tài khoản</span></a>
                                </li>
                                <?php if($role==1){ ?>
                                <li>
                                    <a href="admin/index.php"><span class="form-user-li">Đăng nhập Admin</span></a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="index.php?act=logout"><span class="form-user-li">Thoát</span></a>
                                </li>
                            </div>
                        <?php
                        } else{
                        ?>
                        <form action="index.php?act=login" method="post">
                            <div class="row form-user-margin">
                                <span class="form-user-text">Tên đăng nhập</span> <br>
                                <input type="text" name="user" id="">
                            </div>
                            <div class="row form-user-margin">
                                <span class="form-user-text">Mật khẩu</span> <br>
                                <input type="password" name="password" id=""> <br>
                            </div>
                            <div class="row form-user-margin text-align">
                                <input type="checkbox" name="" id=""> <span class="form-user-text">Ghi nhớ tài khoản</span>
                            </div>
                            <div class="row form-user-margin">
                                <input type="submit" value="Đăng nhập" name="btn_login">
                            </div>
                        </form>

                        <li>
                            <a href="#"><span class="form-user-li">Quên mật khẩu</span></a>
                        </li>

                        <li>
                            <a href="index.php?act=register"><span class="form-user-li">Đăng kí thành viên</span></a>
                        </li>
                        <?php } ?>
                    </div>
                </div>

                <div class="row margin-bot">
                    <div class="box-left_title">DANH MỤC</div>
                    <div class="box-left_content2 box-left-menu">
                        <ul>
                            <!-- <li><a href="#">Đồng hồ</a></li>
                            <li><a href="#">Ba lô</a></li>
                            <li><a href="#">Máy tính</a></li>
                            <li><a href="#">Ti vi</a></li>
                            <li><a href="#">Nước hoa</a></li>
                            <li><a href="#">Máy ảnh</a></li> -->
                            <?php
                            foreach ($listCate as $value) {
                                extract($value);
                                $linkcate="index.php?act=product&cateid=".$cate_id;
                                echo '<li>
                                <a href="'.$linkcate.'">'.$cate_name.'</a>
                                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="box-left_footer box-left-search form-user">
                        <form action="index.php?act=product" method="post">
                            <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm" class="margin-bot-10">
                            <input type="submit" value="Tìm kiếm" name="btn_search" id="">
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="box-left_title">TOP 10 YÊU THÍCH</div>
                    <div class="row box-left_content">
                        <?php
                        foreach ($listpro_top10 as $value) {
                            extract($value);
                            $img=$img_path.$pro_img;
                            $linkpro_top10="index.php?act=detailpro&idpro=".$id;
                            echo '<div class="row margin-bot-10 box-left-top10">
                                    <img src="'.$img.'" alt="">
                                    <a href="'.$linkpro_top10.'" class="form-top10-text">'.$pro_name.'</a>
                                </div>';
                        }
                        ?>
                        <!-- <div class="row margin-bot-10 box-left-top10">
                            <img src="img/apple-watch-s7-41mm-xanh-duong-thumb-600x600.jpg" alt="">
                            <a href="#" class="form-top10-text">Sir Rodney's Marmalade</a>
                        </div>

                        <div class="row margin-bot-10 box-left-top10">
                            <img src="img/apple-watch-s7-41mm-xanh-duong-thumb-600x600.jpg" alt="">
                            <a href="#" class="form-top10-text">Sir Rodney's Marmalade</a>
                        </div>

                        <div class="row margin-bot-10 box-left-top10">
                            <img src="img/apple-watch-s7-41mm-xanh-duong-thumb-600x600.jpg" alt="">
                            <a href="#" class="form-top10-text">Sir Rodney's Marmalade</a>
                        </div>

                        <div class="row margin-bot-10 box-left-top10">
                            <img src="img/apple-watch-s7-41mm-xanh-duong-thumb-600x600.jpg" alt="">
                            <a href="#" class="form-top10-text">Sir Rodney's Marmalade</a>
                        </div>

                        <div class="row margin-bot-10 box-left-top10">
                            <img src="img/apple-watch-s7-41mm-xanh-duong-thumb-600x600.jpg" alt="">
                            <a href="#" class="form-top10-text">Sir Rodney's Marmalade</a>
                        </div>

                        <div class="row margin-bot-10 box-left-top10">
                            <img src="img/apple-watch-s7-41mm-xanh-duong-thumb-600x600.jpg" alt="">
                            <a href="#" class="form-top10-text">Sir Rodney's Marmalade</a>
                        </div>

                        <div class="row margin-bot-10 box-left-top10">
                            <img src="img/apple-watch-s7-41mm-xanh-duong-thumb-600x600.jpg" alt="">
                            <a href="#" class="form-top10-text">Sir Rodney's Marmalade</a>
                        </div> -->
                    </div>
                </div>
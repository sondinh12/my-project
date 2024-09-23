<div class="row">
<div class="row">
            <div class="row header-admin-content"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
        </div>

        <div class="row admin-form-content">
            <div class="row margin-bot-10 admin-list-table">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>ROLE</th>
                        <th>Địa chỉ</th>
                        <th></th>
                    </tr>
                    
                    <?php
                    foreach($listacc as $acc){
                        extract($acc);
                        $update_acc = "index.php?act=updateacc&id=".$id_user;
                        $delete_acc = "index.php?act=deleteacc&id=".$id_user;
                        echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id_user.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$role.'</td>
                                <td>'.$address.'</td>
                                <td>
                                    <a href="'.$update_acc.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$delete_acc.'"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>
                        ';
                    }
                    ?>
                </table>
            </div>

            <div class="row margin-bot-10">
                <input type="button" value="Chọn tất cả" name="" id="">
                <input type="button" value="Bỏ chọn tất cả" name="" id="">
                <input type="button" value="Xóa các mục đã chọn" name="" id="">
                <a href="index.php?act=cate"><input type="button" value="Nhập thêm" name="" id=""></a>
            </div>
        </div>
</div>
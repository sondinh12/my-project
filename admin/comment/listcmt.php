<div class="row">
<div class="row">
            <div class="row header-admin-content"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
        </div>

        <div class="row admin-form-content">
            <div class="row margin-bot-10 admin-list-table">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG</th>
                        <th>ID USER</th>
                        <th>ID PRODUCT</th>
                        <th>DATE</th>
                        <th></th>
                    </tr>
                    
                    <?php
                    foreach($listcmt as $cmt){
                        extract($cmt);
                        $update_cmt = "index.php?act=updatecmt&id=".$id_user;
                        $delete_cmt = "index.php?act=deletecmt&id=".$id_user;
                        echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$content.'</td>
                                <td>'.$id_user.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$date.'</td>
                                <td>
                                    <a href="'.$update_cmt.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$delete_cmt.'"><input type="button" value="Xóa"></a>
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
<div class="row">
<div class="row">
            <div class="row header-admin-content"><h1>DANH SÁCH LOẠI HÀNG HÓA</h1></div>
        </div>

        <div class="row admin-form-content">
            <div class="row margin-bot-10 admin-list-table">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    
                    <?php
                    foreach($listcate as $items){
                        extract($items);
                        $update_cate = "index.php?act=updatecate&id=".$cate_id;
                        $delete_cate = "index.php?act=deletecate&id=".$cate_id;
                        echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$cate_id.'</td>
                                <td>'.$cate_name.'</td>
                                <td>
                                    <a href="'.$update_cate.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$delete_cate.'"><input type="button" value="Xóa"></a>
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
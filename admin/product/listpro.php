<!-- <div class="row"> -->
<div class="row">
            <div class="row header-admin-content margin-bot-10"><h1>DANH SÁCH LOẠI HÀNG HÓA</h1></div>
        </div>
                <form action="index.php?act=listpro" method="post">
                    <input type="text" name="kyw" id="">
                    <select name="cate_id_pro">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach($listcate as $cate){
                            extract($cate);
                            echo '<option value="'.$cate_id.'">'.$cate_name.'</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" value="Go" name="listok" id="">
                </form>

        <div class="row admin-form-content">
            <div class="row margin-bot-10 admin-list-table">
                
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th>GIÁ SẢN PHẨM</th>
                        <th>LƯỢT XEM</th>
                        <th>TÙY CHỌN</th>
                    </tr>
                    
                    <?php
                    foreach($listpro as $rows){
                        extract($rows);
                        $update_pro = "index.php?act=updatepro&id=".$id;
                        $delete_pro = "index.php?act=deletepro&id=".$id;
                        $imgpath="../upload/".$pro_img;
                        if(is_file($imgpath)){
                            $img="<img src='".$imgpath."' height='80'>";
                        } else {
                            $img="No image";
                        }
                        echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$pro_name.'</td>
                                <td>'.$img.'</td>
                                <td>'.$price.'</td>
                                <td>'.$view.'</td>
                                <td>
                                    <a href="'.$update_pro.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$delete_pro.'"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>
                        ';
                    }
                    ?>
                </table>
            </div>

            <div class="row margin-bot-10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=insertpro"><input type="button" value="Nhập thêm"></a>
            </div>
        </div>
</div>
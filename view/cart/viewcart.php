<div class="row margin-bot">
    <div class="margin-right box-left">
        <div class="row margin-bot">
            <div class="box-left_title">GIỎ HÀNG</div>
            <div class="row box-left_content cart">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                    $add=0;
                    $i=0;
                    
                    foreach ($_SESSION['mycart'] as $cart) {
                        $img=$img_path.$cart[2];
                        $money=$cart[3]*$cart[4];
                        $add+=$money;
                        $delcart='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
                        echo '<tr>
                        <td><img src="'.$img.'" alt="" height="80px"></td>
                        <td>'.$cart[1].'</td>
                        <td>'.$cart[3].'</td>
                        <td>'.$cart[4].'</td>
                        <td>'.$money.'</td>
                        <td>'.$delcart.'</td>   
                    </tr>';
                    $i+=1;
                    }
                    echo '<tr>
                            <td colspan="4">Tổng đơn hàng</td>
                            <td>'.$add.'</td>
                            <td></td>
                        </tr>';
                    ?>
                    
                </table>
            </div>
        </div>
        <div class="row margin-bot bill">
            <input type="submit" value="Đồng ý đặt hàng">
            <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>
        </div>
    </div>
    
    <div class="box-right">
        <?php
        include 'view/boxright.php';
        ?>
    </div>
</div>
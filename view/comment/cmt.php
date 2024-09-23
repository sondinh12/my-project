<?php
    session_start();
    include '../../model/pdo.php';
    include '../../model/cmtModel.php';
    $idpro=$_REQUEST['idpro'];
    $listcmt=listCmt($idpro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <style>
        .box-cmt table {
            width: 90%;
            margin-left: 5%;
        }
        
        .box-cmt table td:nth-child(1){
            width: 50%;
        }

        .box-cmt table td:nth-child(2){
            width: 20%;
        }

        .box-cmt table td:nth-child(3){
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="row margin-bot">
        <div class="box-left_title">BÌNH LUẬN</div>
        <div class="box-left_content2 box-left-menu box-cmt">
            <table>
                <?php
                // echo "Nội dung bình luận ở đây: ".$idpro;
                foreach ($listcmt as $cmt) {
                    extract($cmt);
                    echo '<tr><td>'.$content.'</td>';
                    echo '<td>'.$id_user.'</td>';
                    echo '<td>'.$date.'</td></tr>';
                }
                ?>
            </table>
        </div>
        <div class="box-left_footer box-left-search form-user">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>" id="">
                <input type="text" name="content" placeholder="Nhập bình luận" class="margin-bot-10">
                <input type="submit" value="Gửi bình luận" name="btn_cmt" id="">
            </form>
        </div>

        <?php
        if(isset($_POST['btn_cmt'])&&($_POST['btn_cmt'])){
            $content=$_POST['content'];
            $idpro=$_POST['idpro'];
            $id_user=$_SESSION['user']['id_user'];  
            $date=date('h:i:sa d/m/Y');
            insert_cmt($content,$id_user,$idpro,$date);
            header("location: ".$_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>
</html>
<?php
include "../model/pdo.php";
include "header.php";
include "../model/proModel.php";
include "../model/cateModel.php";
include "../model/accModel.php";
include "../model/cmtModel.php";

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {

        // cotroller danh mục
        case 'cate':
            $notify = "";
            if(isset($_POST['btn_cate']) && ($_POST['btn_cate'])){
                $cate_name=$_POST['cate_name'];
                insert_cate($cate_name);
                $notify = "Thêm thành công";
            }
            include "category/add_cate.php";
            break;
        case 'listcate':
            $listcate = listCate();
            include "category/listcate.php";
            break;
        case 'deletecate':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                dalete_cate($_GET['id']);
            }
            $listcate = listCate();
            include "category/listcate.php";
            break;
        case 'updatecate':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $up_cate = listOne($_GET['id']);
            }
            include "category/update_cate.php";
            break;
        case 'update_cate':
            $notify = "";
            if(isset($_POST['btn_upcate']) && ($_POST['btn_upcate'])){
                $cate_name=$_POST['cate_name'];
                $id=$_POST['id_cate'];
                update_cate($id,$cate_name);
                $notify = "Cập nhật thành công";
            }
            $listcate = listCate();
            include "category/listcate.php";
            break;

        //controller sản phẩm
        case 'insertpro':
            $notify="";
            if(isset($_POST['btn_insert-pro']) && ($_POST['btn_insert-pro'])){
                $cate_id_pro=$_POST['cate_id_pro'];
                $pro_name=$_POST['pro_name'];
                $price=$_POST['price'];
                $detail=$_POST['detail'];
                $pro_img=$_FILES['pro_img']['name'];
                $target_dir="../upload/";
                $target_file=$target_dir . basename($_FILES['pro_img']['name']);
                // var_dump($_POST);
                move_uploaded_file($_FILES["pro_img"]["tmp_name"], $target_file);
                if(move_uploaded_file($_FILES["pro_img"]["tmp_name"], $target_file)){

                }else {

                }
                insert_pro($pro_name,$price,$pro_img,$detail,$cate_id_pro);
                $notify = "Thêm thành công";
            }
            $listcate = listCate();
            //var_dump($listcate);
            include "product/insert.php";
            break;
        case 'listpro':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $cate_id_pro=$_POST['cate_id_pro'];
            } else {
                $kyw='';
                $cate_id_pro=0;
            }
            $listcate = listCate();
            $listpro = listPro($kyw,$cate_id_pro);
            include "product/listpro.php";
            break;
        case 'deletepro':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                dalete_pro($_GET['id']);
            }
            $listpro = listPro("",0);
            include "product/listpro.php";
            break;
        case 'updatepro':
            $notify="";
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $up_pro = listOnePro($_GET['id']);
                // $notify = "Cập nhật thành công";
            }
            $listcate = listCate();
            include "product/update.php";
            break;
        case 'update_pro':
            $notify="";
            if(isset($_POST['btn_update-pro']) && ($_POST['btn_update-pro'])){
                $id=$_POST['id'];
                $cate_id_pro=$_POST['cate_id_pro'];
                $pro_name=$_POST['pro_name'];
                $price=$_POST['price'];
                $detail=$_POST['detail'];
                $pro_img=$_FILES['pro_img']['name'];
                $target_dir="../upload/";
                $target_file=$target_dir . basename($_FILES['pro_img']['name']);
                // var_dump($_POST);
                move_uploaded_file($_FILES["pro_img"]["tmp_name"], $target_file);
                if(move_uploaded_file($_FILES["pro_img"]["tmp_name"], $target_file)){

                }else {

                }
                update_pro($id,$cate_id_pro,$pro_name,$price,$pro_img,$detail);
                // $notify = "Cập nhật thành công";
            }
            $listcate = listCate();
            $listpro = listPro("",0);
            include "product/listpro.php";
            break;
        case 'listuser':
            $listacc = listAcc();
            include "account/listaccad.php";
            break;
        case 'cmt':
            $listcmt = listCmt(0);
            include "comment/listcmt.php";
            break;  
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";

?>
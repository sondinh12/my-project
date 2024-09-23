<?php
session_start();
include 'model/pdo.php';
include 'model/proModel.php';
include 'view/header.php';
include 'model/cateModel.php';
include 'model/accModel.php';
include 'global.php';

if(!isset($_SESSION['mycart'])){
    $_SESSION['mycart']=[];
}

$pro_new=listProHome(); 
$listCate=listCate();
$listpro_top10=listPro_top10();
if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
        case 'product':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            } else {
                $kyw="";
            }
            if(isset($_GET['cateid'])&&($_GET['cateid']>0)){
                $cate_id_pro=$_GET['cateid'];
                
            } else {
                $cate_id_pro=0;
            }
            $listproduct=listPro($kyw,$cate_id_pro);
            $nameCate=listNameCate($cate_id_pro);
            include 'view/product.php';
            break;
        case 'detailpro':
            if(isset($_GET['idpro'])&&($_GET['idpro']>0)){
                $id=$_GET['idpro'];
                $onepro=listOnePro($id);
                extract($onepro);
                $prosame=listProSame($id,$cate_id_pro);
                include 'view/detailPro.php';
            } else {
                include 'view/home.php';
            }
            break;
        case 'register':
            if(isset($_POST['btn_register'])&&($_POST['btn_register']>0)){
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['password'];
                insert_account($email,$user,$pass);
                $notify="Đăng ký thành công. Vui lòng đăng nhập để thực hiện các chức năng khác!";
            }
            include 'view/account/register.php';
            break;
        case 'login':
            if(isset($_POST['btn_login'])&&($_POST['btn_login']>0)){
                $user=$_POST['user'];
                $pass=$_POST['password'];
                $check_user=checkUser($user,$pass);
                if(is_array($check_user)){
                    $_SESSION['user']=$check_user;
                    // $notify="Bạn đã đăng nhập thành công!";
                    header('location: index.php');
                }else {
                    $notify="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
            include 'view/account/register.php';
            break;
        case 'editacc':
            if(isset($_POST['btn_upacc'])&&($_POST['btn_upacc'])){
                $user=$_POST['user'];
                $pass=$_POST['password'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $address=$_POST['address'];
                $id=$_POST['id'];
                update_acc($id,$user,$pass,$email,$phone,$address);
                $_SESSION['user']=checkUser($user,$pass);
                header('location: index.php?act=editacc');
            }
            include 'view/account/editacc.php';
            break;
        case 'forgetpass':
            if(isset($_POST['btn_forget'])&&($_POST['btn_forget'])){
                $email=$_POST['email'];
                $check_email=checkEmail($email);
                if(is_array($check_email)){
                    $notify="Mật khẩu của bạn là: ".$check_email['pass'];
                } else {
                    $notify="Email không tồn tại";
                }
            }
            include 'view/account/forgetacc.php';
            break;
        case 'logout':
            session_unset();
            header('location:index.php');
            break;
        case 'addtocart':
            if(isset($_POST['btn_addtocart'])&&($_POST['btn_addtocart'])){
                $id=$_POST['id'];
                $pro_name=$_POST['pro_name'];
                $pro_img=$_POST['pro_img'];
                $price=$_POST['price'];
                $quantity=1;
                $money=$quantity*$price;
                $proadd=[$id,$pro_name,$pro_img,$price,$quantity,$money];
                array_push($_SESSION['mycart'],$proadd);
            }
            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if(isset($_GET['idcart'])){
                array_slice($_SESSION['mycart'],$_GET['idcart'],1);
            } else {
                $_SESSION['mycart']=[];
            }
            // include 'view/about.php';
            header('location:index.php?act=viewcart');
            break;
        case 'viewcart':
            include 'view/cart/viewcart.php';
            break;
        case 'about':
            include 'view/about.php';
            break;
        case 'contact':
            include 'view/contact.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}
include "view/footer.php";
?>
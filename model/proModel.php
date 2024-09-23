<?php
function insert_pro($pro_name,$price,$pro_img,$detail,$cate_id_pro){
    $sql="insert into product(pro_name,price,pro_img,detail,cate_id_pro) values('$pro_name','$price','$pro_img','$detail','$cate_id_pro')";
    pdo_execute($sql);
}


function dalete_pro($id){
    $sql="delete from product where id=".$id;
    pdo_execute($sql);
}

function listProHome(){
    $sql="select * from product order by id desc limit 0,9";
    $listProHome=pdo_query($sql);
    return $listProHome; 
}

function listPro_top10(){
    $sql="select * from product order by view desc limit 0,10";
    $listPro_top10=pdo_query($sql);
    return $listPro_top10;
}
function listPro($kyw="",$cate_id_pro=0){
    $sql="select * from product where 1";
    if($kyw!=""){
        $sql.=" and pro_name like '%".$kyw."%'";
    }
    if($cate_id_pro>0){
        $sql.=" and cate_id_pro ='".$cate_id_pro."'";
    }
    $sql.=" order by id desc";
    $listpro = pdo_query($sql);
    return $listpro;
}

function  update_pro($id,$cate_id_pro,$pro_name,$price,$pro_img,$detail){
    if($pro_img!=""){
        $sql="update product set cate_id_pro='".$cate_id_pro."',pro_name='".$pro_name."',price='".$price."',pro_img='".$pro_img."',detail='".$detail."' where id=".$id;
    } else{
        $sql="update product set cate_id_pro='".$cate_id_pro."',pro_name='".$pro_name."',price='".$price."',detail='".$detail."' where id=".$id;
    }
    pdo_execute($sql);
}

function listNameCate($cate_id_pro){
    if($cate_id_pro>0){
        $sql = "select * from category where cate_id=".$cate_id_pro;
        $cate = pdo_query_one($sql);
        extract($cate);
        return $cate_name;
    } else {
        return "";
    }
}

function listOnePro($id){
    $sql = "select * from product where id=".$id;
    $up_pro = pdo_query_one($sql);
    return $up_pro;
}

function listProSame($id,$cate_id_pro){
    $sql = "select * from product where cate_id_pro=".$cate_id_pro." and id <>".$id;
    $listProSame=pdo_query($sql);
    return $listProSame; 
}
?>
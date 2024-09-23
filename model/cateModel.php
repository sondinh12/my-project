<?php
function insert_cate($cate_name){
    $sql="insert into category(cate_name) values('$cate_name')";
    pdo_execute($sql);
}


function dalete_cate($id){
    $sql="delete from category where cate_id=".$id;
    pdo_execute($sql);
}

function listCate(){
    $sql="select * from category order by cate_id desc";
    $listcate = pdo_query($sql);
    return $listcate;
}

function update_cate($id,$cate_name){
    $sql="update category set cate_name='".$cate_name."' where cate_id=".$id;
    pdo_execute($sql);
}

function listOne($id){
    $sql = "select * from category where cate_id=".$id;
    $up_cate = pdo_query_one($sql);
    return $up_cate;
}
?>
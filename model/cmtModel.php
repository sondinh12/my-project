<?php
function insert_cmt($content,$id_user,$idpro,$date){
    $sql="insert into comment(content,id_user,idpro,date) values('$content','$id_user','$idpro','$date')";
    pdo_execute($sql);
}

function listCmt($idpro){
    $sql="select * from comment where 1";
    if($idpro){
        $sql.=" and  idpro='".$idpro."'";
    }
    $sql.=" order by id desc";
    $listcmt=pdo_query($sql);
    return $listcmt;
}
?>
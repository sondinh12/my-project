<?php
function insert_account($email,$user,$pass){
    $sql="insert into account(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}

function checkUser($user,$pass){
    $sql = "select * from account where user='".$user."' and pass='".$pass."'";
    $check_User = pdo_query_one($sql);
    return $check_User;
}

function checkEmail($email){
    $sql = "select * from account where email='".$email."'";
    $check_Email = pdo_query_one($sql);
    return $check_Email;
}

function  update_acc($id,$user,$pass,$email,$phone,$address){
    $sql="update account set user='".$user."',pass='".$pass."',email='".$email."',phone='".$phone."',address='".$address."' where id_user=".$id;
    pdo_execute($sql);
}

function listAcc(){
    $sql="select * from account order by id_user desc";
    $listacc=pdo_query($sql);
    return $listacc;
}

?>
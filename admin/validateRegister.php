<?php
require_once('../app/models/QueryManager.php');
$queryManager = new QueryManager;
//TODO fazer validações, adicionar hash e colocar campos obrigatorios no front
if($queryManager->executeQuery('SELECT * FROM user WHERE nm_username = '.'"'.$_POST["username"].'"')){
    echo 'User already registered';
}else{
    $queryManager->executeQuery('INSERT INTO user (nm_username, nm_full_name, dt_birth, tp_gender, ds_email, nm_telephone, ds_password) VALUES ("'.$_POST["username"].'","'. $_POST["fullname"].'","'. $_POST["dateofbirth"].'","'. $_POST["gender"].'","'. $_POST["email"].'","'. $_POST["telephone"].'","'. $_POST["password"].'")');
    header("Location: /website-manager/admin/");
}

?>
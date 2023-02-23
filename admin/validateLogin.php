<?php
require_once '../vendor/autoload.php';
use App\Models\QueryManager;

$queryManager = new QueryManager;
//TODO fazer validadções e colocar campos obrigatorios no front
$row = $queryManager->executeQuery('SELECT * FROM user WHERE nm_username = '.'"'.$_POST["username"].'"');

if($_POST["username"] && $_POST["password"]){
    if($_POST["username"] == reset($row)['nm_username'] && $_POST["password"] == reset($row)['ds_password']) {
        header("Location: /website-manager/admin/home.php");
        die();
    }else{
        echo "<script>alert('incorrect login or password');</script>";
    }
} else {
    echo "<script>alert('data not provided');</script>";
}
?>
<?php
require_once('../app/models/QueryManager.php');
$queryManager = new QueryManager;
$row = $queryManager->executeQuery('SELECT * FROM user WHERE login = '.'"'.$_POST["username"].'"');
if($_POST["username"] && $_POST["password"]){
    if($_POST["username"] == $row['login'] && $_POST["password"] == $row['password']) {
        header("Location: /website-manager/admin/home.php");
        die();
    }else{
        echo "<script>alert('incorrect login or password');</script>";
    }
} else {
    echo "<script>alert('data not provided');</script>";
}
?>
<?php
require_once('../app/models/QueryManager.php');
$queryManager = new QueryManager;
$row = $queryManager->executeQuery('SELECT * FROM user WHERE login = '.'"'.$_POST["username"].'"');

if($_POST["username"] == $row['login'] && $_POST["password"] == $row['password']) {
    header("Location: /website-manager/public/home.php");
    die();
}else{
    echo "user or password invalid";
}
?>
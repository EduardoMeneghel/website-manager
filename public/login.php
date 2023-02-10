<?php
    if($_POST["username"] == 'login' && $_POST["password"] == '123') {
        header('Location: /website-manager/admin/home.php');
    }else{
        echo "user or password invalid";
    }
?>
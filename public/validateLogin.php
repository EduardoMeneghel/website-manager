<?php
    if($_POST["username"] == 'login' && $_POST["password"] == '123') {
        header("Location: /website-manager/public/home.php");
        die();
    }else{
        echo "user or password invalid";
    }
?>
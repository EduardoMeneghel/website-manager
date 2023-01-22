<?php
    if($_POST["username"] == 'login' && $_POST["password"] == '123') {
        echo "logado";
    }else{
        echo "user or password invalid";
    }
?>
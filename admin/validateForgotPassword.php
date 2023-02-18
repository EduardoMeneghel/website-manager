<?php
require_once('../app/models/QueryManager.php');
$queryManager = new QueryManager;
$row = $queryManager->executeQuery('SELECT * FROM user WHERE ds_email = '.'"'.$_POST["email"].'"');
if($row){
    echo "<script>alert('check your email!');</script>";
} else {
    echo "<script>alert('check your email.');</script>";
}
?>
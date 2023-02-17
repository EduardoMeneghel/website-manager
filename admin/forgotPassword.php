<?php
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../app/views/admin');
$twig = new \Twig\Environment($loader);

echo $twig->render('/forgotPassword.html');

?>
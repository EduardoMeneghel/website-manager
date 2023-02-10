<?php
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader);

$data = [];

echo $twig->render('index.html', $data);

?>
<?php

require_once '../vendor/autoload.php';

use App\Models\GenerateAdminData;
use App\Models\QueryManager;
use App\Models\Tools;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;


$queryManager = new QueryManager;
$data = $queryManager->getCategory();
$tools = new Tools;
$loader = new FilesystemLoader('../app/views/admin');
$twig = new Environment($loader);
echo $twig->render('index.html', $data);

?>
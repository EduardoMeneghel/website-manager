<?php
require_once '../vendor/autoload.php';
use App\Models\QueryManager;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader('../app/views/admin');
$twig = new Environment($loader);

$queryManager = new QueryManager;
$rows = $queryManager->executeQuery('SELECT * FROM menu_admin');
var_dump($rows);
echo $twig->render('index.html', $rows);

?>
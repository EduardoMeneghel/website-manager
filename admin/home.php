<?php
require_once '../vendor/autoload.php';
use App\Models\QueryManager;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader('../app/views/admin');
$twig = new Environment($loader);

$queryManager = new QueryManager;
$rows = $queryManager->executeQuery('SELECT * FROM menu_admin_itens as a RIGHT JOIN menu_admin as b ON a.id_menu_admin =  b.id ORDER BY b.ds_ordination ASC');
echo $twig->render('index.html', array('menu_admin' => $rows));

?>
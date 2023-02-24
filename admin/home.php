<?php

require_once '../vendor/autoload.php';
use App\Models\QueryManager;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader('../app/views/admin');
$twig = new Environment($loader);

$queryManager = new QueryManager;
$rows = $queryManager->executeQuery('SELECT p.*, (SELECT COALESCE(CONCAT("[", GROUP_CONCAT(JSON_OBJECT("id_menu_admin", f.id_menu_admin, "nm_name_child", f.nm_name_child, "ds_url_child", f.ds_url_child, "ds_ordination_child", f.ds_ordination_child)), "]"), "[]") FROM menu_admin_itens f WHERE f.id_menu_admin =  p.id ) AS children FROM menu_admin p ORDER BY p.ds_ordination ASC');
echo $twig->render('index.html', array('menu_admin' => $rows));

?>
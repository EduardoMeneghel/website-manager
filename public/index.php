<?php
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../app/views');
$twig = new \Twig\Environment($loader);

$data = [];
$data['info'] = 'A molécula é formada por um grupamento de dois ou mais átomos, unidos por ligações covalentes. Ela ainda apresenta duas características básicas: estabilidade (ligações difíceis de serem desfeitas) e neutralidade elétrica (mesmo número de prótons e elétrons)';
$data['title'] = 'Data';
$data['loja'] = 'Data';

echo $twig->render('index.html', $data);

?>
<?php
//--------------MIDDLEWARE TWIG-------------------//
#2.A  Chargement de twig
use Twig\Extra\String\StringExtension;

$loader = new \Twig\Loader\FilesystemLoader(PATH_TEMPLATE);
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

$twig->addExtension(new StringExtension());
$twig->addGlobal('request', $request);

#2.B On stocke l'instance de Twig dans notre container
$container->set('twig', $twig);
#dump($container);
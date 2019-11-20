<?php
//--------------MIDDLEWARE TWIG-------------------//
#2.A  Chargement de twig
$loader = new \Twig\Loader\FilesystemLoader(PATH_TEMPLATE);
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

#2.B On stocke l'instance de Twig dans notre container
$container->set('twig', $twig);
#dump($container);
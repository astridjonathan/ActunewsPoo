<?php

# récupération des paramètres GET et affectation d'une valeur par défaut.
# https://www.php.net/manual/fr/language.operators.comparison.php
use Symfony\Component\HttpFoundation\Request;

#1. Arrivée d'une requête
#$request représente la requête entrante de notre utilisateur
$request = Request::createFromGlobals();
#dump($request->get('controller'));

#récupération des paramètres GET et affectation d'une valeur par défaut
$controller = 'App\\Controller\\' . ucfirst($request->get('controller')) . 'Controller'; //DefaultController
$action     = $request->get('action') ;//?? 'home';
#A simplifier

//--------------MIDDLEWARE TWIG-------------------//
#Chargement de twig

# Récupération du chemin absolu template
define( 'PATH_ROOT', dirname( $request->server->get('SCRIPT_FILENAME'), 2 ) );
define( 'PATH_TEMPLATE', PATH_ROOT . '/templates' );
#dump(PATH_TEMPLATE);

$loader = new \Twig\Loader\FilesystemLoader('PATH_TEMPLATE');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

//--------------ROUTAGE AUTOMATIQUE--------------------//
#Méthode1
//$obj = new $controller(); //DefaultController, AdminController.....
//$obj->$action(); //home

#Méthode2 Approche Dynamique
//$$controller= new $controller();
//${$controller}->$action();

#Méthode3
#2. Traitement de la requête
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([$controller, $action], []);
#dump($response);
#3. on retourne une réponse au client
$response->send();


//--------------ROUTAGE MANUEL---------------------//
// default controller
//require_once 'src/Controller/DefaultController.php';
//require_once 'src/Controller/MemberController.php';

//$defaultCtrl = new DefaultController();
//$memberCtrl = new MemberController();

//// default controller
//if ( $controller == 'default' && $action == 'home' ) {
//   $defaultCtrl->home();
//}
//
//if ( $controller == 'default' && $action == 'category' ) {
//    $defaultCtrl->category();
//}
//
//if ( $controller == 'default' && $action == 'article' ) {
//    $defaultCtrl->article();
//}
//
//// member controller
//if ( $controller == 'member' && $action == 'register' ) {
//    $memberCtrl->register();
//}
//
//if ( $controller == 'member' && $action == 'login' ) {
//    $memberCtrl->login();
//}


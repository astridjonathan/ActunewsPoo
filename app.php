<?php

#1. Chargement du kernel
use App\Model\Category;

require_once 'kernel/kernel.php';


#$twig->addGlobal('categories', (new Category())->findAll());

//--------------ROUTAGE AUTOMATIQUE--------------------//
#Méthode1
//$obj = new $controller(); //DefaultController, AdminController.....
//$obj->$action(); //home

#Méthode2 Approche Dynamique
//$$controller= new $controller();
//${$controller}->$action();

#Méthode3
#2. Traitement de la requêtee
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([new $controller, $action], []);
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


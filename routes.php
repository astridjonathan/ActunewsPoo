<?php

# récupération des paramètres GET et affectation d'une valeur par défaut.
# https://www.php.net/manual/fr/language.operators.comparison.php
$controller = ucfirst($_GET['controller']) . 'Controller';
$action     = $_GET['action'] ;//?? 'home';

//--------------ROUTAGE AUTOMATIQUE--------------------//
#Méthode1
//$obj = new $controller(); //DefaultController, AdminController.....
//$obj->$action(); //home

#Méthode2 Approche Dynamique
//$$controller= new $controller();
//${$controller}->$action();

#Méthode3
call_user_func_array([$controller, $action], []);



// PRIVATE : return and Response / Request


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


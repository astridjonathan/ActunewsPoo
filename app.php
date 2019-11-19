<?php





#1. Déduction du controller et de l'action
#récupération des paramètres GET et affectation d'une valeur par défaut
$controller = 'App\\Controller\\' . ucfirst(($request->get('controller') ?? DEFAULT_CONTROLLER)) . 'Controller'; //DefaultController
$action     = $request->get('action') ??  DEFAULT_ACTION;//'home';
#A simplifier

//--------------MIDDLEWARE TWIG-------------------//
#2.A  Chargement de twig
$loader = new \Twig\Loader\FilesystemLoader(PATH_TEMPLATE);
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

#2.B On stocke l'isntance de Twig dans notre container
$container->set('twig', $twig);
#dump($container);

//--------------ROUTAGE AUTOMATIQUE--------------------//
#Méthode1
//$obj = new $controller(); //DefaultController, AdminController.....
//$obj->$action(); //home

#Méthode2 Approche Dynamique
//$$controller= new $controller();
//${$controller}->$action();

#Méthode3
#3. Traitement de la requête
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([new $controller, $action], []);
#dump($response);

#4. on retourne une réponse au client
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


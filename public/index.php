<?php

/**
 * Ici notre fichier index.php reprente notre controleur frontal.
 * Il a pour charde de rediriger la requête de l'utilisateur
 * vers le bon controleur en s'aidant des paramètres dans l'URL.
 */

#Aperçu de $_GET
//echo '<pre>';
//    print_r($_GET);
//echo '</pre>';

#Chargement automatique des classes
#require_once 'autoload.php';

# récupération des paramètres GET et affectation d'une valeur par défaut.
# https://www.php.net/manual/fr/language.operators.comparison.php
use Symfony\Component\HttpFoundation\Request;

require_once '../vendor/autoload.php';

#1. Arrivée d'une requête
#$request représente la requête entrante de notre utilisateur
$request = Request::createFromGlobals();
#dump($request->get('controller'));

#Mise en place du container
$container = \App\Model\Container\Container::getInstance();
$container->set('request', $request);
#dump($container);

#Chargement de la configuration (à mettre avant et sera donc disponible dans app.php)
require_once '../config.php';

#Chargement des routes
require_once '../app.php';

#Aperçu de $_GET
#dump($_GET);
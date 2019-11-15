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
require_once 'autoload.php';

#Chargement des routes
require_once 'routes.php';
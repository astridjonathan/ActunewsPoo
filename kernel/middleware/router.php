<?php

#1. Déduction du controller et de l'action
#récupération des paramètres GET et affectation d'une valeur par défaut
$controller = 'App\\Controller\\' . ucfirst(($request->get('controller') ?? DEFAULT_CONTROLLER)) . 'Controller'; //DefaultController
$action     = $request->get('action') ??  DEFAULT_ACTION;//'home';
<?php

// -------------------------- PAR DEFAUT ----------------------------//
#Configuration par defaut
define('DEFAULT_CONTROLLER', 'default');
define('DEFAULT_ACTION', 'home');


// -------------------------- LES CONSTANTES ----------------------------//

#Configurations des paths
define( 'PATH_ROOT', dirname( $request->server->get('SCRIPT_FILENAME'), 2 ) );
define( 'PATH_TEMPLATE', PATH_ROOT . '/templates' );


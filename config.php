<?php

// -------------------------- PAR DEFAUT ----------------------------//
#Configuration par défaut
define('DEFAULT_CONTROLLER', 'default');
define('DEFAULT_ACTION', 'home');


// -------------------------- LES CONSTANTES ----------------------------//

#Configurations des paths
define( 'PATH_ROOT', dirname( $request->server->get('SCRIPT_FILENAME'), 2 ) );
define( 'PATH_TEMPLATE', PATH_ROOT . '/templates' );

    // ------------ CONNEXION A LA BDD------------------//
    define('DB_HOST','localhost');
    define('DB_NAME','actunews');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    #define('DB_PASSWORD','root');
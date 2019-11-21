<?php
/**
 * Le fichier Kernel va permettre de charger les composants
 * de notre application
 *----------------------------------------------------------
 * Piste d'amélioration, nous utiliserons une approche OO
 * Dans l'idéal, on crée des class.
 */


#------Début du Chargement du Kernel ------#
#Chargement du Router
require_once 'middleware/router.php';

#Chargement du Twig
require_once 'middleware/twig.php';

#Chargement de PDO
require_once 'middleware/pdo.php';

#------Fin du Chargement du Kernel ------#

#-----------Kernel is ready ------------#

#Récupération des classes à charger par le kernel
$onKernelReady = include_once 'event/onKernelReady.php';

#On parcours les classes du tableau
foreach ( $onKernelReady as $class){
    #On instancie chaque class
    $obj= new $class;

    #On vérifie que chaque classe est bien une instance de KernetEventInterface
    if ($obj instanceof \App\Model\kernel\KernelEventInterface){
        #On éxécute la fonction load
        $obj->load();
    }
}
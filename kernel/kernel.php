<?php
/**
 * Le fichier Kernel va permettre de charger les composants
 * de notre application
 *----------------------------------------------------------
 * Piste d'amélioration, nous utiliserons une approche OO
 * Dans l'idéal, on crée des class.
 */

#Chargement du Router
require_once 'middleware/router.php';

#Chargement du Twig
require_once 'middleware/twig.php';

#Chargement de PDO
require_once 'middleware/pdo.php';




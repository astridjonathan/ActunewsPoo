<?php

/**
 * Ici dans le tableau, je vais déclarer
 * toutes les classes que je souhaite charger
 * après l'initialisation du kernel
 */
return [
    'TwigExtension' => \App\Model\twig\TwigExtension::class, #donne le chemin complet vers la class (namespace+ nom de la classe)
];
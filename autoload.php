<?php

    /**
     * Permet d'automatiser le chargement des classes de notre projet
     */

    spl_autoload_register(function($class){
        #echo 'Chargement de : ' . $class . '<br>';
        #require_once 'src/' . $class .'.php'; src/Model\Nom\..... sur mac et linux ne marche pas
        require_once 'src/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    });
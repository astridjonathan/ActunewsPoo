<?php

    /**
     * Permet d'automatiser le chargement des classes de notre projet
     */

    spl_autoload_register(function($class){
        require_once 'src/Controller/' . $class .'.php';
    });
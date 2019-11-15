<?php


class DefaultController
{
    #Création de 3 fonctions qui représente 1 action (page du site)

    /**
     * Fonction Home -- PAge Accueil
     */
    public function home()
    {
        echo '<h1>PAGE ACCUEIL | CONTROLLER</h1>';
    }

    /**
     * Fonction Category -> liste les articles d'un catégorie
     */
    public function category()
    {
        echo '<h1>PAGE CATEGORIE | CONTROLLER</h1>';
    }

    /**
     * Fonction Article -> affiche un article
     */
    public function article()
    {
        echo '<h1>PAGE ARTICLE | CONTROLLER</h1>';
    }
}
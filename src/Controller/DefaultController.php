<?php

namespace App\Controller;

#use Model\Article; #automatiquement mis si non présent faire alt+entree au niveau de la classe

use App\Model\Article;
use App\Model\Category;
use App\Model\User;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    #Création de 3 fonctions qui représente 1 action (page du site)

    /**
     * Fonction Home -- PAge Accueil
     */
    public function home()
    {
        #dump($_GET);
        #$article = new Article(); Un exemple not use
        #echo '<h1>PAGE ACCUEIL | CONTROLLER</h1>';
        #return new Response('<h1>PAGE ACCUEIL | CONTROLLER | RESPONSE</h1>');

        // -- Vérication--//
        $article= new Article();
        $category = new Category();
        $user = new User();


        #dump($article->findAll());
        #dump($category->findAll());
        #dump($user->findAll());


        return $this->render('default/home.html.twig');

    }

    /**
     * Fonction Category -> liste les articles d'un catégorie
     */
    public function category()
    {
        #echo '<h1>PAGE CATEGORIE | CONTROLLER</h1>';
        #return new Response('<h1>PAGE CATEGORIE| CONTROLLER | RESPONSE</h1>');
        return $this->render('default/category.html.twig');

    }

    /**
     * Fonction Article -> affiche un article
     */
    public function article()
    {
        #echo '<h1>PAGE ARTICLE | CONTROLLER</h1>';
        #return new Response('<h1>PAGE ARTICLE | CONTROLLER | RESPONSE</h1>');
        return $this->render('default/article.html.twig');

    }
}
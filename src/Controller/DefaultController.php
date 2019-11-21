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

        // -- Vérification--//
        //$article= new Article();
        //$category = new Category();
        //$user = new User();

        #dump($article->findAll());
        #dump($category->findAll());
        #dump($user->findAll());

        # 1. Récupération des articles de la BDD
        $articles = (new Article())->findAll();

        # 2. Transmission à la Vue
        return $this->render('default/home.html.twig',[
            'articles' => $articles
        ]);

    }

    /**
     * Fonction Category -> liste les articles d'un catégorie
     */
    public function category()
    {
            #Recupération de l'instance request  dans le container
        $request = $this->getParameter('request');
            #Recupération dans le Request du paramètre GET 'id'
        $idCategorie = $request->get('id') ?? 1;
            #Récupération des articles d'une catégorie
        $article = new Article();

        $where = 'idCategorie = '.$idCategorie;
        $articles = $article->findAll($where);

        return $this->render('default/category.html.twig',[
            'articles'=>$articles
        ]);

        #echo '<h1>PAGE CATEGORIE | CONTROLLER</h1>';
        #return new Response('<h1>PAGE CATEGORIE| CONTROLLER | RESPONSE</h1>');
    }

    /**
     * Fonction Article -> affiche un article
     */
    public function article()
    {
        #Recupération de l'instance request  dans le container
        $request = $this->getParameter('request');
        #Recupération dans le Request du paramètre GET 'id'
        $idArticle= $request->get('id') ?? 0;
        $article = (new Article())->findOne($idArticle);
        #dump($article);
        return $this->render('default/article.html.twig',[
            'article'=>$article
        ]);


        #echo '<h1>PAGE ARTICLE | CONTROLLER</h1>';
        #return new Response('<h1>PAGE ARTICLE | CONTROLLER | RESPONSE</h1>');

    }
}
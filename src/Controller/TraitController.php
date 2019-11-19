<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * Trait TraitController
 * @package App\Controller
 *
 */

trait TraitController
{
    /**
     * Retourner à l'utilisateur une page.
     * Nous allons utiliser twig
     * @param string $view
     * @param array $parameters
     * @return Response
     */
    #retourner valeur d'un template twig
    protected function render(string $view, array $parameters=[]) : Response
    {
        #1. Récupération de Twig dans le container
        /** @var Environment $twig */
        $twig = $this->container->get('twig');

        $content=$twig->render($view, $parameters);

        #2. Fabrication d'une réponse
        $response = new Response();

        #3. Affectation du contenu de twig
        $response->setContent($content);

        #4. Retour de la réponse au controleur
        return $response;

    }
}
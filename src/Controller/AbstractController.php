<?php


namespace App\Controller;

use App\Model\Container\Container;

/**
 * Class AbstractController
 * @package App\Controller
 * AbstractController est ce qu'on appelle
 * une classe abstraite.
 * ---------------------------------------
 * Une classe abstraite est une classe
 * que l'on ne peux pas instancié. ( et donc
 * créer un objet).
 * ---------------------------------------
 * Pour être utilisé, elle doit OBLIGATOIREMENT
 * être hérité !
 * ---------------------------------------
 * Autre particularité elle peux comporter
 * des méthodes abstraites. CAD, des fonctions
 * qui n'ont pas encore été décrites (écrites).
 */

abstract class AbstractController
{
    use TraitController;

    private $container;

    /**
     * AbstractController constructor.
     * On récupère l'instance du container
     * de notre application
     */
    public function __construct()
    {
        $this->container = Container::getInstance();
    }

    protected function getParameter(string $name)
    {
        return $this->container->get($name);

    }

}
<?php


namespace App\Model\twig;


use App\Model\Category;
use App\Model\Container\Container;
use App\Model\kernel\KernelEventInterface;
use Twig\Environment;

class TwigExtension implements KernelEventInterface
{
    # Récupérer l'instance twig du container
    private $container;

    public function __construct()
    {
        $this->container = Container::getInstance();
    }

    /**
     * Permet de charger des éléments dans le kernel
     */
    public function load(): void
    {
        // TODO: Implement load() method.
        /**
         * @var Environment $twig
         */
        $twig = $this->container->get('twig');
        $twig->addGlobal('categories', (new Category())->findAll());
    }
}
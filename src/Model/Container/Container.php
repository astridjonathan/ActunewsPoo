<?php


namespace App\Model\Container;

/**
 * Class Container
 * @package App\Model\Container
 * L'objectif d'un container est de garder en mémoire
 * les différentes instances de notre application et
 * les redistribuer à la demande.
 * cf: PSR 11
 */

#Une classe finale ne pourra pas être hérité
final class Container
{
    #Stocker les instances de notre application
    private $instances;

    #Stock l'instance de notre container
    private static $instance;

    #En mettant l'instanciation en privée on bloque celle ci
    #depuis l'extérieur
    private function  __construct()
    {
        $this->instances = []; #avec méthode static ça ne marche
    }

    # Permet de récupérer une instance
    public function get(string $key)
    {
        return $this->instances[$key];
    }
    # Permet de stocker une instance
    public function set(string $key, $value)
    {
        $this->instances[$key] = $value;
    }

    # Permet de vérifier la présence d'une instance
    public function has(string $key)
    {
        return in_array($key, $this->instances);
    }


    /**
     * Permet de retourner une instance unique du
     * container
     * ----------------------------------------------
     * Implémentation du singleton
     */
    public static function getInstance()
    {
        /**
         * Je crée une instance de container UNIQUEMENT
         * si sefl::$instance n'existe pas
         */
        if(!isset(self::$instance)){
            self::$instance = new self;
        }

        /**
         * La premiere fois, je retourne  une nouvelle instance:
         * Les fois suivantes, je retourne la même instance
         */
        return self::$instance;
    }
}
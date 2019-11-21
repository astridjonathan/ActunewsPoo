<?php


namespace App\Model\kernel;


interface KernelEventInterface
{
    /**
     * Permet de charger des éléments dans le kernel
     */
    public function load(): void;
}
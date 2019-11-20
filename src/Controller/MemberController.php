<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MemberController
{
    public function register()
    {
        #echo '<h1>PAGE INSCRIPTION | CONTROLLER </h1>';
        #return new Response('<h1>PAGE INSCRIPTION | CONTROLLER | RESPONSE</h1>');
        return $this->render('default/register.html.twig');
    }

    public function login()
    {
        #echo '<h1>PAGE LOGIN | CONTROLLER </h1>';
        #return new Response('<h1>PAGE LOGIN | CONTROLLER | RESPONSE</h1>');
        return $this->render('default/login.html.twig');
    }
}
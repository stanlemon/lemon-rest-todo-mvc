<?php

namespace Lemon\TodoMvcBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    public function indexAction()
    {
        return new Response(file_get_contents(
            $_SERVER['DOCUMENT_ROOT'] . '/todomvc.html'
        ));
    }
}

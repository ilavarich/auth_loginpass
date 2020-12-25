<?php

namespace lavarich\LoginPassAuthBundle\src\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthController
{

    /**
     * @Route("/auth/login")
     */
    public function simple()
    {
        return new Response('auth page');
    }


}
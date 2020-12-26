<?php

namespace lavarich\LoginPassAuthBundle\src\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController
{

    /**
     * @Route("/auth/logins")
     */
    public function simple()
    {
        //@Vendor/Product/view.html.twig'); // src/Vendor/MyBundle/Resources/views/Product/view.html.twig

        return $this->render('/bundles/LoginPassAuthBundle/src/Resources/views/login.html.twig', [
            'name' => 'auth',
        ]);

        echo 1;
        exit;
        //@LoginPassAuthBundle/Auth/login.html.twig

        /// lavarich/LoginPassAuthBundle/src/Resources/views/login.html.twig
        /*
                return $this->render('@LoginPassAuthBundle/src/Resources/views/login.html.twig', [
                    'name' => 'auth',
                ]);
                  */
    }


}
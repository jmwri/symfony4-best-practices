<?php

namespace App\Controller;

use App\CustomDb;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class User extends AbstractController
{
    /**
     * @Route("/users")
     * @Method("GET")
     * @param CustomDb $db
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function all(CustomDb $db)
    {
        $users = $db->getUsers();
        return $this->json($users);
    }
}
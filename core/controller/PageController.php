<?php

namespace App\Controller;

use App\Model\User;
use App\Repository\UserRepository;

class PageController extends BaseController
{

    public function index()
    {
        $user = new User();
        $user->setName('name');
        print $user->getName();

        $repository=new UserRepository();
        $repository->getAll();
    }
}

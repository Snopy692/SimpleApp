<?php

namespace App\Controller;

use App\Model\User;

class PageController extends BaseController
{

    public function index()
    {
        $user = new User();
        $user->setName('name');
        print $user->getName();
    }
}

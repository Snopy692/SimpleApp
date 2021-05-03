<?php

namespace App\Controller;

use App\Model\User;
use App\Core\Form;

class PageController extends BaseController
{
    /*public function __construct() {
    parent::__construct();
    }*/

    public function index()
    {
        $form = new Form('user_login');
        
        // !! TODO
        // $form->add('login',... some attributes ...)

        return $this->render('page/index', ['form' => $form]);
    }
}

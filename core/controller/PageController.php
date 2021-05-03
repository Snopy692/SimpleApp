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
        $form->addTextfield('login', 'Login', ['placeholder' => 'Login']);

        return $this->render('page/index', ['form' => $form]);
    }
}

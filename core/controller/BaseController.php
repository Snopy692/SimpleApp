<?php

namespace App\Controller;

class BaseController
{
    protected $app;
    protected $request;

    public function __construct()
    {
        $this->app = new \App\Core\App();
        $this->request = new \App\Core\Request();
    }

    public function render($view,$args=[])
    {
        global $viewsPath;
        
        $args['app'] = $this->app;

        extract($args, EXTR_SKIP);

        include $viewsPath.'/region/header.tpl.php';

        $file = $viewsPath . '/' . $view.'.tpl.php'; 

        if (is_readable($file)) {
            include $file;
        } else {
            throw new \Exception("$file not found");
        }
        
        include $viewsPath.'/region/footer.tpl.php';
    }
}

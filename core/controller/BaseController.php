<?php

namespace App\Controller;

class BaseController
{
    public function render($view,$args=[])
    {
        global $viewsPath;
        
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

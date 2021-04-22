<?php

$router = new \Bramus\Router\Router();

$router->get('/','App\Controller\PageController@index');

$router->run();
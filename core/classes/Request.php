<?php

namespace App\Core;

class Request
{
    public function getMethod(): string
    {

    }

    public function isPost(): bool
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
               
        }
    }

    public function isGet(): bool
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') 
        {
               
        }
    }

    public function get(string $name)
    {
    }

    public static function getBaseUrl(): string
    {
    }

    public static function getBasePath(): string
    {
    }

    public static function getDomain(): string
    {
    }
}

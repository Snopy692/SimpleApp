<?php

namespace App\Core;

class Request
{
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function isPost(): bool
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            return $_SERVER[]
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
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
       
        $link = 'http'.(self::isHttps() ?? 's');
  
        // Here append the common URL characters.
        $link .= "://";
  
        // Append the host(domain name, ip) to the URL.
        $link .= $_SERVER['HTTP_HOST'];
      
        // Print the link
        echo $link;
    }

    public static function getBasePath(): string
    {

    }

    public static function getDomain(): string
    {
    }
}

<?php

namespace Antiockus;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;



class Router
{
    public static function get($path, $funToRun)
    {
        $loader = new FilesystemLoader('views/');
        $twig = new Environment($loader);

        if ($path == '/' || '') {
            $path = 'index';
        }
        echo $twig->render($path . '.html', ['test' => 'test']);
    }

    public static function post($path, $controllerMethod)
    {
    }
}

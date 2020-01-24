<?php

namespace Antiockus\Controllers;

class HomeController
{
    public $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function index()
    {

        echo $this->twig->render('index.html', ['test' => 'test']);
        // echo "testing";
    }
    public function about()
    {
        echo $this->twig->render('about.html', ['test' => 'test']);
    }

    public function contact()
    {
        echo $this->twig->render('contact.html', []);
    }

    public function test()
    {
        echo $this->twig->render('test.html', ['color' => session_id()]);
    }
}

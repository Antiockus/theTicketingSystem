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

        return $this->twig->render('index.html', ['test' => 'test']);
        // echo "testing";
        // return $request;
    }
    public function about()
    {
        return $this->twig->render('about.html', ['test' => 'test']);
    }

    public function contact()
    {
        return $this->twig->render('contact.html', []);
    }

    public function test()
    {
        return $this->twig->render('test.html', ['color' => session_id()]);
    }
}

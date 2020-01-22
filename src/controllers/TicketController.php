<?php

namespace Antiockus\Controllers;


class TicketController
{

    public $twig;
    public function __construct($twig)
    {
        $this->twig = $twig;
    }
    public function index()
    {

        echo $this->twig->render('index.html', ['test' => 'test']);
    }

    public function create_view()
    {
        echo $this->twig->render('create_ticket.html', []);
    }
}

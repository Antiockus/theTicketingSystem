<?php

namespace Antiockus;

class App
{

    public function __construct()
    {
    }

    public function processRequest(Request $request)
    {

        if ($request->method == 'GET') {
            switch ($request->request) {
                case '/contact':
                    Router::get($request->request, 'HomeController@contact');
                    break;
                case '/about':
                    Router::get($request->request, 'HomeController@about');
                    break;
                case '/create_client':
                    Router::get($request->request, 'ClientController@create_view');
                    break;
                case '/create_ticket':
                    Router::get($request->request, 'TicketController@create_view');
                    break;
                case '/test':
                    Router::get($request->request, 'HomeController@test');
                    break;
                case '/register':
                    Router::get($request->request, 'UserController@register');
                    break;
                case '/login':
                    Router::get($request->request, 'UserController@login');
                    break;
                case '/':
                case '':
                default:
                    Router::get($request->request, 'HomeController@index');
                    break;
            }
        }
    }
}

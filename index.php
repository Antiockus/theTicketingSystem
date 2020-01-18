<?php
// require "vendor/autoload.php";
require "bootstrap.php";

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    switch ($request) {
        case '/':
            // require __DIR__ . '/views/index.html';
            echo $twig->render('index.html', []);
            break;
        case '':
            // require __DIR__ . '/views/index.html';
            echo $twig->render('index.html', []);
            break;
        case '/about':
            // require __DIR__ . '/views/about.html';
            echo $twig->render('about.html', []);

            break;
        case '/contact':
            // require __DIR__ . '/views/about.html';
            echo $twig->render('contact.html', []);

            break;
        case '/create_client':
            echo $twig->render('create_client.html', []);
            break;
        case '/create_ticket':
            echo $twig->render('create_ticket.html', []);
            break;
        default:
            http_response_code(404);
            // require __DIR__ . '/views/404.html';
            echo $twig->render('404.html', []);
            break;
    }
}

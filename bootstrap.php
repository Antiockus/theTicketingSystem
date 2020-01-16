<?php // Get all the new stuff up and running here. Then include it in the index page. 
require "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Symfony\Component\Dotenv\Dotenv;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$loader = new FilesystemLoader('views/');
$twig = new Environment($loader);

$connectionParams = [
    'dbname' => $_ENV['DB_NAME'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'host' => $_ENV['DB_HOST'],
    'port' => $_ENV['DB_PORT'],
    'driver' => 'pdo_mysql'
];

$conn = DriverManager::getConnection($connectionParams);

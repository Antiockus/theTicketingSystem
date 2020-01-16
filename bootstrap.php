<?php // Get all the new stuff up and running here. Then include it in the index page. 
require "vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$loader = new FilesystemLoader('views/');
$twig = new Environment($loader);

<?php
// require "vendor/autoload.php";
require "bootstrap.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $sql = 'SELECT * FROM tickets';
    $stmt = $conn->query($sql);
    $tickets = $stmt->fetchAll();
    echo $twig->render('index.html', ['tickets' => $tickets]);
}

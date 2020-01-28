<?php

    use Doctrine\DBAL\DriverManager;

    require "bootstrap.php";

    $email = htmlspecialchars($_POST['email']);

    $sql = 'SELECT * FROM USERS WHERE EMAIL === ?';
    $connectionParams = [
        'dbname' => $_ENV['DB_NAME'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS'],
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'],
        'driver' => 'pdo_mysql'
    ];

    $conn = DriverManager::getConnection($connectionParams);
//    $stmt = $conn->prepare($sql);
//    $stmt->bindValue(1, $email);
////    $stmt->bindParam(2, $_POST['client_url']);
//    $stmt->bindParam(3, $_POST['client_description']);
    $test = $stmt->execute();
    var_dump($test);
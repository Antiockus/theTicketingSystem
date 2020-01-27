<?php

    use Doctrine\DBAL\DriverManager;

    require 'bootstrap.php';



    $nickname = htmlspecialchars($_POST['nickname']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO USERS ( nickname, email, password)  VALUES (?,?,?)";
    $connectionParams = [
        'dbname' => $_ENV['DB_NAME'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS'],
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'],
        'driver' => 'pdo_mysql'
    ];

    $conn = DriverManager::getConnection($connectionParams);
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $_POST['nickname']);
    $stmt->bindParam(2, $_POST['email']);
    $stmt->bindParam(3, $hashed_password);
    $stmt->execute();


    header('Location:/dashboard');
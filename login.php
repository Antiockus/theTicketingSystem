<?php

use Doctrine\DBAL\DriverManager;

require "bootstrap.php";

$email = $_POST['email'];
$pass = $_POST['password'];

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
$sql = "SELECT * FROM users WHERE email = '$email' AND password ='$pass'";
$stmt = $conn->prepare($sql);
$test = $stmt->execute();
if ($test) {
    echo "user exists";
} else {
    echo "no user";
}

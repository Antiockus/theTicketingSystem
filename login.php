<?php

use Doctrine\DBAL\DriverManager;

require "bootstrap.php";

if (empty($_POST['email'])) {
    echo 'email required';
}

$email = $_POST['email'];
$pass = $_POST['password'];

$connectionParams = [
    'dbname' => $_ENV['DB_NAME'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'host' => $_ENV['DB_HOST'],
    'port' => $_ENV['DB_PORT'],
    'driver' => 'pdo_mysql'
];

$conn = DriverManager::getConnection($connectionParams);
$sql = "SELECT * FROM users";
$stmt = $conn->query($sql);
var_dump($stmt->execute());

while ($row  = $stmt->fetch()) {
    echo $row['nickname'] . '<br>';
}

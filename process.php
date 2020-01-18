<?php
// require "vendor/autoload.php";
require "bootstrap.php";
require "src/client.class.php";
require "src/ticket.class.php";

// use Antiockus\Client;
// use Antiockus\Ticket;
use Doctrine\DBAL\DriverManager;




if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    exit("cannot find");
}

if ($_POST['value_type'] == 'ticket') {
    try {

        $ticket_title = htmlspecialchars($_POST['ticket_title']);
        $ticket_description = htmlspecialchars($_POST['ticket_description']);
        $ticket_status = $_POST['ticket_status'];
        $ticket = new Ticket($ticket_title, $ticket_description, $ticket_status);

        $sql = "INSERT INTO TICKETS ( ticket_title, ticket_description, ticket_status)  VALUES (?,?,?)";


        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $ticket_title);
        $stmt->bindParam(2, $ticket_description);
        $stmt->bindParam(3, $ticket_status);
        $stmt->execute();
    } catch (PDOException $e) {
        header('Location:/about');
        exit('Error:' . $e->getMessage());
    }
} else if ($_POST['valueType'] == 'client') {
    $client_name = htmlspecialchars($_POST['client_name']);
    $client_url = htmlspecialchars($_POST['client_url']);
    $client_description = htmlspecialchars($_POST['client_description']);
    $client = new Client($client_name, $client_url, $client_description);

    $sql = "INSERT INTO CLIENTS ( client_name, client_url, client_description)  VALUES (?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $_POST['client_name']);
    $stmt->bindParam(2, $_POST['client_url']);
    $stmt->bindParam(3, $_POST['client_description']);
    $stmt->execute();
} else {
    echo "no value type found";
}

header('Location:/');

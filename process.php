<?php
require_once "vendor/autoload.php";
require_once "bootstrap.php";

use Antiockus\Client;
use Antiockus\Ticket;

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    exit("cannot find");
}

if ($_POST['value_type'] == 'ticket') {
    try {

        $ticket_title = htmlspecialchars($_POST['ticket_title']);
        $ticket_description = htmlspecialchars($_POST['ticket_description']);
        $ticket_status = $_POST['ticket_status'];
        $ticket = new Ticket($ticket_title, $ticket_status, $ticket_description);

        $ticket->saveTicket();
        // $sql = "INSERT INTO TICKETS ( ticket_title, ticket_description, ticket_status)  VALUES (?,?,?)";


        // $stmt = $conn->prepare($sql);
        // $stmt->bindParam(1, $ticket->getTitle());
        // $stmt->bindParam(2, $ticket->getDescription());
        // $stmt->bindParam(3, $ticket->getStatus());
        // $stmt->execute();
    } catch (PDOException $e) {
        header('Location:/about');
        exit('Error:' . $e->getMessage());
    }
} else if ($_POST['value_type'] == 'client') {
    $client_name = htmlspecialchars($_POST['client_name']);
    $client_url = htmlspecialchars($_POST['client_url']);
    $client_description = htmlspecialchars($_POST['client_description']);
    $client = new Client($client_name, $client_url, $client_description);
    $client->saveClient();
    
} else {
    echo "no value type found";
}

header('Location:/');

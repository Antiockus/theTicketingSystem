<?php
// require "src/database.class.php";
require "src/ticket.class.php";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    exit("cannot find");
}

$db = new DB();

$ticket_title = htmlspecialchars($_POST['ticket_title']);
$ticket_description = htmlspecialchars($_POST['ticket_description']);
$ticket_status = $_POST['ticket_status'];
$ticket = new Ticket($ticket_title, $ticket_description, $ticket_status);

$db->saveTicket($ticket);
$db->close();
header('Location:/');

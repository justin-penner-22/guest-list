<?php
require '../config.php';

function getReservations() {
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASSWORD);
    $stmt = "SELECT `id`, `date`, `persons`, `time`, `confirmed`, `user_name`, `email_address` FROM reservations";
    $rows = $pdo->query($stmt);
    $data = [];
    foreach($rows as $row){
        $data[] = $row;
    }
    return $data;
}

echo json_encode(getReservations());

//Generate fake data
/*
$statement = $pdo->prepare("INSERT INTO reservations
(`date`, `table`, `time`, confirmed, user_name, email_address) VALUES (?,?,?,?,?,?)");

$statement->execute(array("2032-10-10", 1, "20:20", 0, "justin", "jp@gmail.com"));
*/




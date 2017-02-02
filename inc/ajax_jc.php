<?php
require_once 'db.php';

$req = $pdo->query("SELECT * FROM event");
$events = $req->fetchAll();

$result = array() ;
foreach($events as $event) {
    $result[] = $event ;
}

echo json_encode($result);



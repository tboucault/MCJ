<?php
require_once 'db.php';
session_start();

$req = $pdo->query("SELECT * FROM event WHERE nom='".$_SESSION['auth']->nom."'");
$events = $req->fetchAll();

$result = array() ;
foreach($events as $event) {
    $result[] = $event ;
}

echo json_encode($result);



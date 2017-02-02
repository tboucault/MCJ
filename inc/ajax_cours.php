<?php
require_once 'db.php';

$req = $pdo->query('select instrument, count(*) as nbInscrit from event where type = "cours" group by instrument');
$events = $req->fetchAll();

$result = array() ;
foreach($events as $event) {
    $result[] = $event ;
}

echo json_encode($result);



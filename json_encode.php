<?php
$dbh = new PDO('mysql:host=localhost;dbname=jasa1', 'root', '');
$db = $dbh->prepare('SELECT * FROM customers');
$db->execute();
$customers = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($customers);
echo $data;

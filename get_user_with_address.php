<?php

require "connexion.php";


$query = $db->prepare('SELECT * FROM users JOIN address ON users.address = address.id WHERE users.id = :id');
$parameters = [
    'id' => 3
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user)

?>
<?php

require "connexion.php";


$query = $db->prepare('SELECT * FROM users JOIN address ON users.address = address.id ');
$parameters = [
    
];
$query->execute($parameters);
$user = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($user)

?>
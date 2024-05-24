<?php 

require "connexion.php";

if (!array_filter($_POST)){
   
     echo 'no data from form';
}else{
    $address = $_POST;
    var_dump($_POST);
    $id = $address['id'];
}


$query = $db->prepare('DELETE FROM address WHERE id = :id');
$parameters = [
    'id' => $id,
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user)


?>
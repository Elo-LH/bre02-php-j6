<?php 

require "connexion.php";

if (!array_filter($_POST)){
   
     echo 'no data from form';
}else{
    $address = $_POST;
    var_dump($_POST);
    $street = $address['street'];
    $city = $address['city'];
    $zipcode = $address['zipcode'];
}


$query = $db->prepare('INSERT INTO address(street, city, zipcode) VALUES(:street, :city, :zipcode)');
$parameters = [
    'street' => $street,
    'city' => $city,
    'zipcode' => $zipcode
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user)


?>
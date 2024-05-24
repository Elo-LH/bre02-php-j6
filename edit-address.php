<?php 

require "connexion.php";

if (!array_filter($_POST)){
   
     echo 'no data from form';
}else{
    $address = $_POST;
    var_dump($_POST);
    $id = $address['id'];

    $street = $address['street'];
    $city = $address['city'];
    $zipcode = $address['zipcode'];
}


$query = $db->prepare('UPDATE address SET street = :street, city = :city, zipcode =  :zipcode WHERE id = :id');
$parameters = [
    'id' => $id,
    'street' => $street,
    'city' => $city,
    'zipcode' => $zipcode
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user)


?>
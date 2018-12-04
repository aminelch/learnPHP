<?php
require 'entites/Client.php'; 

if(!empty($_POST)) {
    extract($_POST);
    $client = new Client(rand(), $cin,$nom,$prenom,$telephone);
    $client->insert($cin,$nom,$prenom,$telephone);
    header('location: ajoutClient.html');
}

?>
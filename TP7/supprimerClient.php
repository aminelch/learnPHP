<?php
require 'entites/Client.php'; 

if(!empty($_POST) && isset($_POST['r1'])) {
    $client = new Client();
    $client->delete($_POST['r1']);
    header('location: listeClients.php');
}else {
    header('location: listeClients.php');

}

?>
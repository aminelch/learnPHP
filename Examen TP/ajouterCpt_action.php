<?php
require 'entites/Client.php';
$client=new Client();
$compte= new Compte();
$client->insert(2,"test","test","unis","22222222");

//$compte->modifier(1,20);

if( isset($_POST) && ! empty($_POST)){
// $client->insert()
}
<?php 

include("src/Client.php");
$c=new Client(); 
$data= $c->getAll(); 
print_r($data);
die();

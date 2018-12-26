<?php
require 'entites/Location.php';
$location -> new Location();
if(isset($_POST) && !empty($_POST)){
    extract($_POST);
    $location->insert();

}
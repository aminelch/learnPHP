<?php
require 'entites/Voiture.php'; 

// if(!empty($_POST) && isset($_POST['carburant_select'])&& $_POST['carburant_select']!= '-1') {
//     $client = new Voiture();
//     header('location: listeClients.php');
// }else {
//     echo " <script>alert('aucune voiture trouvée !!');</script>";
// }

$voiture = new Voiture();

print_r($voiture->recherche('Essence'));
die();

?>


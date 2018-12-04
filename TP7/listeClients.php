<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1..">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des clients</title>
</head>
<body>
    <form action="supprimerClient.php" method="POST">
   <table border="2">
       <legend>Liste des clients </legend>
       <tr>
           <td></td>
           <td>#</td>
           <td>Numero CIN</td>
           <td>Nom</td>
           <td>Prénom</td>
           <td>Telephone</td>
        </tr> 
    

<?php 
require 'entites/Client.php';
$client = new Client();
$liste_client= $client->liste();

foreach ($liste_client as $c) {
    echo "<tr>";
    echo "<td>" . "<input type='radio' name='r1' value='" . $c['idClient']. "'> ". "</td>";
    echo "<td>" .$c['idClient'] . "</td>";
    echo "<td>" .$c['ncin'] . "</td>";
    echo "<td>" .$c['nom'] . "</td>";
    echo "<td>" .$c['prenom'] . "</td>";
    echo "<td>" .$c['telephone'] . "</td>";
    echo "</tr>"; 

}
?>


        </tr>
        
</table><br>
<input  type="submit" value="Supprimer">
    </form>
</body>
</html>
<?php
require 'entites/Client.php';
$client= new Client();
$listeclients = $client->liste();
?>
<html>
<body>
<fieldset>
    <legend>Nouvelle Location </legend>
    <form method="POST" action="ajouterLoc_action.php">
        Client : <input type="text" name="client"><br>
        <select name="client">
            <?php ?>
        </select>
        Voiture : <input type="text" name="voiture"><br>
        Date : <input type="text" name="date" placeholder="jj/mm/aa"><br>
        Nombre Jour: <input type="text" name="jour"><br>
        <input type="submit" value="Enregistrer"><input type="reset" value="Annuler">
    </form>
</fieldset>
</body>
</html>
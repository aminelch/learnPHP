<?php
require 'entites/Client.php';
$client = new Client();
$liste_client= $client->liste();
var_dump($liste_client);
die();
?>
<html>
<body>
<form action="ajouterCpt_action.php" method="POST">
    <legend>Nouveau Compte</legend>
    Client: <select name="nomClient">
    <?php foreach ($liste_client as $c) :?>
        <option value="<?=$c-nomCli. " ".$c->prenomCli ?>" ><?=$c-nomCli. " ".$c->prenomCli ?></option>
        <?php endforeach; ?>
    </select><br>
    Solde: <input type="text" name="solde"><br>
    <input type="submit" value="enregistrer">
</form>
</body>
</html>
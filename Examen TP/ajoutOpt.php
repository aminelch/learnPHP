<h2>
    Nouvelle Opération
</h2>
<form action="ajoutOpt_action.php" method="POST">
Numero compte: <input type="text"  name="numCpt"><br>
Date: <input type="text" name="dateOp"><br>
Montant: <input type="text" name="montant"><br>
Opération <input type="radio" name="operaion" value="versement">versement
<input type="radio" name="operaion" value="retrait">rerait<br>
<input type="submit" value="Valider">
</form>
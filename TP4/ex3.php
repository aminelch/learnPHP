<?php 
if(isset($_POST)): ?>
<table border="2">
    <tr>
        <td> Nom </td>
        <td><?=$_POST['nom'] ;?></td>
    </tr>

    <tr>
        <td> Prenom</td>
        <td> <?=$_POST['prenom'] ;?></td>
    </tr>
    <tr>
        <td> Mot de passe</td>
        <td> <?=$_POST['pass1'] ;?></td>
    </tr>
    <tr>
        <td> Cryptage </td>
        <td><?=md5($_POST['pass1']) ;?></td>
    </tr>
    <tr>
        <td> Age </td>
        <td><?=$_POST['age'] ;?></td>
    </tr>
    <tr>
        <td> Votre Sex </td>
        <td><?=$_POST['sex'] ;?></td>
    </tr>
    <tr>
        <td>Langue </td>
        <td><?=$_POST['langue'] ;?></td>
        
    </tr>
    <tr>
        <td>Loisir </td>
        <td><?=$_POST['loisir'] ;?></td>
    </tr>
    <tr>
        <td>Couleur </td>
        <td><?=$_POST['couleur'] ;?></td>
    </tr>
    <tr>
        <td>Commentaire </td>
        <td><?=$_POST['commentaire'] ;?></td>
    </tr>
    <tr>
        <td>Date </td>
<td>        <?= date("dd/mm/YYYY"); ?></td>
    </tr>
</table>

<?php endif; ?>

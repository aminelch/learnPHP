<?php 

    $montant_TVA= intval($_POST['prixunitaire']) * 0.07 ; 
    $prix_unitaireTTC= ($montant_TVA + $_POST['prixunitaire'])  ; 
    $total=$prix_unitaireTTC* $_POST['quantite']; 
?>


            
    <fieldset>
        <center><h3>Facture</h3></center>
        <b>Produit:</b> <?=$_POST['produits']; ?><br>
        <b>Quantité:</b> <?=$_POST['quantite']; ?><br><br>
    Merci,  <?=$_POST['nom_client']; ?>  pour votre confiance 
    <div style="float:right">Le total à payer:  <?=$total; ?></div> 
    </fieldset>
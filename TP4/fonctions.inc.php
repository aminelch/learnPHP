<?php
/**
*qui en fonction des informations saisies permet d'ajouter une nouvelle inscription dans un fichier texte (les données séparées par des virgules) ***/ 
function ajouterFichier($contenu){

    $fichier="clients2.txt" ; 
   $contenu .= ", ";
    $contenu2=implode($contenu);
    if(file_exists($fichier)){
        $fichier = fopen($fichier, "a");
        $ok = fwrite($fichier, $contenu);
        fclose ($fichier);


}

/* **************************************************************
***permettant d'afficher les inscriptions stockées dans le fichier.
**/ 
function afficherFichier () { 

}

function ageMoyen(){

}

function nbrHomme() { 
    // return ; 

}
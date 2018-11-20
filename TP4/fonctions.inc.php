<?php
define ("PATH", "clients2.txt");
/**
*qui en fonction des informations saisies permet d'ajouter une nouvelle inscription dans un fichier texte (les données séparées par des virgules) ***/ 
function ajouterFichier($contenu=[]){
	$infos=implode(',' ,$contenu);
	if(file_exists(PATH)){
		$handle = fopen(PATH, "a+");
		$infos .= "\r\n";
		$ok = fwrite($handle, $infos);
		fclose ($handle);
	}
}

/* **************************************************************
*** permettant d'afficher les inscriptions stockées dans le fichier.
**/ 
function afficherFichier () { 
	if(file_exists(PATH)) {
		$handle = fopen(PATH, "r");
		$contenu = fread($handle, filesize(PATH));
		return $contenu; 
	}
	fclose($handle);	
}
/* **************************************************************
***	permettant de calculer et afficher l'âge moyen des inscrits.
 */
function ageMoyen(){
	return contenuFichier();
}

/* **************************************************************
*** permettant de calculer et afficher le nombre d'homme.
 */

function nbrHomme() { 
	return  1; 

}

function contenuFichier(){
	if(file_exists(PATH)) {
		$handle = fopen(PATH, "r");
		$contenu = fread($handle, filesize(PATH));
		return $contenu; 
	}
}
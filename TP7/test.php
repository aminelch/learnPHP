<?php
require 'Compte.php';
$A = new Compte();
$A->numCompte=6001;
$A->nomProprietaire=" BEN SALEH MOHAMED";
$A->solde=850.175;

$A->transfererArgent(6001,100);

echo $A->consulterArgent();

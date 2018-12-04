<?php

class Agence{
    public $numCompte=0;
    public $nomProprietaire="";
    public $solde=0;

    public function deposerArgent($montant)
    {
        $this->solde = $montant;
    }

    public function retirerArgent($montant)
    {
        if($this->solde >0){
            return true;
        }
        $this->solde -= $montant;
    }

    public function consulterArgent(){
        return $this->solde;
    }

    public function transefrerArgent($compte=0, $montant){
        $this->compte=$compte;
        $this->solde+= $montant;
    }
}
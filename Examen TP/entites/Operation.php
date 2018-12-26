<?php 
include_once("APPModele.php");
class Operation extends APPModele
{
    private $numOp, $numCpt, $natureOp, $dateOp, $montant;

    function __construct($numOp=0, $numCpt=0, $natureOp="", $dateOp="", $montant=0) {
        $this->numOp=$numOp;
        $this->numCpt=$numCpt;
        $this->natureOp=$natureOp;
        $this->dateOp=$dateOp;
        $this->montant=$montant;
        parent::__construct();
    }

    //inserer une operation
    function insert($numOp=0, $numCpt=0, $natureOp="", $dateOp="", $montant=""){
        //si le compte existe on fait l'insertion et on retourne le nbr des lignes affectées
        if(recupererOperationSurCompte($numCpt)){
            $query="insert into operation (numOp, numCpt, natureOp, dateOp, montant)values (?, ?, ?, ?, ?)";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($numOp, $numCpt, $natureOp, $dateOp, $montant));
        }else {
            //modifier le solde de compte passé en param
            $this->modifier($numCpt,$montant);
        }
    }


        function delete($idClient) {
            $query = "delete from client where idClient=?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($idClient));
        }


        function liste(){
            $res=$this->pdo->prepare('SELECT * FROM client');
            $res->execute();
            $liste= $res->fetchAll(PDO::FETCH_OBJ);
            return $liste;




        }

    function modifier($idCli,$solde){
        $r =$this->pdo->prepare('UPDTAE Operation SET soldeCpt=? WHERE idCli=?');
        $r->execute([$idCli,$solde]);
    }
}

<?php 
include_once("APPModele.php");
class Compte extends APPModele
{
    private $numCpt, $idCli,$soldeCpt;
    
    function __construct($numCpt=0, $idCli="",$soldeCpt="") {
    $this->numCpt=$numCpt;
    $this->idCli=$idCli;
    $this->soldeCpt=$soldeCpt;
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

        function delete($id) {
            $query = "delete from operation where numOp=?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($id));
        }


        function liste(){
            $res=$this->pdo->query('SELECT * FROM operation');
            $posts=$res->fetchAll(PDO::FETCH_OBJ);
            return $posts;
    
        }

    /***
     * Recuprér les operations sur un compte passé en param
     * @param int $idCpt
     * @return bool
     */
function recupererOperationSurCompte($numCpt=0){
    $query = "SELECT * FROM compte where numCpt=?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($numCpt));
}

    }
<?php 
include_once("APPModele.php");
class Client extends APPModele
{
    private $idClient,$nomCli,$prenomCli,$adrCli,$telCli;
    
    function __construct($idClient="",$nomCli="",$prenomCli="",$adrCli="",$telCli="") {
    $this->idClient=$idClient;
    $this->nomCli=$nomCli;
    $this->prenomCli=$prenomCli;
    $this->adrCli=$adrCli;
    $this->telCli=$telCli;
    parent::__construct();
    }

    function insert($idClient,$nomCli,$prenomCli,$adrCli,$telCli){
        $query="insert into client(idCli, nomCli, prenomCli,adrCli,telCli)values (?, ?, ?, ?)";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idClient,$nomCli,$prenomCli,$adrCli,$telCli));
        

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
}
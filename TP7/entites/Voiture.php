<?php 
include_once("modele.php");
class Voiture extends Modele
{
    private $idVoiture, $numSerie,$marque,$carburant,$prixLocation;
    
    function __construct($idVoiture=0, $numSerie="",$marque="",$carburant="",$prixLocation="") {
    $this->idVoiture=$idVoiture;
    $this->numSerie=$numSerie;
    $this->marque=$marque;
    $this->carburant=$carburant;
    $this->prixLocation=$prixLocation;
    parent::__construct();
    }

    function insert($idVoiture="" , $numSerie="",$marque="",$carburant="",$prixLocation=""){
        $query="insert into Voiture(idVoiture,numSerie,marque,carburant,prixLocation)values (?, ?, ?, ?, ?)";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idVoiture, $numSerie,$marque,$carburant,$prixLocation));
        

        }

        function delete($idVoiture) {
            $query = "delete from client where idClient=?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($idVoiture));
        }


        function liste(){
            $res=$this->pdo->query('SELECT * FROM Voiture');
            $posts=$res->fetchAll();
            return $posts;
    
        }
        function recherche($critere){
            // $res=$this->pdo->prepare("SELECT * FROM Voiture WHERE carburant = ?");
            // $res->execute([$critere]);
            // return $res;


            $query=$this->pdo->query("SELECT * FROM Voiture WHERE carburant = $critere");
            $res=$query->fetch();
            return $res;
        }


    }
<?php 
include("modele.php");
class Location extends Modele
{
    private $idLocat, $idClient,$idVoiture,$nbrJour,$dateLoc;
    
    function __construct($a="", $idClient="",$idVoiture="",$nbrJour=0,$dateLoc=null) {
    $this->idLocat=$a;
    $this->idClient=$idClient;
    $this->idVoiture=$idVoiture;
    $this->nbrJour=$nbrJour;
    $this->dateLoc=$dateLoc;
    parent::__construct();
    }

    function insert($idLocat="", $idClient="",$idVoiture="",$nbrJour=0,$dateLoc=null){
        $query="insert into Voiture(idLocat, idClient, idVoiture, nbrJour, dateLoc)values (?, ?, ?, ?, ?)";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idLocat, $idClient,$idVoiture,$nbrJour,$dateLoc));
        

        }

        function delete($idLocat) {
            $query = "delete from Location where idLocat=?";
            $res=$this->pdo->prepare("delete from Location where idLocat=?");
            return $res->execute(array($idLocat));
        }


        function liste(){
            $res=$this->pdo->query('SELECT * FROM Location');
            $posts=$res->fetchAll(PDO::FETCH_OBJ);
            return $posts;
    
        }


    }

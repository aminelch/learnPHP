<?php
//  namespace Revision;
include_once "DBModele.php";



class Client extends DBModele
{
    private $cin,$nom, $prenom, $telephone;
    public function __construct($cin="",$nom="", $prenom="", $telephone="")
    {
        $this->cin=$cin;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->telephone=$telephone;
//        parent::__construct();
    }

    public function  getAll() {
        $res= $this->db->query("SELECT * FROM Client");
        return $res->fetchAll();
    }
}
<?php
abstract class Modele {
    const host="localhost";
    protected $pdo;
    const user="aminelch";   
    const login="demo";
    const bd="agence";

    function __construct(){
        $this->pdo=new PDO("mysql:host=".self::host.";dbname=fdfdf".self::bd,"ggg", self::login);
    }

    function connect(){
        $this->pdo=null;
    
    }

}

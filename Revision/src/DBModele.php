<?php
// namespace Revision;
use \PDO;
 abstract class DBModele{
   protected $db=null; 



   public function __construct(){
        $this->db= new PDO("mysql:host=localhost;dbname=agence","aminelch","demo");
   }
    
   public function __destruct()
   {
    $this->db=null;        
   }

}

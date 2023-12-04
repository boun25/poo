<?php
 class Personne {

   protected $_prenon;
   protected $_nom;
   protected $_age;

   public function setPrenom($prenom){
      $this->_prenon = $prenon;
   }
   public function setNom($nom){
      $this->_nom = $nom;
   }

    public function setAge($age){
      $this->_age = $age;
   }


   public function getPrenom(){
      return $this->_prenom ;
   }

   public function getNom(){
      return $this->_nom ;
   }

     public function getAge(){
        return $this->_age ;
     }
  
  
} 
?>
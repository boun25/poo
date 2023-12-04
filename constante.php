<?php
class Eleve3 {
    const ECOLE = 'Elève de notre école'; // création de la constante
    private $_prenom;

    public function setPrenom($prenom) {
    $this->_prenom = $prenom;
    }
    public function getPrenom(){
    return $this->_prenom;
    }

}
//instantiation = new objet
$eleve3 = new Eleve3;
//affichage de la constence 
echo $eleve3 ::  ECOLE; 


<?php
class Personne {
  public $prenom;
  public $nom;
  public $age;

  public function __construct($prenom, $nom,$age){
    $this->prenom=$prenom;
    $this->nom=$nom;
    $this->age=$age;
  }
  public function nomcomplet(){
   // echo $this->nom.' '. $this->prenom . ' '.$this->age . PHP_EOL;
   return sprintf ('%s %s %d' ,  $this->nom, $this->age, $this->prenom);
  }
  

  public function danser(){
    echo $this ->prenom."est entre de danse ". PHP_EOL;
  }


}
$magne = new Personne('magne','jean', 120);
$iZAK = new Personne('izak','jacque', 10 );

// echo $magne->prenom .PHP_EOL ;
// echo $iZAK->prenom .PHP_EOL;
// echo $iZAK->prenom .PHP_EOL;


$magne->danser();
$ToutleNom=$magne-> nomcomplet();
echo "le nom complet est ici " .$ToutleNom .PHP_EOL;


//création d'un objet  à partir de la classe personne ou création d'une nouvelle instence de la classe personne

//  $magne = new personne();
//  $IZAK = new personne();
//  echo  $magne-> prenom . PHP_EOL;
//  echo  $magne-> prenom . PHP_EOL;
?>
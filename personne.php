<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   //
   class Pers{
       private $prenom;
       private $nom;
       private $age;
   
       public function __construct($prenom, $nom, $age){
           $this->prenom=$prenom;
           $this->nom=$nom;
           $this->age=$age;
       }
   
       // setter
       public function setPrenom($prenom){
           $this->prenom=$prenom;
       }
   
       public function setNom($nom){
           $this->nom=$nom;
       }
   
       public function setAge($age){
           $this->age=$age;
       }
   
       // getter
       public function getPrenom(){
           return $this->prenom;
       }
   
       public function getNom(){
           return $this->nom;
       }
   
       public function getAge(){
           return $this->age;
       }
   
       public function saluer(){
           echo 'Salut les amis';
       }
   }
   $Emi = new Pers('Emilienne', 'MAILLARD', 2);
   echo $Emi->getPrenom();
   echo $Emi->getNom();
   echo $Emi->getAge();
   ?>










   <?php
//comment crée une class personne //
class Personne{
    public $prenom;
    public $nom;
    public $age;

    public function __construct($prenom, $nom, $age){
        $this -> prenom = $prenom;
        $this -> nom = $nom;
        $this -> age = $age;
    }

    public function nomComplet(){
        echo $this -> nom.' '.$this -> prenom.' '.$this -> age.'.'.PHP_EOL;
        // autre manière de l'écrire :
        // return sprintf('%s %s %d'.$this -> nom.$this -> prenom.$this -> age);
    }

    public function danser(){
        echo $this -> prenom.' est en train de danser'.PHP_EOL;
    }
    };

    // création d'un objet à partir de la classe personne ou création d'une nouvelle instance de la classe personne
    $magne = new Personne('Magne', 'Jean', 102);
    $isac = new Personne('Isaac', 'Jacques', 200); 

    echo $magne -> danser();
    echo '<br>';
    $ToutLeNom = $magne -> nomComplet();
    echo '<br>';
    echo 'Le nom complet est : '.$ToutLeNom.PHP_EOL;
?>




</body>
</html>
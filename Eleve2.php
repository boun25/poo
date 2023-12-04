<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Eleve2 {
    private $_prenom;
    //constructeur
      public function __construct(){
        $this->dateInscription = date('d/m/Y H: i: s' );


    }

    
    
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    
    public function getPrenom(){
     return $this->_prenom;
    }
}


        ?>
</body>
</html>
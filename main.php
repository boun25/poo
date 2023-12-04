<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   include('Eleve2.php');

   $eleve1 = new Eleve2;
   $eleve1 -> setprenom('diane');
   echo $eleve1 -> getPrenom().' '.$eleve1->dateInscription.'<br />';


   $eleve2 = new Eleve2;
   $eleve2 -> setprenom('martin');

   echo $eleve1 -> getPrenom().''.$eleve2->dateInscription;


   ?> 
</body>
</html>
<?php
 include("personne.php");
   include("Agriculteur.php");
    include('Boulanger.php');
   include('infirmier.php');
   

    $eveN1 = new Personne();
    $eveN2 = new Infirmier();
    $eveN3 = new Agriculteur();
    $eveN4 = new Boulanger();


    $eveN1->setPrenom('alain');
    $eveN2->setPrenom('bob');
    $eveN3->setPrenom('juline');


    echo $eveN3->dormir();
   
   $eveN3->setAge(22);

   // echo $eveN1->getPrenom().'<br />';
   // echo $eveN2->getPrenom(). 'qui a' ,'<br >' .$eveN2->getAge(),'ans';
   ?>
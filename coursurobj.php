<?php
// decla de la class 
class Voiture {
  public $marque;
  public $couleur;

//fonction constructuon oblicatoire 
  public function __construct($marque, $couleur){
    $this->marque=$marque;
    $this->couleur=$couleur;

  
  }
  //decinire l'affichage 
  public function nomvoit(){
   echo $this->marque.' '. $this->couleur . PHP_EOL;
  }
  
}
//decla des instance ou object
$teste = new Voiture('ford','bleu');
$reteste = new Voiture('porsche','vert');
// rappel de fonction 
$teste -> nomvoit();
$reteste -> nomvoit();
/* cours en orientation objet*/ 
/*la prommamation orientéé oblet est beaucoup moins linéaire par rapport à la programation procédurale .Som principal avantage est d'être mieux organisé permettant ainsi de faciliter la lisibilité du code et sa mainteance. Son concept est peu plus difficle à maitriser que pour celui du langage procédural qui nousest plus familier dans sa manière de s'exécuter.
Son principe est de faire en sorte que tout nous allons coder devienne un objet.
Qu'est qu'un objet Un objet 

un objet est tout ce que vous avez l'habitude de manipule au quottidien exemple un livre un fauteil

Vous
Différence entre procédural et POO
Ce sont sont deux manières de programmer. Sur le fond, utilse le meme langage c'est à dire tout ce que nous avons appris jusqu'ici, elle se différencie sur l'approche de la conception du programmme lui-meme.
Comme nous l'avons compris, la POO a l'avantage d'avoir un code plus clair que celui du procédural et donc plus facile à mettre à jour. Il sera également beaucoup plus facile de le réutilser dans d'autres portions de code de notre application ou site internet ce qui est loin d'etre négligable.
en résume on peut rétenir qu'il existe deux facon de programmer en pfp : pOO ou procédural 
il ya donc pas de bon ou de mauvaise manier de coder nous dison simplement que plus votre site ou application grossira plus vous aurez interét a utilise la poo


​
​
*** LES fondamentaux de la POO****
--Principe de POO--
La POO se base sur le principe que tout élément inscrit est un objet. Le principe sera de créer des objets, pour ce faire, nous utilsons des classes.
Une classe est donc un bloc de code culturel qui servira de moules pour la création d'un ou des objets.

​

​
La classe --
Nous venons de voir que le principe d'une classe est de créer un objet. La classe utilse le mot-clé class et contient un ensemble de fonctions qui servira de modèle à la création d'un objet.
Ses fonctions porteront le nom de " méthodes". Lorsqu'on crée une fonction à l'intérieur d'une classe, on l'applelle "méthode ". En revanche le principe de fonctionnnement est totalement identque.
 

​
les objets --
Maintenant que nous avons défini une classe, nous pouvons alors créer un objt issu de cette classe. On dit alors qu'on instancie la classe ou que l'objet est une instance de la classe.
Ces obejts seront donc construits à partir des méthodes (fonctions) et des propriétés ou attributs (variables) de la classe.
En retenir que la POO est basée sur les obkets et les classes. On crée des objets à partir d'une classe. Chaque objet a accès aux méthodes et aux propriétés de la classe qui les a créees.

Création d'une classe --
PAr convention, le nom de la classe commence par une lettre majuscule et et chaque classe sera créee dans un fichier unique.
Le fichier PHP contiendra donc uniquement la classe ainsi que ses attributs et ses méthodes. et ce fichier pourra alors être appelé partout dans notre site ou application grâce notamment aux inclusions de fichiers que nous appris jusqu'ici.
Synthaxe:

 <-----suite------->





Les différentes visibilitées d'une propriété

    ** La visibilité publique **
    Une propriété de visibilité publique peut etre appelée de n'importe quel endroit du site. Cela signifie également sa syntaxe: public $_propriete;

    ** La propriété de visibilité privée
    Une propriété de visibilité privée ne peut être appelé que depuis la classe. Cela signifie égalemment qu'elle pourrra être modifié uniquement à partir de la classe.

    Sa syntaxe : private $_propriete;

    ** Ma propriété de visibilité protégée
    Une propriété de visibilité protégé ne peut être appelée que depuis la classe parent mais aussi depuis une ou des classes enfants. Cela signifie qu'elle ne pourra être modifié qu'à partir de la classe parent ou des classes enfants.
    Sa syntaxe : protected $_propriete;

    ** LES ASSESSEURS ET LES MUTATEURS

    -- Les mutateurs
    Un mutateur (ou un setter) permet d'affecter une valeur à une propriété d'un objet. Grâce aux mutateurs nous allons pouvoir affecter n'importe quel valeur a notre propriété lors et ou après la création d'un nouvel objet.

        -- Créer un mutateur
        La création d'un mutateur se fera donc au travers d'une méthode. Le mutateur portera la mention set, comme setter.
        Puis nous lui donnerons le nom de la propriété qu'il devra affecter d'une nouvelle valeur.
        Syntaxe:

        public function setPrenom($prenom){
            $this->prenom=$prenom;
        }
        setPrenom() est une méthode de type mutateur et de visibilité publique. Elle possède un paramètre $prenom. Ce paramètre est directement affecté à l'attribut $prenom grâce aux commandes $this->prenom;
        Grâce à cette méthode à qui nous passons la varaible $prenom, nous pouvons affecter un prenom à chaque personne que nous crééront avec la table Pers (ou Personne).

        --- Accéder à un muatateur
        L'accès à un mutateur se fait comme nous l'avons vu dans l'exemple de la Pers c'est à dire avec l'aide du caractère ->;
        $Emi = new Pers();
        $Emi->setPrenom('Pierre'); nous accèdons à la méthode setPrenom en lui affectant l'argument Pierre.

        En résumé : grâce au mutateur, nous avons pu modifier la valeur de la propriété privée (private), en lui affectant une valeur de notre choix.

    
    -- Les assesseurs
    Un assesseurs (ou getter) permet d'afficher le contenu d'une propriété. Il s'agit d'une méthode, au même titre que le setter.

        -- Créer un assesseur
        La création d'un assesseur se fera donc au travers d'une méthode. L'assesseur portera la mension get, comme getter. Puis nous lui donnerons le nom de la propriété dont il affichera la valeur.
        Syntaxe:

        public function getPrenom(){
            return $this->prenom=$prenom;
        }
        nb: getPrenom() est une méthode de type assesseur et de visibilité publique. Elle est relativement simple puisqu'elle se contente de retourner la valeur du paramètre $prenom.
        Grâce à la méthode getPrenom(), nous récupérons le contenu de la propriété $prenom.

        -- Accéder à un assesseur
        L'accès à un assesseur se fait avec l'aide du caractère ->;
        $Emi = new Pers;
        $Emi -> setPrenom('Pierre');
        echo $Emi->getPrenom();
        Sur la dernière ligne, nous accédons à la méthode getPrenom afin de récupérer la valeur de la propriété $prenom.
        
        En résumé, grâce à l'assesseur, nous avons pu accéder à la valeur de l'attribut privée $prenom;

        CONCLUSION
        Un mutateur permet de modifier la valeur d'une propriété. Alors qu'un assesseur permet d'en récupérer son contenu

        LE PRINCIPE DE L'ENCAPSULATION
        **** Défintion
        Le principe de l'encapsulation est une notion fondamentale de la poo. L'encapsulation consisite à protéger l'information contenue dan un objet en ne proposant que des méthodes pour manipuler les objets.
        ***Mise en pratique
        Sans le savoir nous avons dans la partie précédente mis en place ce principe d'encapsulation. En effet, concerant l'attribut $prenom, nous lui avons effecté une visibilité privée. Nous avons vu qu'il n'était pas possible d'y accéder directement. C'est la raison pour laquelle nous avons crée des méthodes afin de pouvoir modifier et afficher le contenu de la propriété $prenom (et les autres : $nom, $age)/
        Et lorsque nous avons crée ces méthodes, nous leur avons attribué une visibilite publique afin de pouvoir y accéder et donc les maninuler 
       
        ***les niveaux d'accessibilité 
        les niveau accessibilité vont vous semble familiers pusque ns les avons déja vu précédement 
        rappel :

​
        visibiliré publique: permet d'accéder à la propriété ou à la méthode depuis l'intérieur ou depuis l'extérieur de la classe. La visibilité privée: permet d'accéder à la propriété ou à la méthode uniquement depuis l'intérieur de la classe.
        La visibilité protégée permet d'accéder à la propriété ou à la méthode depuis l'intérieur de la classe elle-memem ou de ses classes filles.
        **Principe général
        Les propriétés d'un objets seront privées ou protégées afin de n'être accessible que depus la classe elle-memem ou depuis une classe fille.
        Les méthodes d'un objet seront publiques afin de pouvoir y accéder de n'importe quel endroit de notre site, afin de manipuler les attrituts (ou propriétés).
        En résumé, grace aux exemple vus, nous avons acquis le principe de l'encapsulation, ce qui permet d'en faire un simple rappel et bien ordonner nos nouvelles connaissances concernant la POO

     l'heritage 
     ****principe de l'heritage 
        Lorsque ous créons une classe, celle-ci peut-être une classe générale qui contiendra ses propres propriéttés et méthodes Mais nous aurons peut-être besoin d'avoir des classes spécifiques qui soient reliées à la classe générale.
        *** Cas concret*/
        class Eleve {
        private $_prenom;
        public function setPrenom($prenom){
        $this->_prenom = $prenom;
        }
        public function getPrenom(){
           return $this->_prenom ;
        }
    }

/**nous allons créer une nouvelle classe qui sera une classe fille de la classe Eleve. cette nouvelle classe appellera la
propriété $_prenom de la classe Eleve, et lorsque nous demanderons à afficher le prénom issu de cette nouvelle classe,nol
souhaiterons obtenir un prénom dont la première lettre sera en majuscule.
Nous enrichirons également cette classe d'une propriété devant récupérer l'age. Nouļ appelrons, celle classe Elevefille et nous nommeron , le fichier contenant cette nouvelle  classe elevefille.class.php  

Avant d'écrire cette nouvelle classe, nous allons devoir modiifer la visibilité de la propriété =_prenom de la classe Eleve, puisque nous souhaitons accéder à cette proprité depuis la classe fille que nous allons créer.
Par conséquent, la visibilit" de la propriété $_prenom ne sera plus privée mais protégée (protected). Ceci afin de pouvoir y accéder depuis la classe fille.
*/
class Eleve {
    protected $_prenom;
    public function setPrenom($prenom) {
    $this->_prenom = $prenom;
    }
    public function getPrenom() {
    return $this->_prenom;
    } 
}
/* Maitenant nous pouvons créer notre classe fille qui pourra accéder à la propriété $_prenom de la classe Eleve. */
 class Elevefille extends Eleve{
}


    /* Ainsi nous pouvons accéder à la classe mère, soit la classe Eleve. ensuite, nous avons dit que nous souhaitons accéder à la propriété =_prenom de la classe Eleve afin de pouvoir écrire le prénom avec une première lettre en majuscule. Pour cela, il nous suffut simplement de réecrire la méthode setPrenom à l'intérieur de la classe Elevefille en lui ajoutant ction ucfirst() qui permet d'afficher la première lettre d'une chaine de caractères en majuscule.
    */
                            // public function setPrenom($prenom) {
                            // $this->_prenom = ucfirst($prenom);
                            // }
    /* Il n'est pas utilse de réecrire a mathore et prenom puisque celle-ci a déja ete ecrit dans la classe eleve , dont la classe elevefille en est une héritiére 
    il nous reste a declarer la proprieté concernant l'age ainsi que ses méthodes (assesseur et mutateur). celle-ci seront propre à la classe Elevefille */

    class Elevefille extends Eleve{ private $_age;
    public function setAge($age) { $this->_age = $age;
    }
    public function getAge(){ return $this->_age;
    }
    public function setPrenom($prenom) { $this->_prenom = ucfirst ($prenom);
    }
    }
   /* Nous déclarons la propriété $_age en visibilité privée (private) car cette proprieté ne sera accessible ue par la classe qui la contient . c'est -à-dire le classe Elevefille . 
   Ensuite nous déclarerons la 
   
   déclarons la propriété $_age en visibilité privée (private) car cette propriété ne sera accessible que par la classe qui la contient. C'est-à-dire la classe Elevefille.
   Ensuite nous déclarons les méthodes get et set afin de pouvoir modifier l'age et l'afficher en cas d'appel. Exactement comme nous l'avons fait pour la propriété $_prenom de la classe Eleve.
   *** Récupération des informations
   Maintenant que ls deux classe Eleve et Evelefille sont créees, nous pouvons les inclures dans un autre fichier (index.php) et nous servir de leur méthodes.
   */

                            // include('Eleve.php');
                            // include('Elevefille.class.php');
                            // $eleveN1 new Eleve();
                            // $eleveN2 = new Elevefille();

                            // $eleveN1->set Prenom('alain');
                            // $eleveN2->setPrenom('juline');
                            // $eleveN2->setAge(22);

                            // echo $eleveN1->getPrenom().'<br />';
                            // echo $eleveN2->getPrenom(). 'qui a' .$eleveN2->getAge(),'ans';
   
    /* LE CONSTRUCTEUR
    Le cons nous allons tructeur est ce que l'on appelle en POO, une méthode magique. son principe est de créer des valeurs par défaut au moment de la création d'un nouvel objet. Le constructeur est donc une m"thode. Afin de le différencier d'une méthode dite classique, le constructeur sera déclaré ainsi
    function construct()
    Il possèdera deux caactères underscores et sera suivi d'un mot clé construct.
    12
    14
    ***Création
    16 Nous allons reprendre le fichier Eleve.class.php en remettant sa propriété $_prenom en visibilité privée, car nous n'allons pas utiliser de classe fille afin de ne pas complexifier l'explication.*/
    class Eleve {

    private  $_prenom;
    public function setPrenom($prenom) {
    $this->_prenom = $prenom;
    }

    public function getPrenom() { 
        return $this->_prenom;
    }

    }
    /* nous souhaitons enrichir notre classe Eleve en récupérant de mani re automatique la date d'inscription d'un nouvel élève au momenyt de sa déclaration lors de l'appel de notre classe Eleve grace au mot clé new. public function _construct() {
    $this->dateInscription = date('d/m/Y');
    }
    NB: notre constructeur a été déclarée en visibilité publique afin de pouvoir être invoqué de n'importe quel endroit de notre site. I
    Nous définissons l'objet courant grâce à la vareiable $this, en lui affectant la date au moment de l'inscription*/
    class Eleve {
        private $_prenom;
        //constructeur
            public function construct() {
            $this->dateInscription = date('d/m/Y');
            }
        public function setPrenom($prenom){
        $this->_prenom = $prenom;
        }
        
        public function getPrenom() {
        return $this->_prenom;
    
        }
    }
        /* Nous allons à présent créer un nouvel elève puis nous irons récupérer sa date d'inscripti

       ----- les principe d'une constante---
       
​
​
Une constante de classe sera toujours attachée à la classe. Elle ne sera accessible qu'en lecture et donc ne pourra en
aucun cas être modifiable, ni de l'intérieur ni de l'extérieur de la classe.
Une constante se définie à I aide du mot clé const et suivie de son nom écrit en majuscule.
const NOMDELACONSTANTE;
--Création d'une constante
Nous allons prendre le fichier Eleve.class dans 1'état suivant, afin de ne pas complexifier 1' explication du
fonctionnement de la constante.
*/
class Eleve {
    private $_prenom;
    public function setPrenom($prenom){
    $this->_prenom = $prenom;
    }
    public function getPrenom(){
   return $this->_prenom;
 }
}

/*Nous souhaiton s définir une constante à notre classe. Un élément statique, invariable et qui sera toujours ainsi. La cvonstante que nous voulons créer sera la chaine de caractères suivante:
Elève de notre école.
Syntaxe: const ECOLE = 'Elève de notre école';
NB: Par défaut, une constante est toujours publique. Donc on ne précise pas sa visibilité.
Egalement, une constante est dite statique (static). Pour récupérer sa valeur, nous utiliserons les caractère :: (double deux points)*/


?>
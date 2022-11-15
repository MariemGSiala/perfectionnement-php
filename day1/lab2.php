<?php
class Etudiant 
{
   //les attribut
   public $nom;
   public $age;
   public static $nbMax=20;//attribut de la classe et non d'instance
   public static $nbEtudiant;
   public function __construct()
   {
      self::$nbEtudiant++;
   }
   //les méthodes
   public function getNom() {
    return $this->nom;
   }

   public function getAge(){
    return $this->age;
   }


   public function setNom($nom) {
    $this->nom = $nom;
   }

   public function setAge($age){
    $this->age = $age;
   }


   public function infoEtudiant()
    {
return "Nom: ".$this->nom." Age: ".$this->age;
    }

    public static function getNbMax()
    {
        return self::$nbMax;
    }
   
}

$e1 = new Etudiant();
$e1-> setNom ("Mariem");
$e1-> setAge (30);
echo "</br>nombre actuel des etudiants: ".Etudiant::$nbEtudiant;

$e2 = new Etudiant();
$e2-> setNom ("Amin");
$e1-> setAge (20);
 
echo "</br>nombre actuel des etudiants: ".Etudiant::$nbEtudiant;
echo "</br>nombre maximal: ".Etudiant::getNbMax();

/*echo $e1->infoEtudiant();
echo"<br/>";
echo $e2->infoEtudiant();
echo "<br/>";*/
?>
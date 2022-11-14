<?php
class Etudiant 
{
   //les attribut
   public $nom;
   public $age;
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
   
}

$e1 = new Etudiant();
$e1-> setNom ("Mariem");
$e1-> setAge (30);

$e2 = new Etudiant();
$e2-> setNom ("Amin");
$e1-> setAge (20);

echo $e1->infoEtudiant();
echo"<br/>";
echo $e2->infoEtudiant();
echo "<br/>";
?>
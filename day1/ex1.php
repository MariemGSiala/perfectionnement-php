<?php
class Ecole 
{
   //les attribut
   private $nom;
   private $adresse;
   private $tel;
   //constructeurs
  

   public function __construct($nom,$adresse,$tel)
   {
    $this->nom= $nom;
    $this->adresse= $adresse;
    $this->tel= $tel;


   }


   
   //les méthodes
   public function getNom() {
    return $this->nom;
   }

   public function getAdresse(){
    return $this->adresse;
   }

   public function getTel(){
    return $this->tel;
   }


   public function setNom($nom) {
    $this->nom = $nom;
   }

   public function setAdresse($adresse){
    $this->adresse = $adresse;
   }

   public function setTel($tel){
    $this->tel = $tel;
   }

   public function getInfoEcole()
   {
return "Nom: ".$this->nom." Adresse: ".$this->adresse." Tel :".$this->tel;
   }
   
}

$e1 = new Ecole("Ecole1","Paris","111111111");
$e2 = new Ecole("Ecole2","Lyon","222222222");
$e3 = new Ecole("Ecole3","Nice","333333333");

$tab=array($e1,$e2,$e3);
//var_dump($tab);
foreach($tab as $e)
{
    echo $e->getInfoEcole();
}

//echo $e1->getInfoEcole();
//$e1-> setNom ("Ecole1");
//$e1-> setAdresse ("Paris");
//$e1-> setTel ("111111111");

/*$e2 = new Ecole();
$e2-> setNom ("Ecole2");
$e2-> setAdresse ("Lyon");
$e2-> setTel ("222222222");

$e3 = new Ecole();
$e3-> setNom ("Ecole3");
$e3-> setAdresse ("Lille");
$e3-> setTel ("333333333");*/


?>
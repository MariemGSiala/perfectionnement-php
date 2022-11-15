<?php
class voiture 
{
   //les attribut
   private $couleur;
   private $prix;
   private $marque;
   private static $vitesseMax=100;
   public static $nbVoiture=0;

   //constructeurs
  

   public function __construct($couleur,$marque,$prix)
   {
    $this->couleur= $couleur;
    $this->marque= $marque;
    $this->prix= $prix;
    self::$nbVoiture++;


   }
   public static function getVitesseMax()
   {
    return self::$vitesseMax;
   }


   
   //les méthodes
   public function getCouleur() {
    return $this->couleur;
   }

   public function getPrix(){
    return $this->prix;
   }

   public function getMarque(){
    return $this->marque;
   }


   public function setcouleur($couleur) {
    $this->couleur = $couleur;
   }

   public function setMarque($marque){
    $this->marque = $marque;
   }

   public function setPrix($prix){
    $this->prix = $prix;
   }
   public function __tostring()
   {
return "Couleur: ".$this->couleur." Marque: ".$this->marque." Prix :".$this->prix;
   }
   
}

$v1 = new Voiture("Noir","BMW","111111111");
//echo $v1;
$v2 = new Voiture("Bleu","REnault","222222222");
$v3 = new voiture("Rouge","Hyundai","333333333");

$mesVoitures=array($v1,$v2,$v3);
//var_dump($tab);


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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des voitures  </title>
</head>
<body>
    <div>
        <table border="2" align="center">
            <tr>
                <th>Couleur</th>
            <th>Marque</th>
            <th>prix</th>
            </tr>
            <?php
            foreach ($mesVoitures as $voiture) {
                echo"<tr>";
                echo"<td>".$voiture->getCouleur()."</td>";
                echo"<td>".$voiture->getMarque()."</td>";
                echo"<td>".$voiture->getPrix()."</td>";
                echo"</tr>";
                
            }
            ?>

        </table>
        <?php echo voiture::getVitesseMax();
        //echo $nbVoiture;
        ?>
    </div>
</body>
</html>
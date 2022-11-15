<?php
class Oiseau extends Animal
{
    public function seDeplacer(){echo "je vole";}
}
class Poisson extends Animal
{
    public function seDeplacer(){echo "je nage";}
}
class Serpent extends Animal
{
    public function seDeplacer(){echo "je rampe";}
}
abstract class Animal{
    public $espece;
    public $age;
    public function dormir(){echo "je dors";}
    public function manger(){echo "je mange";}
    public abstract function seDeplacer();
}
$animals=array (new Oiseau(),new Poisson(), new Serpent());
foreach ($animals as $animal) {
    echo $animal->seDeplacer()."</br>";
}
?>
<?php
class Personne{
    protected $nom;
    protected $age;
    private $numInscreption;
    public function __toString()
    {
      return "Nom: ".$this->nom."age: ".$this->age."Num : ".$this->numInscreption;  
    }
}

?>
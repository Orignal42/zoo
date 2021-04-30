<?php
class Aquarium extends Enclos{
    
    protected $salinite;
    protected $profondeur; 
    public function __construct($nom, $superficie, $proprete, $nbAnimals, $nbMax, $profondeur, $salinite){

       parent::__construct($nom, $superficie, $proprete, $nbAnimals, $nbMax);

            $this->profondeur = $profondeur;
            $this->salinite = $salinite;
    }
public function setSalinite($salinite){
    $this->salinite=$salinite;
}
public function getSalinite(){
    return $this->salinite;
}
public function setProfondeur($profondeur){
    $this->profondeur=$profondeur;
}
public function getprofondeur(){
    return $this->profondeur;
}
}
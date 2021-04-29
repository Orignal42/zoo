<?php
class Aquarium extends Enclos{
    
    protected $salinite;
    protected $profondeur; 
    public function __construct($enclosname,$surface,$salinite,$profondeur){
        $this->enclosname=$enclosname;
        $this->surface=$surface;
        $this->salinite=$salinite;
        $this->profondeur=$profondeur;
}
public function setSalinite($name){
    $this->name=$name;
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
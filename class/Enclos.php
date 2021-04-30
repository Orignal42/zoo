<?php
class Enclos{
    protected $enclosname;
    protected $surface;
    protected $sale=false;
    protected $empty=false;
    protected $animauxpresent;
    protected $animauxmax;
    protected $animalList=[];
    
    public function __construct($enclosname,$surface){
        $this->enclosname=$enclosname;
        $this->surface=$surface;
        

    }
    public function setenclosName($enclosname){
        $this->enclosname=$enclosname;
    }
    public function getenclosName(){
        return $this->enclosname;
    }
    public function setSurface($surface){
        $this->surface=$surface;
    }
    public function getSurface(){
        return $this->surface;
    }

    public function setSale($sale){
        $this->sale=$sale;
    }
    public function isSale(){
        return $this->sale;
    }

    public function AddAnimal(Animaux $animal){
        array_push ($this->animalList, $animal);
    }
    
    public function getAnimal(){
        return $this->sale;

    }
    public function RemoveAnimal(){
        array_pop($this->animalList );
    }
    
        public function afficherAnimaux(Animaux $animaux){
            return $this->animaux;
        }
    
        public function getAfficherAnimaux(){
            return $this->animalList;
        }
        public function setAfficherAnimaux($animaux){
            $this->animalList = $animaux;
        }

        
    }

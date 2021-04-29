<?php
class Enclos{
    protected $enclosname;
    protected $surface;
    protected $sale=false;
    protected $animauxpresent;
    protected $animauxmax;
    
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

    public function AddAnimal(){

    }
    public function RemoveAnimal(){
        
    }
}
<?php
class Voliere extends Enclos{
    protected $verifsommet;
    protected $hauteur;
    public function __construct($enclosname,$surface,$verifsommet,$hauteur){
        $this->enclosname=$enclosname;
        $this->surface=$surface;
        $this->verifsommet=$verifsommet;
        $this->hauteur=$hauteur;
}
public function setVerifsommet($verifsommet){
    $this->verifsommet=$verifsommet;
}
public function getVerifsommet(){
    return $this->verifsommet;
}
public function sethauteur($hauteur){
    $this->hauteur=$hauteur;
}
public function gethauteur(){
    return $this->hauteur;
}

    
}
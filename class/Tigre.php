<?php

class Tigre extends Mammifere{

protected $gestation=100;


public function __construct($name,$namespecie, $poids, $taille, $age, $sex,$crie,$loco){
    $this->name=$name;
    $this->namespecie=$namespecie;
    $this->poids=$poids;
    $this->taille=$taille;
    $this->age=$age;
    $this->sex=$sex;
    $this->crie=$crie;
    $this->loco=$loco;
    
    
}


}
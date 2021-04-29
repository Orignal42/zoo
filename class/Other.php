<?php

class Other extends Animaux{
    protected $layegg;



    public function __construct($name,$namespecie, $poids, $taille, $age, $sex,$crie){
        $this->name=$name;
        $this->namespecie=$namespecie;
        $this->poids=$poids;
        $this->taille=$taille;
        $this->age=$age;
        $this->sex=$sex;
        $this->crie=$crie;
    }
}
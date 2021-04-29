<?php

class Animaux{
protected $name;
protected $namespecie;
protected $poids;
protected $taille;
protected $age;
protected $sex;
protected $crie;
protected $loco;
protected $ill=false;
protected $sleep=false;
protected $hungry=false;

          
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

        public function setName($name){
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }
        public function setNameSpecie($namespecie){
            $this->namespecie=$namespecie;
        }
        public function getNameSpecie(){
            return $this->namespecie;
        }
        public function setPoids($poids){
            $this->poids=$poids;
        }
        public function getPoids(){
            return $this->poids;
        }
        public function setTaille($taille){
            $this->taille=$taille;
        }
        public function getTaille(){
            return $this->taille;
        }
        public function setAge($age){
            $this->age=$age;
        }
        public function getAge(){
            return $this->age;
        }
        public function setSex($sex){
            $this->sex=$sex;
        }
        public function getSex(){
            return $this->sex;
        }

            public function setCrie($crie){
        $this->crie=$crie;
    }
        public function getCrie(){
            return $this->crie;
    }
        public function isIll($ill){
            $this->ill=$ill;
        }
        public function getIll(){
            return $this->ill;
        }

        public function isSleep($sleep){
            $this->sleep=$sleep;
        }
        public function getSleep(){
            return $this->sleep;
        }
        public function isHungry($hungry){
            $this->hungry=$hungry;
        }
        public function getHungry(){
            return $this->hungry;
        }


        public function Ill(){
            if($this->ill==false){
                return "l'animal est en bonne santé";
            }
        }
        public function Sleep(){
            if($this->sleep==false){
                return "l'animal tourne en rond";
            }
        }
        public function eat(){
            if($this->hungry==false){
                return "l'animal a le ventre tout rond";
            }
        }

}
<?php

class Animaux{
private $name;
private $namespecie;
private $poids;
private $taille;
private $age;
private $sex;
private $ill=false;
private $sleep=false;
private $hungry=false;

          
    public function __construct($name,$namespecie, $poids, $taille, $age, $sex){
        $this->name=$name;
        $this->namespecie=$namespecie;
        $this->poids=$poids;
        $this->taille=$taille;
        $this->age=$age;
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
        public function Hungry(){
            if($this->sleep==false){
                return "l'animal a le ventre tout rond";
            }
        }

}
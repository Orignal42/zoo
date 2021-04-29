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
protected $repro;
protected $ill=false;
protected $sleep=false;
protected $hungry=false;

          
    public function __construct($name,$namespecie, $poids, $taille, $age, $sex,$crie,$loco,$repro){
        $this->name=$name;
        $this->namespecie=$namespecie;
        $this->poids=$poids;
        $this->taille=$taille;
        $this->age=$age;
        $this->sex=$sex;
        $this->crie=$crie;
        $this->loco=$loco;
        $this->repro=$repro;

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
        public function setLoco($loco){
        $this->loco=$loco;
        }
        public function getLoco(){
            return $this->loco;
        }
        public function setRepro($repro){
        $this->loco=$repro;
        }   
        public function getRepro(){
            return $this->repro;
        }
        public function isIll(){
            return $this->ill;
        }
        public function setIll($ill){
            $this->ill=$ill;
            
        }

        public function isSleep(){
            return $this->sleep;
        }
        
        public function setSleep($sleep){
            $this->sleep=$sleep;
        }
        public function isHungry(){//function get
            return $this->hungry;
           
        }
        public function setHungry($hungry){
            $this->hungry=$hungry;
        }


        public function Ill(){
            if($this->isIll()){
               $this->setSleep(false);
            }
        }
        public function Sleep(){
            if($this->isSleep()){
               $this->setSleep(false);
            }
        }
        public function eat(){
            if($this->isHungry()){
               $this->setHungry(false);
                
            }
        }

}
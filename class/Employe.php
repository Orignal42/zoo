<?php
class Employe{
protected $name;
protected $age;
protected $sex;



public function __construct($name, $age, $sex){
    $this->name=$name;
    $this->age=$age;
    $this->sex=$sex;
 
}

    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
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
 
public function nourrir(){    
 
}
public function soigner(){
 
}


public function nettoyer(){

}
 

}
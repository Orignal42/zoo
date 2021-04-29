<?php
 function chargerClasse($classname)
 {
   require 'class/'. $classname.'.php';
 }
  spl_autoload_register('chargerClasse');

  $tigre = new Tigre ('Tigrou','Tigre','150','2.3','8','male','rugit','walk');
  echo"<br>";
  echo $tigre->getName();
 echo"<br>";
 echo $tigre->getNameSpecie();
 echo"<br>";
 echo $tigre->getPoids()."kg";
 echo"<br>";
 echo $tigre->getTaille()."m";
 echo"<br>";
 echo $tigre->getAge()."ans";
 echo"<br>";
 echo $tigre->getSex();
 echo"<br>";
 echo $tigre->getCrie();
 echo"<br>";


 $tigre = new Tigre ("Felindra","Tigre","120","2","5","female","rugit","walk");
 echo"<br>";
 echo $tigre->getName();
 echo"<br>";
 echo $tigre->getNameSpecie();
 echo"<br>";
 echo $tigre->getPoids()."kg";
 echo"<br>";
 echo $tigre->getTaille()."m";
 echo"<br>";
 echo $tigre->getAge()."ans";
 echo"<br>";
 echo $tigre->getSex();
 echo"<br>";
 echo $tigre->getCrie();
 echo"<br>";

 $aigle = new Aigle ("Capitain America","Aigle","10","1","2","male","glati", "fly");
 echo"<br>";
 echo $aigle->getName();
 echo"<br>";
 echo $aigle->getNameSpecie();
 echo"<br>";
 echo $aigle->getPoids()."kg";
 echo"<br>";
 echo $aigle->getTaille()."m";
 echo"<br>";
 echo $aigle->getAge()."ans";
 echo"<br>";
 echo $aigle->getSex();
 echo"<br>";
 echo $aigle->getCrie();
 echo"<br>";

 $employe=new Employe("Clara","female", "40")
 
 ?>


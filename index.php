<?php
 function chargerClasse($classname)
 {
   require 'class/'. $classname.'.php';
 }
  spl_autoload_register('chargerClasse');

  $tigre = new Tigre ('Tigrou','Tigre','150','2.3','8','male','rugit','walk','baby');
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
 echo $tigre->getLoco();
 echo"<br>";
 echo $tigre->getRepro();
 echo"<br>";


 $tigre = new Tigre ("Felindra","Tigre","120","2","5","female","rugit","walk",'baby');
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
 echo $tigre->getLoco();
 echo"<br>";
 echo $tigre->getRepro();
 echo"<br>";

 $aigle = new Aigle ("Capitain America","Aigle","10","1","2","male","glati", "fly",'eggs');
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
 echo $aigle->getLoco();
 echo"<br>";
 echo $aigle->getRepro();
 echo"<br>";


 $poisson = new Poisson ("Nemo","Poisson clown","1","1","1","male","murmure", "swim",'eggs');
 echo"<br>";
 echo $poisson->getName();
 echo"<br>";
 echo $poisson->getNameSpecie();
 echo"<br>";
 echo $poisson->getPoids()."kg";
 echo"<br>";
 echo $poisson->getTaille()."m";
 echo"<br>";
 echo $poisson->getAge()."ans";
 echo"<br>";
 echo $poisson->getSex();
 echo"<br>";
 echo $poisson->getCrie();
 echo"<br>";
 echo $poisson->getLoco();
 echo"<br>";
 echo $poisson->getRepro();
 echo"<br>";


 $employe=new Employe("Clara","female", "40")
 
 ?>


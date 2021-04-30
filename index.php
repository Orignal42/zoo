<?php
 function chargerClasse($classname)
 {
   require 'class/'. $classname.'.php';
 }
  spl_autoload_register('chargerClasse');
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/ZOO/css/main.css"rel="stylesheet" >
  </head>
  <body>
 
  <div class=animal>
        <?php
        $ours = new Ours ('Balou','Ours','300kg','3','1','male','grogne','walk','baby');
        $ours2 = new Ours ('Misha','Ours','150kg','1','1','female','grogne','walk','baby');
        $tigre = new Tigre ("Felindra","Tigre","120kg","2","5","female","rugit","walk",'baby');
        $tigre2 = new Tigre ("Tigrou","Tigre","300kg","1","2","male","rugit","walk",'baby');
        $aigle = new Aigle ("Capitain America","Aigle","6kg","1","2","male","glati", "fly",'eggs');
        $aigle2 = new Aigle ("Peggy Carter","Aigle","5kg","8","3","female","glati", "fly",'eggs');
        $poisson = new Poisson ("Nemo","Poisson clown","0,2kg","1","1","???","murmure", "swim",'eggs');
        $poisson2 = new Poisson ("PapaNemo","Poisson clown","0,2kg","1","1","???","murmure", "swim",'eggs');
        $employe=new Employe("Clara", "40 ans","female");
        $enclos = new Cage("Cages Ours","1200m²", "Bonne", 0, 10);
        $enclos2= new Voliere("Voliere", "200m²",200, "bonne");
        $enclos3 = new Aquarium('EncloAqua',"300mcube", 'Bonne',400,600, '5m', '50%');
        $enclos4 = new Cage("Cages Tigres","1200m²", "Bonne", 0, 10);
        ?>
 <div class=employe>
        <?php 

        echo "<br>";
        echo $employe->getName()."<br>";
        echo $employe->getAge()."<br>";
        echo $employe->getSex()."<br>";
      
        ?>
</div>
  <div class=enclos>
 <?php 

$enclos->addAnimal($ours);
$enclos->addAnimal($ours2);
$enclos2->addAnimal($aigle);
$enclos2->addAnimal($aigle2);
$enclos3->addAnimal($poisson);
$enclos3->addAnimal($poisson2);
$enclos4->addAnimal($tigre);
$enclos4->addAnimal($tigre2);
$enclos4->RemoveAnimal($tigre);
?>

<div class=ours>
<?php
foreach ($enclos->getAfficherAnimaux() as $animaux){
  echo "<br>".$animaux->getName() . "<br>";  
  echo $animaux->getNameSpecie() . "<br>";
    echo $animaux->getPoids() . "<br>";
 }
echo "<br>".$enclos->getenclosName() . "<br>";
echo "<br>". $enclos->getSurface() . "<br>";
?>
</div>
<div class="aigle">
<?php
foreach ($enclos2->getAfficherAnimaux() as $animaux){
  echo"<br>". $animaux->getName() . "<br>";  
  echo $animaux->getNameSpecie() . "<br>";
    echo $animaux->getPoids() . "<br>";
 }
 echo "<br>". $enclos2->getenclosName(). "<br>";
echo "<br>". $enclos2->getSurface(). "<br>";
?>
  </div>
<div class="poisson">
<?php
foreach ($enclos3->getAfficherAnimaux() as $animaux){
  echo "<br>".$animaux->getName() . "<br>";  
  echo $animaux->getNameSpecie() . "<br>";
  echo $animaux->getPoids() . "<br>";
 }
 echo "<br>". $enclos3->getenclosName();
echo '<br>';
echo "<br>".$enclos3->getSurface();
?>
</div>
<div class=tigre>
<?php
foreach ($enclos4->getAfficherAnimaux() as $animaux){
  echo "<br>".$animaux->getName() . "<br>";  
  echo $animaux->getNameSpecie() . "<br>";
    echo $animaux->getPoids() . "<br>";
 }
echo "<br>".$enclos4->getenclosName() . "<br>";
echo "<br>".$enclos4->getSurface() . "<br>";
?>
</div>
 

  
  </div>

  </body>
  </html>



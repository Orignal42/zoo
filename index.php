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
     <title>Ajouter animeaux</title>
 </head>
 <body>
 <div class="container-form">
      <form action="" method="post">
          <div class="formulaire">
            Name : <input type="text" name="nom" maxlength="240" style="margin-bottom: 10px;"/><br>
            Namespecie : <input type="text" name="specie" maxlength="240" style="margin-bottom: 10px;"/><br>
            Poids: <input type="text" name="poids" maxlength="240" style="margin-bottom: 10px;"/><br>
            Taille : <input type="text" name="taille" maxlength="240" style="margin-bottom: 10px;"/><br>
            Age : <input type="text" name="age" maxlength="240" style="margin-bottom: 10px;"/><br>
            Sexe : <input type="text" name="sexe" maxlength="240" style="margin-bottom: 10px;"/><br>
            <input type="submit"  name="question" style="margin-bottom: 10px">
          </div>
      </form>
     
  </div>
 </body>
 </html>
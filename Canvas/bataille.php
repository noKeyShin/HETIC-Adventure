<?php

//include('../homepage/index1.php');

    $host = 'localhost';
    $dbname = 'hetic';
    $username = 'root';
    $password = 'root';
    
 
  try {
  
    //$conn = new PDO($host;$dbname, $username, $password);
    $pdo = new PDO('mysql:host=localhost;dbname=hetic', 'root', 'root', array(PDO::ATTR_ERRMODE =>
PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


    //echo "Connecté à $dbname sur $host avec succès.";

    
    
  } catch (PDOException $e) {
  
    die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
  }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="stylebataille.css" rel="stylesheet">

</head>
<body>

<main>
<!-- Photo joueur -->
<img src="LEROY_Etienne.png" class="photoJoueur">
<!-- Barre de vie joueur-->
<div class= "footerOFF" id="vieJoueur">
<?php
          $r = $pdo->query('SELECT prenom, nom, vie, seconde_attaque, attaque FROM personnage WHERE id = 7');
    while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
    $vieJoueur = $prenom['vie'];
    $vieJoueurUpdate = $vieJoueur;
    echo $prenom['prenom'].' '. $prenom['nom'];
    
    echo'<p class= "vieJoueurPoint"><p id = "vieJoueurUpdate">'.$vieJoueurUpdate.'</p>/<p id = "vieJoueurMax">'.$vieJoueur. '</p>PV';
  }
  ?> 
<svg width="200" height="10">
  <rect width="200" height="10" style="fill:#26FD62;stroke-width:3;stroke:rgb(0,0,0)" />
</svg> 
</div>


<!-- Photo ennemi-->
<img src="Ousmane.png" class="photoEnnemi">
<!-- Barre de vie ennemi-->
<div class= "footerOFF" id="vieEnnemi">
<?php
          $r = $pdo->query('SELECT prenom, nom, vie FROM personnage WHERE id = 1');
    while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
      $vieEnnemi = $prenom['vie'];
      $vieEnnemiUpdate = $vieEnnemi;
    echo $prenom['prenom'].' '. $prenom['nom'];
  /* MAJ PV ennemi */
    echo'<p class= "vieEnnemiPoint"><p id = "vieEnnemiUpdate">'.$vieEnnemiUpdate.'</p>/<p id = "vieEnnemiMax">'.$vieEnnemi. '</p>PV';
   // $vieEnnemiUpdate = $vieEnnemiUpdate - $prenom['seconde_attaque'];


 //   echo'<p class= "vieEnnemiPoint"><p id = "vieEnnemiUpdate">'.$vieEnnemi.'</p>/'.$vieEnnemi. 'PV</p>';
    }
    ?>  
<svg width="200" height="10">
  <rect width="200" height="10" style="fill:#26FD62;stroke-width:3;stroke:rgb(0,0,0)" />
</svg> 


</div>

</main>

<footer>
    <div class="footerON" id="footer1">
    <div class="footerGauche">
        <p class="tabasser"> Veux-tu tabasser ?</p><br>
        <div class="buttonOUINON">
            <button class="tabasserOUI" id="tabasserOUI" type="button"> OUI</button>
            <button class="tabasserNON" id="tabasserNON" type="button"> NON</button>
        </div>
    </div>
    <div class="footerDroite">
        <p class="nomEnnemi">
            
        <?php
          $r = $pdo->query('SELECT prenom, nom FROM personnage WHERE id = 1');
    while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
    echo $prenom['prenom'].' '. $prenom['nom'];
    }
    ?> 
    
    
        </p><br>
        <p class="phraseEnnemi">
        <?php
          $r = $pdo->query('SELECT discussion FROM personnage WHERE id = 1');
    while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
    echo $prenom['discussion'];
    }
    ?> 
        </p>
    </div>
    </div>

    <div class= "footerOFF" id="footer2">
<?php
          $r = $pdo->query('SELECT seconde_attaque, attaque_special, attaque FROM personnage WHERE id = 7');
    while($attaque = $r->fetch(PDO::FETCH_ASSOC))  {
    ?>
    <button  type="button" class = "boutonSecondeAttaque" id = "boutonSecondeAttaque"> <?php echo $attaque['seconde_attaque'].'<br><p id ="attaqueJoueur">'.$attaque['attaque']?></p></button>
    <button  type="button" class = "boutonAttaqueSpéciale" id = "boutonAttaqueSpéciale"> <?php echo $attaque['attaque_special']?></button>
    <?php }?>
    </div>

</footer>
</body>
<script src="scriptbataille.js"></script>
</html>
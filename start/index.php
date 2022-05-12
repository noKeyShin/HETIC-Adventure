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
    <link rel="stylesheet" href="style.css">
    <title>Start</title>
</head>

<body>


    <div class="choose">
        

        <div class="personnage">

            <p>Choisis ton personnage</p>
            <img id="34" src="../IMAGE_DIALOGUES/AGUENCHICH_Tarik.png" alt="">
            <img src="../IMAGE_DIALOGUES/ARNAULD_Lucie.png" alt="">
            <img src="../IMAGE_DIALOGUES/BASSILEKIN_Frank.png" alt="">
            <img src="../IMAGE_DIALOGUES/Bassiratou.png" alt="">
            <img src="../IMAGE_DIALOGUES/Billy_Joe.png" alt="">
            <img src="../IMAGE_DIALOGUES/CAI_Christine.png" alt="">
            <img src="../IMAGE_DIALOGUES/CAO_Sylvie.png" alt="">
            <img src="../IMAGE_DIALOGUES/Chanel.png" alt="">
            <img src="../IMAGE_DIALOGUES/Charbel.png" alt="">
            <img src="../IMAGE_DIALOGUES/CHARTIER_Anne-Lou.png" alt="">
            <img src="../IMAGE_DIALOGUES/CHETOUANI_Oumaïma.png" alt="">
            <img src="../IMAGE_DIALOGUES/Christelle.png" alt="">
            <img src="../IMAGE_DIALOGUES/CLAVEL_Thomas.png" alt="">
            <img src="../IMAGE_DIALOGUES/DERUNES_Océane-2.png" alt="">
            <img src="../IMAGE_DIALOGUES/DIALLO_Ousmane_Mamadou.png" alt="">
            <img src="../IMAGE_DIALOGUES/DIAS_Thomas.png" alt="">
            <img src="../IMAGE_DIALOGUES/FEUILLERAT_Laurie.png" alt="">
            <img src="../IMAGE_DIALOGUES/Frani.png" alt="">
            <img src="../IMAGE_DIALOGUES/GONZALEZ_Sofia.png" alt="">
            <img src="../IMAGE_DIALOGUES/GRAVELINES_Thomas.png" alt="">
            <img src="../IMAGE_DIALOGUES/HAMADA_Tachrifa.png" alt="">
            <img src="../IMAGE_DIALOGUES/JOLIVET_Mendrika.png" alt="">
            <img src="../IMAGE_DIALOGUES/LAKHOUBAY_Inshya.png" alt="">
            <img src="../IMAGE_DIALOGUES/LEBAZ_Antoni.png" alt="">
            <img src="../IMAGE_DIALOGUES/LEGRAND_Florian.png" alt="">
            <img src="../IMAGE_DIALOGUES/Leroy_Etienne.png" alt="">
            <img src="../IMAGE_DIALOGUES/Malina.png" alt="">
            <img src="../IMAGE_DIALOGUES/MARTINEZ_Camille.png" alt="">
            <img src="../IMAGE_DIALOGUES/Michel_Chen.png" alt="">
            <img src="../IMAGE_DIALOGUES/Morjane.png" alt="">
            <img src="../IMAGE_DIALOGUES/MOUANDZA_Bernard_Yann_Ordian.png" alt="">
            <img src="../IMAGE_DIALOGUES/Ousmane.png" alt="">
            <img src="../IMAGE_DIALOGUES/PISPISA_Maxime.png" alt="">
            <img src="../IMAGE_DIALOGUES/RICHARD_Florent.png" alt="">
            <img src="../IMAGE_DIALOGUES/RISSE_Herve.png" alt="">
            <img src="../IMAGE_DIALOGUES/SAINT-PRIX_Savy.png" alt="">
            <img src="../IMAGE_DIALOGUES/SURMAIRE_Corentin.png" alt="">
            <img src="../IMAGE_DIALOGUES/TITUS_Britin.png" alt="">
            <img src="../IMAGE_DIALOGUES/VESPUCE_Jérémi.png" alt="">
            <img src="../IMAGE_DIALOGUES/Victoire.png" alt="">



        </div>

        <div class="attribut">
            <p>
                Personnage
                <div class="nom_perso">
                <?php



          $r = $pdo->query('SELECT prenom, nom FROM personnage WHERE id > 0');
    while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
    echo $prenom['prenom'].' '. $prenom['nom'];

    }
    ?>
       </div>
            </p>
            <p>
                Attaque spéciale
                <div class="nom_special">
                <?php
          $r = $pdo->query('SELECT attaque_special  FROM personnage WHERE id > 0');
    while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
    echo $prenom['attaque_special'];

    }
    ?>
           </div>
 
            </p>
            <p>
                Statut
                <div class="nom_statut">
                <?php
          $r = $pdo->query('SELECT statut FROM personnage WHERE id > 0');
    while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
    echo $prenom['statut'];

    }
    ?>
           </div>
                
            </p>
        </div>
    </div>

    <script src="start.js"></script>

</body>

</html>
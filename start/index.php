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
            <img id="id=34" src="../IMAGE_DIALOGUES/AGUENCHICH_Tarik.png" alt="">
            <img id="id=13" src="../IMAGE_DIALOGUES/ARNAULD_Lucie.png" alt="">
            <img id="id=37" src="../IMAGE_DIALOGUES/BASSILEKIN_Frank.png" alt="">
            <img id="id=39" src="../IMAGE_DIALOGUES/Bassiratou.png" alt="">
            <img id="id=40" src="../IMAGE_DIALOGUES/Billy_Joe.png" alt="">
            <img id="id=29" src="../IMAGE_DIALOGUES/CAI_Christine.png" alt="">
            <img id="id=33" src="../IMAGE_DIALOGUES/CAO_Sylvie.png" alt="">
            <img id="id=35" src="../IMAGE_DIALOGUES/Chanel.png" alt="">
            <img id="id=19" src="../IMAGE_DIALOGUES/Charbel.png" alt="">
            <img id="id=5" src="../IMAGE_DIALOGUES/CHARTIER_Anne-Lou.png" alt="">
            <img id="id=6" src="../IMAGE_DIALOGUES/CHETOUANI_Oumaïma.png" alt="">
            <img id="id=24" src="../IMAGE_DIALOGUES/Christelle.png" alt="">
            <img id="id=16" src="../IMAGE_DIALOGUES/CLAVEL_Thomas.png" alt="">
            <img id="id=14" src="../IMAGE_DIALOGUES/DERUNES_Océane-2.png" alt="">
            <img id="id=2" src="../IMAGE_DIALOGUES/DIALLO_Ousmane_Mamadou.png" alt="">
            <img id="id=25" src="../IMAGE_DIALOGUES/DIAS_Thomas.png" alt="">
            <img id="id=17" src="../IMAGE_DIALOGUES/FEUILLERAT_Laurie.png" alt="">
            <img id="id=11" src="../IMAGE_DIALOGUES/Frani.png" alt="">
            <img id="id=28" src="../IMAGE_DIALOGUES/GONZALEZ_Sofia.png" alt="">
            <img id="id=20" src="../IMAGE_DIALOGUES/GRAVELINES_Thomas.png" alt="">
            <img id="id=38" src="../IMAGE_DIALOGUES/HAMADA_Tachrifa.png" alt="">
            <img id="id=15" src="../IMAGE_DIALOGUES/JOLIVET_Mendrika.png" alt="">
            <img id="id=26" src="../IMAGE_DIALOGUES/LAKHOUBAY_Inshya.png" alt="">
            <img id="id=27" src="../IMAGE_DIALOGUES/LEBAZ_Antoni.png" alt="">
            <img id="id=9" src="../IMAGE_DIALOGUES/LEGRAND_Florian.png" alt="">
            <img id="id=7" src="../IMAGE_DIALOGUES/Leroy_Etienne.png" alt="">
            <img id="id=32" src="../IMAGE_DIALOGUES/Malina.png" alt="">
            <img id="id=23" src="../IMAGE_DIALOGUES/MARTINEZ_Camille.png" alt="">
            <img id="id=10" src="../IMAGE_DIALOGUES/Michel_Chen.png" alt="">
            <img id="id=21" src="../IMAGE_DIALOGUES/Morjane.png" alt="">
            <img id="id=12" src="../IMAGE_DIALOGUES/MOUANDZA_Bernard_Yann_Ordian.png" alt="">
            <img id="id=1" src="../IMAGE_DIALOGUES/Ousmane.png" alt="">
            <img id="id=18" src="../IMAGE_DIALOGUES/PISPISA_Maxime.png" alt="">
            <img id="id=3" src="../IMAGE_DIALOGUES/RICHARD_Florent.png" alt="">
            <img id="id=30" src="../IMAGE_DIALOGUES/RISSE_Herve.png" alt="">
            <img id="id=22" src="../IMAGE_DIALOGUES/SAINT-PRIX_Savy.png" alt="">
            <img id="id=8" src="../IMAGE_DIALOGUES/SURMAIRE_Corentin.png" alt="">
            <img id="id=31" src="../IMAGE_DIALOGUES/TITUS_Britin.png" alt="">
            <img id="id=36" src="../IMAGE_DIALOGUES/VESPUCE_Jérémi.png" alt="">
            <img id="id=4" src="../IMAGE_DIALOGUES/Victoire.png" alt="">



        </div>

        <div class="attribut">
            <p>
                Personnage
                <div class="nom_perso" id="nom_perso">


       </div>
            </p>
            <p>
                Attaque spéciale
                <div class="nom_special" id="nom_special">
                <?php
    //       $r = $pdo->query('SELECT attaque_special  FROM personnage WHERE id > 0');
    // while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
    // echo $prenom['attaque_special'];

    // }
    // ?>
           </div>
 
            </p>
            <p>
                Statut
                <div class="nom_statut" id="nom_statut">
                <?php
    //       $r = $pdo->query('SELECT statut FROM personnage WHERE id > 0');
    // while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
    // echo $prenom['statut'];

    // }
    ?>
           </div>
                
            </p>
        </div>
    </div>
    <script>
    let tariknom = document.getElementById('id=34');
    let lucienom = document.getElementById('id=13');
    let franknom = document.getElementById('id=37');
    let bassiratounom = document.getElementById('id=39');
    let billynom = document.getElementById('id=40');
    let christinenom = document.getElementById('id=29');
    let sylvienom = document.getElementById('id=33');
    let chanelnom = document.getElementById('id=35');
    let charbelnom = document.getElementById('id=19');
    let annenom = document.getElementById('id=5');
    let oumaimanom = document.getElementById('id=6');
    let christellenom = document.getElementById('id=24');
    let thomascnom = document.getElementById('id=16');
    let oceanenom = document.getElementById('id=14');
    let ousmanednom = document.getElementById('id=2');
    let thomasdnom = document.getElementById('id=25');
    let laurienom = document.getElementById('id=17');
    let franinom = document.getElementById('id=11');
    let sofianom = document.getElementById('id=28');
    let thomasgnom = document.getElementById('id=20');
    let tachrifanom = document.getElementById('id=38');
    let mendrikanom = document.getElementById('id=15');
    let inshyanom = document.getElementById('id=26');
    let antoninom = document.getElementById('id=27');
    let floriannom = document.getElementById('id=9');
    let etiennenom = document.getElementById('id=7');
    let malinanom = document.getElementById('id=32');
    let camillenom = document.getElementById('id=23');
    let michelnom = document.getElementById('id=10');
    let morjanenom = document.getElementById('id=21');
    let yannnom = document.getElementById('id=12');
    let ousmanesnom = document.getElementById('id=1');
    let maximenom = document.getElementById('id=18');
    let florentnom = document.getElementById('id=3');
    let hervenom = document.getElementById('id=30');
    let savynom = document.getElementById('id=22');
    let corentinnom = document.getElementById('id=8');
    let britninom = document.getElementById('id=31');
    let jeremienom = document.getElementById('id=36');
    let victoirenom = document.getElementById('id=4');



    
    let nom_perso = document.getElementById('nom_perso');
    let nom_special = document.getElementById('nom_special');
    let nom_statut = document.getElementById('nom_statut');


    
    tariknom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 34');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 34');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 34');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    tariknom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })







    lucienom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 13');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 13');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 13');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    lucienom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })




    franknom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 37');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 37');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 37');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    franknom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    bassiratounom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 39');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 39');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 39');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    bassiratounom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    billynom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 40');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 40');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 40');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    billynom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })


    christinenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 29');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 29');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 29');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    christinenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    sylvienom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 33');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 33');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 33');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    sylvienom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    chanelnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 35');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 35');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 35');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    chanelnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    charbelnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 19');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 19');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 19');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    charbelnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    annenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 5');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 5');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 5');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    annenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    oumaimanom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 6');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 6');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 6');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    oumaimanom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    christellenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 24');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 24');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 24');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    christellenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
       thomascnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 16');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 16');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 16');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    thomascnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
  
    oceanenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 14');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 14');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 14');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    oceanenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    ousmanednom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 2');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 2');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 2');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    ousmanednom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    thomasdnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 25');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 25');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 25');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    thomasdnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    laurienom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 17');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 17');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 17');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    laurienom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    franinom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 11');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 11');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 11');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    franinom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    sofianom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 28');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 28');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 28');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    sofianom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    thomasgnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 20');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 20');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 20');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    thomasgnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    tachrifanom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 38');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 38');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 38');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    tachrifanom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    mendrikanom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 15');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 15');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 15');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    mendrikanom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })


    inshyanom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 26');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 26');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 26');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    inshyanom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    antoninom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 27');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 27');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 27');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    antoninom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    floriannom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 9');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 9');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 9');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    floriannom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    etiennenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 7');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 7');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 7');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    etiennenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    malinanom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 32');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 32');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 32');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    malinanom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    camillenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 23');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 23');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 23');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    camillenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    michelnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 10');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 10');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 10');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    michelnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    morjanenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 21');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 21');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 21');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    morjanenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    yannnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 12');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 12');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 12');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    yannnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    ousmanesnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 1');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 1');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 1');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    ousmanesnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    maximenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 18');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 18');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 18');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    maximenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    florentnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 3');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 3');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 3');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    florentnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    hervenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 30');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 30');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 30');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    hervenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    savynom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 22');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 22');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 22');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    savynom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    corentinnom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 8');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 8');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 8');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    corentinnom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    britninom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 31');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 31');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 31');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    britninom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })

    jeremienom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 36');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 36');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 36');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    jeremienom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })
    victoirenom.addEventListener("mouseover", function(nom){
        document.getElementById("nom_perso").innerHTML = "<?php
$r = $pdo->query('SELECT prenom, nom, attaque_special, statut FROM personnage WHERE id = 4');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['prenom'].' '. $prenom['nom'] ;
}
?>";

document.getElementById("nom_special").innerHTML = "<?php
$r = $pdo->query('SELECT attaque_special FROM personnage WHERE id = 4');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['attaque_special'];
}
?>";

document.getElementById("nom_statut").innerHTML = "<?php
$r = $pdo->query('SELECT statut FROM personnage WHERE id = 4');
while($prenom = $r->fetch(PDO::FETCH_ASSOC))  {
echo $prenom['statut'] ;
}
?>";
    })
    victoirenom.addEventListener("mouseout", function(nom){
        document.getElementById("nom_perso").innerHTML = "";
        document.getElementById("nom_special").innerHTML = "";
        document.getElementById("nom_statut").innerHTML = "";

    })


    </script>

  
    <script src="start.js"></script>

</body>

</html>
<?php

    //include les fichiers
    include "$racine/modele/bd.inc.php";
    include "$racine/controleur/connexion.php";


    //interprétation pour la base de donnée
    $mysqli = new mysqli("localhost", "root", "root", "ap2eme");
    $mysqli -> set_charset("utf-8");
    $requete="INSERT INTO intervention VALUES ('','$_POST[dateVisite]','$_POST[heureVisite]','$_POST[idClient]','$_POST[idTechnicien]')";
    
    $resultat = mysqli_query($mysqli,$requete);
    if ($resultat){
        echo"Requete a été ajouté";
    }
    else{
        echo "non";
    }
?>
<a href="vue/accueil.html">Retour a la page d'accueil</a>
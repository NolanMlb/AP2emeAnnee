<?php

    //include les fichiers
    include "$racine/modele/bd.inc.php";
    include "$racine/controleur/connexion.php";
    include "$racine/vue/entete.html";
    
    //recuperer l'id
    $id_auto=0;

    //interprétation pour la base de donnée
    $mysqli = new mysqli("localhost", "root", "root", "ap2eme");
    $mysqli -> set_charset("utf-8");
    $requete="INSERT INTO intervention VALUES ($id_auto,'$_POST[dateVisite]','$_POST[heureVisite]','$_POST[idClient]','$_POST[idTechnicien]')";
    $resultat = mysqli_query($mysqli,$requete);

    
    // test si la requete est bien faite
    if ($resultat){
        echo"Le rendez-vous a bien été ajouté <br>";
    }
    else{
        echo "Erreur, je n'ai pas reussie à ajouté le rdv !<br> ";
    }
?>
<a href="../vue/accueil.html">Retour a la page d'accueil</a>
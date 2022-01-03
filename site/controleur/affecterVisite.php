<?php

    //include les fichiers
    include "$racine/modele/bd.inc.php";
    include "$racine/controleur/connexion.php";

    //interprétation pour la base de donnée//
    $sql="INSERT INTO 'intervention' ('idIntervention', 'dateVisite', 'heureVisite', 'idClient', 'idTechnicien') VALUES ('','$_POST[dateVisite]','$_POST[heureVisite]','$_POST[idClient]','$_POST[idTechnicien]'";

    if (!mysqli_query($mysqli,$sql)){
        die('Impossible d’ajouter cet enregistrement');
    }
    else{
        echo "L’enregistrement est ajouté ";
    }
?>
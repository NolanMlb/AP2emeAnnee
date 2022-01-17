<?php

//include
include "../modele/bd.inc.php";
include "../vue/entete.html";
include "../vue/pied.html";

//Uniquement possible pour les techniciens, 
//ils peuvent valider une intervention en ajoutant un commentaire 
//la décrivant et en renseignant le temps passé. 

$mysqli = new mysqli("localhost:3306", "root", "", "ap2eme") or die("Erreur de connexion à la BDD");
$mysqli -> set_charset("utf-8");
$rqt = "SELECT idIntervention, dateVisite, heureVisite, idClient, idTechnicien, etatIntervention, valideIntervention FROM intervention";
$resultat = mysqli_query($mysqli,$rqt);

// affichage 
if($resultat){
    
    echo"<center><h1> Résultat de la recherche : </h1></center>";
    echo "<hr><br>";
    $nbClient = mysqli_num_rows($resultat);
    if($nbClient > 0){
    echo "<table class='table table-hover' border ='1'>";
    echo "<tr class='table-primary'>";
    echo "<th scope='row'>id Intervention</th>";
    echo "<th scope='row'>Date Visite</th>";
    echo "<th scope='row'>heureVisite</th>";
    echo "<th scope='row'>id Client</th>";
    echo "<th scope='row'>id Technicien</th>";
    echo "<th scope='row'>Etat de l'intervention </th>";
    echo "<th scope='row'>Validation Inter</th>";
    echo "</tr>";

    while($row = mysqli_fetch_array($resultat)){
        echo "<tr class='table-primary'>";
        echo "<td>".$row['idIntervention'] . "</td>";
        echo "<td>".$row['dateVisite'] . "</td>";
        echo "<td>".$row['heureVisite'] . "</td>";
        echo "<td>".$row['idClient'] . "</td>";
        echo "<td>".$row['idTechnicien'] . "</td>";
        echo "<td>".$row['etatIntervention'] . "</td>";
        echo "<td>".$row['valideIntervention'] . "</td>";
        echo "</tr>";
    }
        echo "</table>";
        
    }else{
            echo "<p> Aucun résultat ne correspond à votre recherche.</p>";
        }
    }else{
        echo "erreur dans l'exécution de la requête.<br>";
        echo "Message d'erreur : " . mysql_error($mysqli);
    }


?>
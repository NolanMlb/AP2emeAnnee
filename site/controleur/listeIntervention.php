<?php
    //Uniquement possible pour les techniciens (gestion d’accès), 
    //le technicien pourra voir la liste des interventions par date ou par agent 
    //et par la suite éditer la fiche intervention.

    include "../modele/bd.inc.php";
    include "../controleur/connexion.php";
    include "../vue/entete.html";
    include "../vue/pied.html";
    $mysqli = mysqli_connect("localhost:3306", "", "root", "ap2eme");
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if ($id = 1){
            $rqt = mysqli_query($mysqli,"SELECT * FROM intervention ORDER BY dateVisite DESC") or die("Erreur au niveau de la requête");
            echo "<table border ='1'>";
            echo "<tr>";
            echo "<th>  ID Intervention  </th>";
            echo "<th>  Date de la vitite  </th>";
            echo "<th>  Heure de la visite  </th>";
            echo "<th>  ID client  </th>";
            echo "<th>  ID technicien  </th>";
            echo "</tr>";

        while($row = mysqli_fetch_array($rqt)){
            echo "<tr><br>";
            echo "<td>".$row['idIntervention'] . "</td>";
            echo "<td>".$row['dateVisite'] . "</td>";
            echo "<td>".$row['heureVisite'] . "</td>";
            echo "<td>".$row['idClient'] . "</td>";
            echo "<td>".$row['idTechnicien'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        }

        else if ($id = 2){
            $rqt = mysqli_query($mysqli,"SELECT * FROM intervention ORDER BY idTechnicien") or die("Erreur au niveau de la requête");
            echo "<table border ='1'>";
            echo "<tr>";
            echo "<th>  ID Intervention  </th>";
            echo "<th>  Date de la vitite  </th>";
            echo "<th>  Heure de la visite  </th>";
            echo "<th>  ID client  </th>";
            echo "<th>  ID technicien  </th>";
            echo "<th>  Etat de l'intervention  </th>";
            echo "<th>  Commentaire  </th>";
            echo "<th>  Temps passé  </th>";
            echo "</tr>";

        while($row = mysqli_fetch_array($rqt)){
            echo "<tr><br>";
            echo "<td>".$row['idIntervention'] . "</td>";
            echo "<td>".$row['dateVisite'] . "</td>";
            echo "<td>".$row['heureVisite'] . "</td>";
            echo "<td>".$row['idClient'] . "</td>";
            echo "<td>".$row['idTechnicien'] . "</td>";
            echo "<td>".$row['etatIntervention'] . "</td>";
            echo "<td>".$row['commentaire'] . "</td>";
            echo "<td>".$row['tempsPasse'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        }
    }
    
?>
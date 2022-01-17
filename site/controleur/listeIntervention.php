<link rel="stylesheet" href="css/style.css">
<?php
    //Uniquement possible pour les techniciens (gestion d’accès), 
    //le technicien pourra voir la liste des interventions par date ou par agent 
    //et par la suite éditer la fiche intervention.

    include "../modele/bd.inc.php";
    include "../controleur/connexion.php";
    include "../vue/entete.html";
    include "../vue/pied.html";
    $mysqli = mysqli_connect("localhost:3306", "root", "", "ap2eme");
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    //interpretation 
    
    /*
    echo "<table border ='1'>
    <tr>
        <th>dateVisite</th>
        <th>heureVisite</th>
        <th>idClient</th>
        <th>idTechnicien</th>
    </tr>";
     while($row = mysqli_fetch_array($rqt)){
        echo "<tr>";
        echo "<td>".$row['dateVisite'];
        echo "<td>".$row['heureVisite'];
        echo "<td>".$row['idClient'];
        echo "<td>".$row['idTechnicien'];
    }
?>
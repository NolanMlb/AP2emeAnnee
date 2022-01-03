<?php

    include "$racine/modele/bd.inc.php";
    include "$racine/controleur/connexion.php";
    $mysqli = mysqli_connect("localhost", "root", "root", "ap2eme");
    $rqt = mysqli_query($mysqli,"SELECT * FROM intervention") or die("salope de merde");
    
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
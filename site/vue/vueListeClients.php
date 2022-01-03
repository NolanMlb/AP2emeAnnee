<?php

    include "$racine/modele/bd.inc.php";
    include "$racine/controleur/connexion.php";
    $mysqli = mysqli_connect("localhost", "root", "root", "ap2eme");
    $rqt = mysqli_query($mysqli,"SELECT * FROM client") or die("salope de merde");
    
    echo "<table border ='1'>
    <tr>
        <th>Numéro client</th>
        <th>Raison Sociale</th>
        <th>Siren</th>
        <th>codeApe </th>
        <th>Teléphone</th>
        <th>Adresse</th>
        <th>Mail</th>
        <th>Durée Deplacement</th>
        <th>Distance (km)</th>
        <th>Contrat de maintenance</th>
        <th> idAgence </th>
    </tr>";
     while($row = mysqli_fetch_array($rqt)){
        echo "<tr>";
        echo "<td>".$row['numClient'];
        echo "<td>".$row['raisonSocialeClient'];
        echo "<td>".$row['sirenClient'];
        echo "<td>".$row['codeApeClient'];
        echo "<td>".$row['telClient'];
        echo "<td>".$row['adresseClient'];
        echo "<td>".$row['mailClient'];
        echo "<td>".$row['dureeDeplacementClient'];
        echo "<td>".$row['distanceKmClient'];
        echo "<td>".$row['contratmaintenance'];
        echo "<td>".$row['idAgence'];
    }
?>       
<?php
    include "$racine/controleur/connexion.php";
    
    $requete = mysqli_query("SELECT * FROM client");

    echo "<table border ='1'>
    <tr>
        <th>Numéro client</th>
        <th>Raison Sociale</th>
        <th>Siren</th>
        <th>Teléphone</th>
        <th>Adresse</th>
        <th>Mail</th>
    </tr>";

    while($row = mysqli_fetch_array($requete)){
        echo "<tr>";
        echo "<td>".$row['numClient']
    }
?>
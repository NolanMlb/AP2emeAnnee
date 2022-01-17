<?php
    
    include "../modele/bd.inc.php";
    include "../controleur/connexion.php";
    include "../vue/entete.html";
    $mysqli = mysqli_connect("localhost:3306", "root", "", "ap2eme");


    if (isset($_POST["numC"])){
        if($_POST['numC']='NULL'){
            echo " ";
        }
        else{
        $resultat = mysqli_query($mysqli,"SELECT * FROM client WHERE numClient like '%" . $_POST["numC"]. "%'") or die("Erreur au niveau de la requête");
        if($resultat){
            echo"<center><h1> Résultat de la recherche : </h1></center>";
            echo "<hr><br>";

            $nbClient = mysqli_num_rows($resultat);
            if($nbClient > 0){
                echo "<table class='table table-hover' border ='1'>";
                echo "<tr class='table-primary'>";
                echo "<th scope='row'>Numéro client</th>";
                echo "<th scope='row'>Nom client</th>";
                echo "<th scope='row'>Prenom client</th>";
                echo "<th scope='row'>Raison Sociale</th>";
                echo "<th scope='row'>Siren</th>";
                echo "<th scope='row'>codeApe </th>";
                echo "<th scope='row'>Teléphone</th>";
                echo "<th scope='row'>Adresse</th>";
                echo "<th scope='row'>Mail</th>";
                echo "<th scope='row'>Durée Deplacement</th>";
                echo "<th scope='row'>Distance(km)</th>";
                echo "<th scope='row'>Contrat de maintenance</th>";
                echo "<th scope='row'> idAgence </th>";
                echo "</tr>";

            while($row = mysqli_fetch_array($resultat)){
                echo "<tr class='table-primary'>";
                echo "<td>".$row['numClient'] . "</td>";
                echo "<td>".$row['nomClient'] . "</td>";
                echo "<td>".$row['prenomClient'] . "</td>";
                echo "<td>".$row['raisonSocialeClient'] . "</td>";
                echo "<td>".$row['sirenClient'] . "</td>";
                echo "<td>".$row['codeApeClient'] . "</td>";
                echo "<td>".$row['telClient'] . "</td>";
                echo "<td>".$row['adresseClient'] . "</td>";
                echo "<td>".$row['mailClient'] . "</td>";
                echo "<td>".$row['dureeDeplacementClient'] . "</td>";
                echo "<td>".$row['distanceKmClient'] . "</td>";
                echo "<td>".$row['contratmaintenance'] . "</td>";
                echo "<td>".$row['idAgence'] . "</td>";
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
    }
}


    if (isset($_POST["nomC"])){
    $resultat = mysqli_query($mysqli,"SELECT * FROM client WHERE nomClient like '%" . $_POST["nomC"]. "%'") or die("Erreur au niveau de la requête");
    if($resultat){
        if($_POST['nomC']='NULL'){
            echo " ";
        }
        else{
            echo"<center><h1> Résultat de la recherche : </h1></center>";
            echo "<hr><br>";

            $nbClient = mysqli_num_rows($resultat);
            if($nbClient > 0){
            echo "<table class='table table-hover' border ='1'>";
            echo "<tr class='table-primary'>";
            echo "<th scope='row'>Numéro client</th>";
            echo "<th scope='row'>Nom client</th>";
            echo "<th scope='row'>Prenom client</th>";
            echo "<th scope='row'>Raison Sociale</th>";
            echo "<th scope='row'>Siren</th>";
            echo "<th scope='row'>codeApe </th>";
            echo "<th scope='row'>Teléphone</th>";
            echo "<th scope='row'>Adresse</th>";
            echo "<th scope='row'>Mail</th>";
            echo "<th scope='row'>Durée Deplacement</th>";
            echo "<th scope='row'>Distance(km)</th>";
            echo "<th scope='row'>Contrat de maintenance</th>";
            echo "<th scope='row'> idAgence </th>";
            echo "</tr>";

            while($row = mysqli_fetch_array($resultat)){
                echo "<tr class='table-primary'>";
                echo "<td>".$row['numClient'] . "</td>";
                echo "<td>".$row['nomClient'] . "</td>";
                echo "<td>".$row['prenomClient'] . "</td>";
                echo "<td>".$row['raisonSocialeClient'] . "</td>";
                echo "<td>".$row['sirenClient'] . "</td>";
                echo "<td>".$row['codeApeClient'] . "</td>";
                echo "<td>".$row['telClient'] . "</td>";
                echo "<td>".$row['adresseClient'] . "</td>";
                echo "<td>".$row['mailClient'] . "</td>";
                echo "<td>".$row['dureeDeplacementClient'] . "</td>";
                echo "<td>".$row['distanceKmClient'] . "</td>";
                echo "<td>".$row['contratmaintenance'] . "</td>";
                echo "<td>".$row['idAgence'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            }
        }else{
            echo "erreur dans l'exécution de la requête.<br>";
            echo "Message d'erreur : " . mysql_error($mysqli);
        }
    }
    }



    if (isset($_POST["prenomC"])){
        if($_POST['prenomC']='NULL'){
            echo " ";
        }
        else{
        $resultat = mysqli_query($mysqli,"SELECT * FROM client WHERE prenomClient like '%" . $_POST["prenomC"]. "%'") or die("Erreur au niveau de la requête");
        if($resultat){
            echo"<h1 style:'text-align:center;'> Résultat de la recherche : </h1><br>";
            $nbClient = mysqli_num_rows($resultat);
            if($nbClient > 0){
                echo "<table class='table table-hover' border ='1'>";
                echo "<tr class='table-primary'>";
                echo "<th scope='row'>Numéro client</th>";
                echo "<th scope='row'>Nom client</th>";
                echo "<th scope='row'>Prenom client</th>";
                echo "<th scope='row'>Raison Sociale</th>";
                echo "<th scope='row'>Siren</th>";
                echo "<th scope='row'>codeApe </th>";
                echo "<th scope='row'>Teléphone</th>";
                echo "<th scope='row'>Adresse</th>";
                echo "<th scope='row'>Mail</th>";
                echo "<th scope='row'>Durée Deplacement</th>";
                echo "<th scope='row'>Distance(km)</th>";
                echo "<th scope='row'>Contrat de maintenance</th>";
                echo "<th scope='row'> idAgence </th>";
                echo "</tr>";

            while($row = mysqli_fetch_array($resultat)){
                echo "<tr class='table-primary'>";
                echo "<td>".$row['numClient'] . "</td>";
                echo "<td>".$row['nomClient'] . "</td>";
                echo "<td>".$row['prenomClient'] . "</td>";
                echo "<td>".$row['raisonSocialeClient'] . "</td>";
                echo "<td>".$row['sirenClient'] . "</td>";
                echo "<td>".$row['codeApeClient'] . "</td>";
                echo "<td>".$row['telClient'] . "</td>";
                echo "<td>".$row['adresseClient'] . "</td>";
                echo "<td>".$row['mailClient'] . "</td>";
                echo "<td>".$row['dureeDeplacementClient'] . "</td>";
                echo "<td>".$row['distanceKmClient'] . "</td>";
                echo "<td>".$row['contratmaintenance'] . "</td>";
                echo "<td>".$row['idAgence'] . "</td>";
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
    }
}
?>

</body>
</html>
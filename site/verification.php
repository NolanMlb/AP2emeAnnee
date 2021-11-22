<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Gestion des interventions</title>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=no">

        <!-- Lien pour CSS-->
        <link rel="stylesheet" href="css/style.css">
        
    </head> 
    <body>
        <?php

        if (isset($_POST['username']) && isset($_POST['password'])){

            // connexion a la base de donnée
            $bd_username = "root";
            $bd_password = "";
            $bd_nom = "le nom de la bdd";
            $bd_host = "localhost";
            
        }

        ?>
    </body>
</html>
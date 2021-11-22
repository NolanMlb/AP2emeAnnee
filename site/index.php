<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Gestion des interventions</title>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=no">

<!-- Lien pour CSS-->
        <link rel="stylesheet" href="css/style.css">
<!--Fin lien CSS -->

    </head> 

    <body>
        <h1>CONNECTEZ VOUS POUR ACCEDER A VOTRE ESPACE </h1>

<!-- Formulaire de connexion -->
        <form action="verification.php" method="POST">
            <label><b>Nom d'utilisateur :</b></label>
            <input type="text" placeholder="Entrez le nom d'utilisateur" name="username" requiered>

            <label><b>Mot de passe :</b></label>
            <input type="password" placeholder="Entrez le mot de passe" name="password" requiered>

            <?php
                if(isset($_POST['erreur'])){
                    $err = $_POST['erreur'];
                    if($err == 1 || $err == 2){
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect </p>";
                    }
                }
            ?>
        </form>
            
    </body>

</html>
toma pd
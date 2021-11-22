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
            $bd_nom = "ap2eme";
            $bd_host = "localhost";
            $bd = mysqli_connect($bd_host, $bd_username, $bd_password, $bd_name) or die ("Je n'arrive pas à me connecter à la BDD");

            // instruction pour eviter toute injection SQL et XSS
            $username = mysqli_real_escape_string($bd,htmlspecialchars($_POST['username']));
            $password = mysqli_real_escape_string($bd,htmlspecialchars($_POST['password']));

            // vérification du login et mdp avec requete SQL
            if($username !== "" && $password !== ""){
                $requete ="SELECT count(*) FROM utilisateur 
                WHERE nomUtilisateur ='".$username."' and mdpUtilisateur='".$password."'";

                $exec_requete = mysqli_query($bd,$requete);
                $count = $reponse ['count(*)'];
                
                if($count!=0){ // nom d'utilisateur et mot de passe correctes
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                }
                else{
                    echo"<p style:color='red'>Mot de passe ou utilisateur incorrect</p>";
                }

            }
        }
        mysqli_close($bd); // fermer la connexion avec la BDD

        ?>
    </body>
</html>
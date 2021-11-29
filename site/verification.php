<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Gestion des interventions</title>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=no">

       <!--Lien pour CSS-->        
       <link rel="stylesheet" href="css/style.css">
        
    </head> 
    <body>
        <?php
        if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
            $racine="..";
        }
        include "$racine/site/verification.php";
        session_start();
        if (isset($_POST['username']) && isset($_POST['password'])){

            // connexion a la base de donnée
            $bd_host = "localhost";
            $bd_nom = "ap2eme";
            $bd_username = "root";
            $bd_password = "";
            $bd = new mysqli ($bd_host,$bd_username,$bd_password,$bd_nom) or die ("Je n'arrive pas à me connecter à la BDD");

            // instruction pour eviter toute injection SQL et XSS
            $username = mysqli_real_escape_string($bd,htmlspecialchars($_POST['username']));
            $password = mysqli_real_escape_string($bd,htmlspecialchars($_POST['password']));

            // vérification du login et mdp avec requete SQL
            if($username !== "" && $password !== ""){
                $requete ="SELECT count(*) FROM utilisateur
                WHERE nomUtilisateur =.$username and mdpUtilisateur='".$password."'";

                $exec_requete = mysqli_query($bd,$requete);
                $count = $reponse ['count(*)'];
                
                if($count!=0){ // nom d'utilisateur ou mot de passe correctes
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                }
                else{
                    echo"<p>Mot de passe ou utilisateur incorrect</p>";
                }
                
            }
        }
        

        ?>
    </body>
</html>
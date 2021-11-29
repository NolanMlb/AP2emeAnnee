<?php

session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    if($username !== "" && $password !== ""){
        $requete = "SELECT count(*) FROM utilisateur where 
         nomUtilisateur = '".$username."' and mdpUtilisateur = '".$password."' ";

        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['utilisateur'] = $username;
           header('Location: connexion.php');
           if($_SESSION['utilisateur'] !== ""){
            $user = $_SESSION['utilisateur'];
            // afficher un message
            echo "Bonjour $user, vous êtes connecté";
        }
        }
        else
        {
           header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   //header('Location: index.php');
}
?>
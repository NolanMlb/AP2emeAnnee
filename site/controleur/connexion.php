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

    </body>

    <?php
/*
Page: connexion.php
*/
//à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
session_start();
include "$racine/vue/pied.html";
include "$racine/modele/bd.inc.php";
include "$racine/vue/vueAuthentification.html";


//si le bouton "Connexion" est cliqué
if(isset($_POST['valider'])){
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['utilisateur'])){
        include "$racine/vue/vueAuthentification.html";
        include "$racine/vue/pied.html";
        include "$racine/modele/bd.inc.php";
        echo "Le champ Pseudo est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['password'])){
            include "$racine/vue/vueAuthentification.html";
            include "$racine/vue/pied.html";
            include "$racine/modele/bd.inc.php";
            echo "Le champ Mot de passe est vide.";
        } else {
            // les champs pseudo & mdp sont bien postés et pas vides, on sécurise les données entrées par l'utilisateur
            //le htmlentities() passera les guillemets en entités HTML, ce qui empêchera en partie, les injections SQL
            $Pseudo = htmlentities($_POST['utilisateur'], ENT_QUOTES, "UTF-8"); 
            $MotDePasse = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost", "root", "root", "ap2eme");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                include "$racine/vue/vueAuthentification.html";
                include "$racine/vue/pied.html";
                include "$racine/modele/bd.inc.php";
                echo "Erreur de connexion à la base de données.";
            } else {
                //on fait maintenant la requête dans la base de données pour rechercher si ces données existent et correspondent:
                //si vous avez enregistré le mot de passe en md5() il vous faudra faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                $Requete = mysqli_query($mysqli,"SELECT * FROM utilisateur WHERE nomUtilisateur = '".$Pseudo."' AND mdpUtilisateur = '".$MotDePasse."'");
                //si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                //si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {
                    include "$racine/vue/vueAuthentification.html";
                    include "$racine/vue/pied.html";
                    include "$racine/modele/bd.inc.php";
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    //on ouvre la session avec $_SESSION:
                    //la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    $_SESSION['pseudo'] = $Pseudo;
                    include "$racine/vue/vueAuthentification.html";
                    include "$racine/vue/pied.html";
                    include "$racine/modele/bd.inc.php";
                    include "$racine/vue/accueil.html";
                    echo "Vous êtes à présent connecté !";
                    header('Location: /AP2emeAnnee/site/vue/accueil.html');
                    exit();
                }
            }
        }
    }
}
?>
</html>
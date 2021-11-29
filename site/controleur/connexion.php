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
    if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
        $racine="..";
    }
    
    session_start();
    if($_SESSION['username'] !== ""){
        $user = $_SESSION['username'];
        // afficher un message
        echo "Bonjour $user, vous êtes connecté";
    }
    include "$racine/site/vue/vueAuthentification.php";
    include "$racine/site/vue/pied.html";
    include "$racine/site/modele/bd.inc.php";
    
    ?>
</html>
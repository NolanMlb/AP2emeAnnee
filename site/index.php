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
        <h1 class="titre">CONNECTEZ-VOUS POUR ACCEDER A VOTRE ESPACE </h1>

<hr>

<!-- Formulaire de connexion -->
        <form action="verification.php" method="POST">
        <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="utilisateur" placeholder="Entrez le nom d'utilisateur..." name="username" requiered>
                    <label for="floatingInput">Nom d'utilisateur</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe..." name="password" requiered>
                    <label for="floatingPassword">Mot de passe</label>
                </div>
        </div>

        <div class="bouton">
            <button type="submit" class="btn btn-outline-primary">Valider</button>
        </div>
        </form>
<!--Fin formulaire de connexion-->        

    </body>


    <footer> <p>Site réalisé par Nolan Malherbe, Nicolas De Bruycker et Thomas Ribeiro.</p>
    </footer>
</html>
<link rel="stylesheet" href="css/style.css">
<!-- Formulaire de connexion -->
<h1 class="titre">CONNECTEZ-VOUS POUR ACCEDER A VOTRE ESPACE </h1>
<hr>
        <form action="controleur/connexion.php" method="POST">
        <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="utilisateur" placeholder="Entrez le nom d'utilisateur..." name="utilisateur" requiered>
                    <label for="floatingInput">Nom d'utilisateur</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe..." name="password" requiered>
                    <label for="floatingPassword">Mot de passe</label>
                </div>
        </div>
        <br>
        Test :
        login : DeBruycker<br>
        mdp : DeBruycker
        <div class="bouton">
            <button type="submit" class="btn btn-outline-primary" name="valider">Valider</button>
        </div>
        </form>
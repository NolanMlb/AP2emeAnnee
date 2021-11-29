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
        
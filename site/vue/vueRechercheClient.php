<!DOCTYPE html>
<html lang="fr">

<head>
    <title>pdo</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<form action="../controleur/RechClient.php" method="POST">
    <div class="form-floating mb-3">
	    Numéro de client : <input type="text" class="form-control" name="numC"/><br/>
        <input class="form-control" type="submit" value = "Valider">
    </div>
    <div class="form-floating mb-3">
        Nom du client : <input type="text" name="nomC" class="form-control"/><br>
        <input class="form-control" type="submit" value = "Valider">
    </div>
    <div class="form-floating mb-3">
        Prénom du client : <input type="text" name="prenomC" class="form-control"/><br>
        <input class="form-control" type="submit" value = "Valider">
    </div>
</form>
</html>
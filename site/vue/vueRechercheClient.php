<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Vue recherche client</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<form action="../controleur/rechercheClient.php" method="POST">
    <div class="form-floating mb-3">
	    Numéro de client : <input type="text" class="form-control" style="width:20%;"name="numC"/><br/>
        <input class="form-control" type="submit" style="width:20%;" value = "Valider">
    </div>
    <div class="form-floating mb-3">
        Nom du client : <input type="text" name="nomC" style="width:20%;" class="form-control"/><br>
        <input class="form-control" type="submit" style="width:20%;" value = "Valider">
    </div>
    <div class="form-floating mb-3">
        Prénom du client : <input type="text" name="prenomC" style="width:20%;" class="form-control"/><br>
        <input class="form-control" type="submit" style="width:20%;" value = "Valider">
    </div>
</form>
</html>
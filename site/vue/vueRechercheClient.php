<!DOCTYPE html>
<html lang="fr">

<head>
    <title>pdo</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<form action="/AP2emeAnnee/site/controleur/rechercheClient.php" method="POST">
    <div class="rechclient">
	Numéro de client : <input type="text" name="numC" placeholder="num" value="<?= $numC ?>" /><br/>
    <input type="submit" value = "Valider" class="btn btn-primary">
    </div>
</form>
</html>
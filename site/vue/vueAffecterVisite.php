<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<!--Formulaire pour affecter une visite-->
<form action="/AP2emeAnnee/site/controleur/affecterVisite.php" method="POST">

	Date de la visite<input type="date" name="Date de la visite"><br>
	Heure de la visite<input type="time" name="Heure de visite"><br>
    Id du client<SELECT name = "id Client"><br>
        <OPTION>1
        <OPTION>2
        <OPTION>3
        <OPTION>4
        <OPTION>5
    </SELECT><br>

    Id du technicien<SELECT name="id Technicien">
        <OPTION>1
        <OPTION>2
        <OPTION>3
    </SELECT><br>
	<input type="submit" value = "Valider !">

</form>
</html>


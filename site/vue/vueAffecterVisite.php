<!DOCTYPE html>
<html lang="fr">

<head>
    <title>marche</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<!--Formulaire pour affecter une visite-->
<form action="/AP2emeAnnee/site/controleur/affecterVisite.php" method="POST">

	Date de la visite<input type="date" name="dateVisite"><br>
	Heure de la visite<input type="time" name="heureVisite"><br>
    Id du client<SELECT name = "idClient"><br>
        <OPTION>1
        <OPTION>2
        <OPTION>3
        <OPTION>4
        <OPTION>5
    </SELECT><br>

    Id du technicien<SELECT name="idTechnicien">
        <OPTION>1
        <OPTION>2
        <OPTION>3
    </SELECT><br>
	<input type="submit" value = "Valider">

</form>
</html>


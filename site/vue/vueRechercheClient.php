<link rel="stylesheet" href="css/style.css">

<h1>Recherche d'un client</h1>
<form action="./?action=recherche&critere=<?= $critere ?>" method="POST">


    <?php
    switch ($critere) {
        case "nom":
            ?>
            Recherche par numéro du client : <br />
            <input type="text" name="numC" placeholder="num" value="<?= $numC ?>" /><br />
            <?php
            break;
        case "adresse":
            ?>
            Recherche par ID : <br />
            <input type="text" name="idC" placeholder="id" value="<?= $idC ?>" /><br />
            <?php
            break;

    }
    ?>
    <br /><br />
    <input type="submit" value="Rechercher" />

</form>
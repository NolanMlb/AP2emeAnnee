<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.client.rech.inc.php";

$numC="";
if (isset($_POST["numC"])){
    $nomR = $_POST["numC"];
}
$idC="";
if (isset($_POST["idC"])){
    $voieAdrR = $_POST["idC"];
}

switch($critere){
    case 'num':
        // recherche par num
        $listeRestos = getClientByNumC($numC);
        break;
    case 'id':
        // recherche par id
        $listeRestos = getClientByIdC($idC);
        break;    
}

$titre = "Recherche d'un client";
include "$racine/vue/entete.html";
include "$racine/modele/bd.inc.php";
include "$racine/controleur/connexion.php";
include "$racine/vue/vueRechercheResto.php";
if (!empty($_POST)) {
    // affichage des resultats de la recherche
    include "$racine/vue/vueResultRecherche.php";
}
include "$racine/vue/pied.html";

?>
<?php

include "bdd.utilisateur.inc.php";




function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["utilisateur"]);
    unset($_SESSION["password"]);
}



?>
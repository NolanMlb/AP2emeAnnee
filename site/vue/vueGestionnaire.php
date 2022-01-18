<?php
$titre = "Gestionnaire";
include_once"../vue/entete.html.php";
?>

   <h1 style="text-align:center;">Que voulez-vous faire ? </h1>

   <br>
   <hr>
   <div style="margin-top:60px;">
      <center><input type="button" onclick="window.location.href='../vue/vueAffecterVisite.html.php'" class="btn btn-primary" value ="Affecter une visite">

      <input type="button" onclick="window.location.href='vueListeClients.php'" class="btn btn-primary" value="Consulter une intervention">

      <input type="button" onclick="window.location.href='vueListeClients.php'"  class="btn btn-primary" value="Visualisation des statistiques"></center>
   </div>
    
</body>
</html>
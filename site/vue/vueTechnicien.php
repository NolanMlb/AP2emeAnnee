<!DOCTYPE html>
<html lang="fr">

<head>
      <title>Vue du Technicien</title>
        <meta charset="UTF-8">
        <!-- Responsive meta -->
        <meta name="viewport"content="width=device-width, initial-scale=1, user-scalable=no">

     <!-- Lien pour CSS-->
     <link rel="stylesheet" href="../css/style.css" type="text/css">
     
</head> 
 
<body>
   <h1 style="text-align:center;">Que voulez-vous faire ? </h1>
   <hr>

   <div style="margin-top:70px">
      <center><input type="button" onclick="window.location.href='../vue/vueListeInterventions.php'" class="btn btn-primary" value="Liste des interventions">

      <input type="button" onclick="window.location.href='../vue/vueRechercheClient.php'" class="btn btn-primary" value ="Rechercher un client" >

      <input type="button" onclick="window.location.href='vueListeClients.php'" class="btn btn-primary" value="Générer une fiche d'intervention">

      <input type="button" onclick="window.location.href='../vue/vueConsultInter.php'" class="btn btn-primary" value="Consulter une intervention">

      <input type="button" onclick="window.location.href='../vue/vueValiderIntervention.php'" class="btn btn-primary" value="Valider une intervention"></center>
   </div>
    
</body>
</html>
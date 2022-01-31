<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
        PDF</title>
        <meta charset="UTF-8">
        
        <style>
            table {
                border-width:1px; 
                border-style:solid; 
                border-color:black;
                width: 100%;
            }
            td { 
                text-align:center;
            }
        </style>

        <!-- Responsive meta -->
        <meta name="viewport"content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Lien pour CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">

    </head>

<body>
<img width="200px;" src="http://localhost:8888/AP2emeAnnee/site/img/vdev.png" alt="VDEV" style="margin-left:35%;">
                
                
<?php
                foreach($intervention as $interventions): ?>
    <center><h1> FICHE INTERVENTION N°<?=$interventions['idIntervention']?></h1></center>
    <hr width="50%" style="color:red">
    
                <p>Nom du technicien : <?=$interventions['nom']?><br>
                Prénom du technicien : <?=$interventions['prenom']?><br>
                N° téléphone du technicien : <?=$interventions['telTechnicien']?>
                </p>



<br><br><br>

    <table class="table table">
        <thead>
            <tr>
                <th>Date de la visite</th>
                <th>Heure de la visite</th>
                <th>idClient</th>
                <th>idTechnicien</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td><?=$interventions['dateVisite']?></td>
                <td><?=$interventions['heureVisite']?></td>
                <td><?=$interventions['idClient']?></td>
                <td><?=$interventions['idTechnicien']?></td>
            </tr>
    
        </tbody>
    </table>
    <style>
        p{
            margin-top: 50px;
        }
    </style>
    <p>Avec ce pdf, vous retrouverez tous les détails de l'intervention sélectionnée.<br> L'état de votre intervention est : <?=$interventions['etatIntervention']?>.</p>

    <?php endforeach; ?>
    <div>
        <table class="table1">
            <tr class="tr1"><th>Cachet de l'entreprise :</th></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
        </table>

        <style>
            .table1{
                float:left;
                margin-top: 40%;
                height:150px;
                width:200px;
            }
            .tr1{
                margin-top: -10px;
            }
        </style>

        <table class="table2">
            <tr class="tr2"><th>Signature du client :</th></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
        </table>

        <style>
            .table2{
                float:right;
                margin-left:60%;
                margin-top: 40%;
                height:150px;
                width:200px;
            }
            .tr1{
                margin-top: -10px;
            }
        </style>
    </div>
</body>
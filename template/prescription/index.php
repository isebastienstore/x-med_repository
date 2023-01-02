<?php require("/opt/lampp/htdocs/x-med/template/header.php"); ?>
<body>
<?php include ('/opt/lampp/htdocs/x-med/template/menu.php'); ?>
<div id="corps">
    <h1 id="titre-principal">LISTE DES PRESCRIPTIONS</h1>
    <?php
    if(isset($prescriptions) && empty($prescriptions))
    {?>
        <p>Liste des examens vide !</p><?php
    }
    else
    {?>
        <table>
        <tr>
            <th>ID</th>
            <th>Intitulé</th>
            <th>Nom prescriptuer</th>
            <th>Date prescription</th>
            <th>Dosage</th>
            <th>Dossier_id</th>
            <th colspan="2">Actions</th>
        </tr><?php
        foreach ($prescriptions as $prescription)
        {
            ?>
            <tr>
            <td><?= htmlspecialchars($prescription['id'])?></td>
            <td><?= htmlspecialchars($prescription['intitule'])?>
            <td><?= htmlspecialchars($prescription['nom_prescriptuer'])?></td>
            <td><?= htmlspecialchars($prescription['dosage'])?></td>
            <td><?= htmlspecialchars($prescription['date_prescription'])?></td>
            <td><?= htmlspecialchars($prescription['dossier_id'])?></td>


            <td><a href="<?php ?>">Modifier</a></td>
            <td><a href="" onclick="return confirmSuppression()">Supprimer</a></td>
            </tr><?php
        }?>
        </table><?php
    }
    ?>
    <a href="http://localhost:80/x-med/controller/PrescriptionController.php?action=prescription.ajouter">Ajouter une prescription</a>
    <div id="pied">Copyright DIC3 X-MED &copy; Decembre 2022</div>
</div>
</body>




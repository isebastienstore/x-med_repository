<?php require("/opt/lampp/htdocs/x-med/template/header.php"); ?>
<body>
<?php include ('/opt/lampp/htdocs/x-med/template/menu.php'); ?>
<div id="corps">
    <h1 id="titre-principal">LISTE DES EXAMENS MEDICAUX</h1>
    <?php
    if(isset($examens) && empty($examens))
    {?>
        <p>Liste des examens vide !</p><?php
    }
    else
    {?>
        <table>
        <tr>
            <th>ID</th>
            <th>Intitulé</th>
            <th>Description</th>
            <th>Date examen</th>
            <th>Dossier_id</th>
            <th colspan="2">Actions</th>
        </tr><?php
        foreach ($examens as $examen)
        {
            ?>
            <tr>
            <td><?= htmlspecialchars($examen['id'])?></td>
            <td><?= htmlspecialchars($examen['intitule'])?>
            <td><?= htmlspecialchars($examen['description'])?></td>
            <td><?= htmlspecialchars($examen['date_examen'])?></td>
            <td><?= htmlspecialchars($examen['dossier_id'])?></td>


            <td><a href="<?php ?>">Modifier</a></td>
            <td><a href="" onclick="return confirmSuppression()">Supprimer</a></td>
            </tr><?php
        }?>
        </table><?php
    }
    ?>
    <a href="http://localhost:80/x-med/controller/ExamenMedicalController.php?action=examen.ajouter">Ajouter un examen</a>
    <div id="pied">Copyright DIC3 X-MED &copy; Decembre 2022</div>
</div>
</body>




<?php require("/opt/lampp/htdocs/x-med/template/header.php"); ?>
<body>
<?php include ('/opt/lampp/htdocs/x-med/template/menu.php'); ?>
<div id="corps">
    <h1 id="titre-principal">LISTE DES PATIENT</h1>
    <?php
    if(isset($patients) && empty($patients))
    {?>
    <p>Liste des patients vide !</p><?php
    }
    else
    {?>
    <table>
        <tr>
            <th>ID</th>
            <th>Pr�nom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Sexe</th>
            <th>Ville</th>
            <th>Telephone</th>
            <th>Date de naissance</th>
            <th>Antecedants</th>
            <th colspan="2">Actions</th>
        </tr><?php
        foreach ($patients as $patient)
        {
        ?>
        <tr>
            <td><?= htmlspecialchars($patient['id'])?></td>
            <td><?= htmlspecialchars($patient['nom'])?><?php $patient['nom']?></td>
            <td><?= htmlspecialchars($patient['prenom'])?></td>
            <td><?= htmlspecialchars($patient['email'])?></td>
            <td><?= htmlspecialchars($patient['sexe'])?></td>
            <td><?= htmlspecialchars($patient['ville'])?></td>
            <td><?= htmlspecialchars($patient['telephone'])?></td>
            <td><?php (empty($patient['date_de_naissance']) ? 0 :  htmlspecialchars($patient['date_de_naissance']))?></td>
            <td><?php (empty($patient['antecedants']) ? 0 :  htmlspecialchars($patient['antecedants']))?></td>


            <td><a href="<?php ?>">Modifier</a></td>
            <td><a href="<?php include (__DIR__."update.php")?>" onclick="return confirmSuppression()">Supprimer</a></td>
        </tr><?php
        }?>
    </table><?php
    }
    ?>
    <a href="http://localhost:80/x-med/controller/PatientController.php?action=patient.ajouter">Ajouter un patient</a>
    <div id="pied">Copyright DIC3 X-MED &copy; Decembre 2022</div>
</div>
</body>




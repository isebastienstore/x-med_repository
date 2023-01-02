<?php require("/opt/lampp/htdocs/x-med/template/header.php"); ?>
<body>
<?php include ('/opt/lampp/htdocs/x-med/template/menu.php'); ?>
<div id="corps">
    <h1 id="titre-principal">LISTE DES ALLERGIES</h1>
    <?php
    if(isset($allergies) && empty($allergies))
    {?>
        <p>Liste des allergies vide !</p><?php
    }
    else
    {?>
        <table>
        <tr>
            <th>ID</th>
            <th>Intitulé</th>
            <th>Description</th>
            <th>Dossier_id</th>
            <th colspan="2">Actions</th>
        </tr><?php
        foreach ($allergies as $allergie)
        {
            ?>
            <tr>
            <td><?= htmlspecialchars($allergie['id'])?></td>
            <td><?= htmlspecialchars($allergie['intitule'])?>
            <td><?= htmlspecialchars($allergie['description'])?></td>
            <td><?= htmlspecialchars($allergie['dossier_id'])?></td>


            <td><a href="<?php ?>">Modifier</a></td>
            <td><a href="" onclick="return confirmSuppression()">Supprimer</a></td>
            </tr><?php
        }?>
        </table><?php
    }
    ?>
    <a href="http://localhost:80/x-med/controller/AllergieController.php?action=allergie.ajouter">Ajouter une allergie</a>
    <div id="pied">Copyright DIC3 X-MED &copy; Decembre 2022</div>
</div>
</body>




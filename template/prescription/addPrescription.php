
<?php include ("/opt/lampp/htdocs/x-med/template/header.php"); ?>
<body>
<?php include ('/opt/lampp/htdocs/x-med/template/menu.php'); ?>
<div id="corps">
    <h1 id="titre-principal">AJOUT D'UNE PRESCRIPTION</h1>
    <form action="/controller/PrescriptionController.php.php" method="post">
        <div class="formItem">
            <label for="nom">intitule</label>
            <input type="text" name="intitule"><br>
        </div>
        <div class="formItem">
            <label for="nom_prescripteur">nom prescripteur</label>
            <input type="text" name="nom_prescripteur"><br>
        </div>
        <div class="formItem">
            <label for="date_prescription">date prescription</label>
            <input type="text" name="date_prescription"><br>
        </div>
        <div class="formItem">
            <input type="submit" value="ajouter">
        </div>
    </form>
</div>
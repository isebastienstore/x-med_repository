
<?php include ("/opt/lampp/htdocs/x-med/template/header.php"); ?>
<body>
<?php include ('/opt/lampp/htdocs/x-med/template/menu.php'); ?>
<div id="corps">
    <h1 id="titre-principal">AJOUT D'UN PATIENT</h1>
    <form action="/controller/PatientController.php" method="post">
        <div class="formItem">
            <label for="nom">nom</label>
            <input type="text" name="nom"><br>
        </div>
        <div class="formItem">
            <label for="prenom">prenom</label>
            <input type="text" name="prenom"><br>
        </div>
        <div class="formItem">
            <label for="date_de_naissance">date de naissance</label>
            <input type="date" name="date_de_naissance"><br>
        </div>
        <div class="formItem">
            <p>
                sexe:<br>
                <input type="radio" name="sexe" value="masculin" id=""> <label for="masculin">masculin</label><br>
                <input type="radio" name="sexe" value="feminin" id=""> <label for="feminin">feminin</label><br>
            </p>
        </div>
        <div class="formItem">
            <label for="ville">ville</label>
            <input type="text" name="ville"><br>
        </div>
        <div class="formItem">
            <label for="telephone">téléphone</label>
            <input type="tel" name="telephone"><br>
        </div>
        <div class="formItem">
            <label for="antecedant">antecedant</label>
            <input type="text" name="antecedant"><br>
        </div>
        <div class="formItem">
            <input type="submit" value="ajouter">
        </div>
    </form>
</div>
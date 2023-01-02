
<?php include ("/opt/lampp/htdocs/x-med/template/header.php"); ?>
<body>
<?php include ('/opt/lampp/htdocs/x-med/template/menu.php'); ?>
<div id="corps">
    <h1 id="titre-principal">AJOUT D'UNE ALLERGIE</h1>
    <form action="/controller/AllergieController.php" method="post">
        <div class="formItem">
            <label for="nom">intitule</label>
            <input type="text" name="intitule"><br>
        </div>
        <div class="formItem">
            <label for="description">description</label>
            <input type="text" name="description"><br>
        </div>
        <div class="formItem">
            <input type="submit" value="ajouter">
        </div>
    </form>
</div>
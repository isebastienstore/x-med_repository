<?php
require_once ('../service/PatientService.php');
require_once ('../entity/Patient.php');
try {
    $patientService = new PatientService();
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == 'patient.lister'){
            $patientService->getPatients();
        }
        elseif ($_GET['action'] == 'patient.ajouter') {
            if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['ville']) && isset($_POST['date_de_naissance']) && isset($_POST['telephone']) && isset($_POST['antecedant']) && isset($_POST['email']))
            {
                $patient = new Patient();
                if(isset($_POST['nom']) && !empty($_POST['nom']))
                    $patient->setNom($_POST['nom']);
                if(isset($_POST['prenom']) && !empty($_POST['prenom']))
                    $patient->setPrenom($_POST['prenom']);
                if(isset($_POST['email']) && !empty($_POST['email']))
                    $patient->setEmail($_POST['email']);
                if(isset($_POST['sexe']) && !empty($_POST['sexe']))
                    $patient->setSexe($_POST['nom']);
                if(isset($_POST['ville']) && !empty($_POST['ville']))
                    $patient->setVille($_POST['ville']);
                if(isset($_POST['antecedant']) && !empty($_POST['antecedant']))
                    $patient->setNom($_POST['antecedant']);
                if(isset($_POST['date_de_naissance']) && !empty($_POST['date_de_naissance']))
                    $patient->setNom($_POST['date_de_naissance']);
                if(isset($_POST['telephone']) && !empty($_POST['telephone']))
                    $patient->setTelephone($_POST['telephone']);
                if (!empty($patient)) {
                    $patientService->addPatient($patient);
                    $patientService->getPatients();
                }


            }else{
                require('../template/patient/index.php');
            }
        }
        else{
            throw new Exception('Aucun identifiant de categorie envoyé !');
        }
    } else {
        $patientService->getPatients();
    }
}catch (Exception $exception){
    $errorMessage = $exception->getMessage();

    require('template/error.php');
}




----------------------------------------------------







<?php ob_start();  ?>

    <?php

    else{
    ?>



    <h1 id="titre-principal">Bienvenue dans la page d'ajout d'un patient</h1>
    <p>Remplir le formulaire pour ajouter un patient</p>

    <form action="" method="post">
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

<?php } ?>



<?php $content = ob_get_clean();

$title = 'actuesp';

?>
<?php require('/opt/lampp/htdocs/x-med/template/base_template.php');  ?>


    <body>
<?php





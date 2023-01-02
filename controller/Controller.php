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
                if (!empty($patient))
                    $patientService->addPatient($patient);

            }else{
                $message = "le patient n'a pas été jaouter !";
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
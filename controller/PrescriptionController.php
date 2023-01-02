<?php
require_once ('../service/PrescriptionService.php');
require_once ('../entity/Prescription.php');
try {
    $prescriptionService = new PrescriptionService();
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == 'prescription.lister'){
            $prescriptionService->getPrescriptions();
        }
        elseif ($_GET['action'] == 'prescription.ajouter') {
            if (isset($_POST['intitule']) && isset($_POST['nom_prescripteur']))
            {
                $prescription = new Prescription();
                $prescription->setDossier();
                if(isset($_POST['intitule']) && !empty($_POST['intitule']))
                    $prescription->setIntitule($_POST['intitule']);
                if(isset($_POST['nom_prescripteur']) && !empty($_POST['nom_prescripteur']))
                    $prescription->setNomPrescripteur($_POST['nom_prescripteur']);
                if(isset($_POST['dosage']) && !empty($_POST['dosage']))
                    $prescription->setDosage($_POST['dosage']);
                if(isset($_POST['date_prescription']) && !empty($_POST['date_prescription']))
                    $prescription->setDatePrescription($_POST['date_prescription']);

                if (!empty($prescription)) {
                    $prescriptionService->addPrescription($prescription);
                    $prescriptionService->getPrescriptions();
                }


            }else{
                require('../template/prescription/addPrescription.php');
            }
        }
        else{
            throw new Exception('Aucun identifiant de categorie envoyé !');
        }
    } else {
        $prescriptionService->getPrescriptions();
    }
}catch (Exception $exception){
    $errorMessage = $exception->getMessage();

    require('template/error.php');
}
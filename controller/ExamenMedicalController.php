<?php
require_once ('../service/ExamenMedicalService.php');
require_once ('../entity/ExamenMedical.php');
try {
    $examenMedicalService = new ExamenMedicalService();
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == 'examen.lister'){
            $examenMedicalService->getExamenMedical();
        }
        elseif ($_GET['action'] == 'examen.ajouter') {
            if (isset($_POST['intitule']) && isset($_POST['description']))
            {
                $examen = new ExamenMedical();
                $examen->setDossier();
                if(isset($_POST['intitule']) && !empty($_POST['intitule']))
                    $examen->setIntitule($_POST['intitule']);
                if(isset($_POST['description']) && !empty($_POST['description']))
                    $examen->setDescription($_POST['description']);
                if(isset($_POST['date_examen']) && !empty($_POST['date_examen']))
                    $examen->setDateExamen($_POST['date_examen']);

                if (!empty($examen)) {
                    $examenMedicalService->addExamen($examen);
                }
            }
            else
            {
                require('../template/examenMedical/addExamen.php');
            }
        }
        elseif ($_GET['action'] == 'examen.modifier')
        {

        }
        elseif ($_GET['action'] == 'examen.supprimer'){

        }
        else{
            throw new Exception('Aucun identifiant de categorie envoyé !');
        }
    } else {
        $examenMedicalService->getExamenMedical();
    }
}catch (Exception $exception){
    $errorMessage = $exception->getMessage();

    require('../template/error.php');
}
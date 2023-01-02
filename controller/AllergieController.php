<?php
require_once ('../service/AllergieService.php');
require_once ('../entity/Allergie.php');
try {
    $allergieService = new AllergieService();
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == 'allergie.lister'){
            $allergieService->getAllergies();
        }
        elseif ($_GET['action'] == 'allergie.ajouter') {
            if (isset($_POST['intitule']) && isset($_POST['description']))
            {
                $allergie = new Allergie();
                $allergie->setDossier();
                if(isset($_POST['intitule']) && !empty($_POST['intitule']))
                    $allergie->setIntitule($_POST['intitule']);
                if(isset($_POST['description']) && !empty($_POST['description']))
                    $allergie->setDescription($_POST['description']);

                if (!empty($allergie)) {
                    $allergieService->addAllergie($allergie);
                    $allergieService->getAllergies();
                }


            }elseif ($_GET['action'] == 'allergie.modifier'){

            }
            elseif ($_GET['action'] == 'allergie.supprimer'){

            }
            else{
                require('../template/allergie/addAllergie.php');
            }
        }
        else{
            throw new Exception('Aucun identifiant de categorie envoyé !');
        }
    } else {
        $allergieService->getAllergies();
    }
}catch (Exception $exception){
    $errorMessage = $exception->getMessage();

    require('template/error.php');
}
<?php
require_once ('../dao/DaoFactory.php');
require_once ('../entity/Allergie.php');
require_once ('../dao/AllergieDao.php');
require_once ('../dao/AllergieDaoImpl.php');
class AllergieService
{
    private $allergieDao;

    public function __construct()
    {
        $dao = new DaoFactory();
        $dao = $dao->getInstance();
        $this->allergieDao = $dao->getAllergieDao();
    }

    public function getAllergies(){
        $allergies = $this->allergieDao->lister();

        require('../template/allergie/index.php');
    }

    public function addAllergie(Allergie $allergie){
        $message = $this->allergieDao->ajouter($allergie);
        require('../template/allergie/addAllergie.php');

    }
}
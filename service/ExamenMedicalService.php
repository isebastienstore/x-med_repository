<?php

require_once('../dao/DaoFactory.php');
require_once('../dao/ExamenMedicalDao.php');
require_once('../dao/ExamenmedicalDaoImpl.php');
require_once('../entity/ExamenMedical.php');
class ExamenMedicalService
{
    private $examenMedicalDao;

    public function __construct()
    {
        $dao = new DaoFactory();
        $dao = $dao->getInstance();
        $this->examenMedicalDao = $dao->getExamenMedicalDao();
    }

    public function getExamenMedical(){
        $examens = $this->examenMedicalDao->lister();

        require('../template/examenMedical/index.php');
    }

    public function addExamen(ExamenMedical $examenMedical){
        $message = $this->examenMedicalDao->ajouter($examenMedical);
        require('../template/examenMedical/addExamen.php');
    }
}
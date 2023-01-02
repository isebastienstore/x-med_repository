<?php

require_once('../dao/DaoFactory.php');
require_once('../dao/PrescriptionDaoImpl.php');
require_once('../dao/PrescriptionDao.php');
require_once('../entity/Prescription.php');
class PrescriptionService
{
    private $prescriptionDao;

    public function __construct()
    {
        $dao = new DaoFactory();
        $dao = $dao->getInstance();
        $this->prescriptionDao = $dao->getPrescriptionDao();
    }

    public function getPrescriptions(){
        $prescriptions = $this->prescriptionDao->lister();

        require('../template/prescription/index.php');
    }

    public function addPrescription(Prescription $prescription){
        $message = $this->prescriptionDao->ajouter($prescription);
        require('../template/prescription/addPrescription.php');
    }
}
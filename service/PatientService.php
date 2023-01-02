<?php

require_once('../dao/DaoFactory.php');
require_once('../dao/PatientDao.php');
require_once('../dao/PatientDaoImpl.php');
require_once('../entity/Patient.php');
class PatientService
{
    private $patientDao;

    public function __construct()
    {
        $dao = new DaoFactory();
        $dao = $dao->getInstance();
        $this->patientDao = $dao->getPatientDao();
    }

    public function getPatients(){
        $patients = $this->patientDao->lister();

        require('../template/patient/index.php');
    }

    public function addPatient(Patient $patient){
        $message = $this->patientDao->ajouter($patient);
        require('../template/patient/addPatient.php');
    }
}
<?php
require_once('dao/DaoFactory.php');

require_once('entity/Patient.php');
require_once('dao/PatientDao.php');
require_once('dao/PatientDaoImpl.php');
class Model
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

        return $patients;
    }
}
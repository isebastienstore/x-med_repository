<?php

require_once('DaoFactory.php');
require_once('../entity/Prescription.php');
require_once ('PrescriptionDao.php');
class PrescriptionDaoImpl implements PrescriptionDao
{
    private $daoFactory;
    private $connexion;

    public function __construct(DaoFactory $daoFactory)
    {
        $this->daoFactory = $daoFactory;
        $this->connexion = $this->daoFactory->getDbConnection();
    }

    public function lister()
    {
        $data = $this->connexion->query('SELECT * FROM prescription');
        $this->daoFactory->setConnection(null);
        
        return $data->fetchAll();

    }

    public function ajouter(Prescription $prescription)
    {
        $message = null;
        $sqlQuery = 'insert into prescription (nom_prescripteur, intitule, date_prescription, dosage, dossier_id) values (:nom_prescripteur, :intitule, :date_prescription, :dosage, :dossier_id)';
        $statement = $this->connexion->prepare($sqlQuery);
        $statement->execute([
            'nom_prescripteur'=>$prescription->getNomPrescripteur(),
            'intitule'=>$prescription->getIntitule(),
            'date_prescription'=>$prescription->getDatePrescription(),
            'dosage'=>$prescription->getDosage(),
            'dossier_id'=>$prescription->getDossier()
        ])or die(print_r($this->connexion->errorInfo(), true));
        if ($statement)
            $message = 'prescription ajouté avec succès !';
        else
            $message = 'opération non reussie !';
        return $message;
    }

    public function supprimer(Prescription $prescription)
    {
        // TODO: Implement supprimer() method.
    }

    public function modifier(Prescription $prescription)
    {
        // TODO: Implement modifier() method.
    }


}
<?php

require_once('../dao/DaoFactory.php');
require_once('../entity/Patient.php');


class PatientDaoImpl implements PatientDao
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
        $data = $this->connexion->query('SELECT * FROM patient');
        $this->daoFactory->setConnection(null);
        
        return $data->fetchAll();

    }

    public function ajouter(Patient $patient)
    {
        $message = null;
        $sqlQuery = 'insert into patient (nom, prenom, email, date_de_naissance, sexe, ville, telephone, antecedants) values (:nom, :prenom, :email, :date_de_naissance, :sexe, :ville, :telephone, :antecedants)';
        $statement = $this->connexion->prepare($sqlQuery);
        $statement->execute([
            'nom'=>$patient->getNom(),
            'prenom'=>$patient->getPrenom(),
            'email'=>$patient->getEmail(),
            'date_de_naissance'=>$patient->getDateDeNaissance(),
            'sexe'=>$patient->getSexe(),
            'ville'=>$patient->getVille(),
            'telephone'=>$patient->getTelephone(),
            'antecedants'=>$patient->getAntecedants()
        ])or die(print_r($this->connexion->errorInfo(), true));
        if ($statement)
            $message = 'patient '.$patient->getNom().' '.$patient->getPrenom().' ajouté avec succès !';
        else
            $message = 'opération non reussie !';
        return $message;
    }

    public function modifier(Patient $patient)
    {
        // TODO: Implement modifier() method.
    }

    public function supprimer(Patient $patient)
    {
        // TODO: Implement supprimer() method.
    }
}
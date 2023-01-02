<?php

require_once('DaoFactory.php');
require_once('../entity/Dossier.php');


class ExamenMedicalDaoImpl implements ExamenMedicalDao
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
        $data = $this->connexion->query('SELECT * FROM examen_medical');
        $this->daoFactory->setConnection(null);
        
        return $data->fetchAll();

    }
    public function ajouter(ExamenMedical $examenMedical)
    {
        $message = null;
        $sqlQuery = 'insert into examen_medical (intitule, date_examen, description, dossier_id) values (:intitule, :current_date, :description, :dossier_id)';
        $statement = $this->connexion->prepare($sqlQuery);
        $statement->execute([
            'date_examen'=>$examenMedical->getDateExamen(),
            'intitule'=>$examenMedical->getIntitule(),
            'descriptpion'=>$examenMedical->getDescription(),
            'dossier_id'=>$examenMedical->getDossier()
        ])or die(print_r($this->connexion->errorInfo(), true));
        if ($statement)
            $message = 'examen ajouté avec succès !';
        else
            $message = 'opération non reussie !';
        return $message;
    }

    public function supprimer(ExamenMedical $examenMedical)
    {
        // TODO: Implement supprimer() method.
    }

    public function modifier(ExamenMedical $examenMedical)
    {
        // TODO: Implement modifier() method.
    }


}
<?php
require_once ('../dao/DaoFactory.php');
require_once ('../entity/Allergie.php');
class AllergieDaoImpl implements AllergieDao
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
        $data = $this->connexion->query('SELECT * FROM allergie');
        $this->daoFactory->setConnection(null);

        return $data->fetchAll();

    }

    public function ajouter(Allergie $allergie)
    {
        $message = null;
        $sqlQuery = 'insert into allergie (intitule, description, dossier_id) values (:intitule, :description, :dossier_id)';
        $statement = $this->connexion->prepare($sqlQuery);
        $statement->execute([
            'intitule'=>$allergie->getIntitule(),
            'description'=>$allergie->getDescription(),
            'dossier_id'=>$allergie->getDossier()
        ])or die(print_r($this->connexion->errorInfo(), true));
        if ($statement)
            $message = 'Allergie ajouté avec succès !';
        else
            $message = 'opération non reussie !';
        return $message;
    }

    public function modifier(Allergie $allergie)
    {
        // TODO: Implement modifier() method.
    }

    public function supprimerr(Allergie $allergie)
    {
        // TODO: Implement supprimerr() method.
    }
}
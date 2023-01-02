<?php

require_once('dao/DaoFactory.php');
require_once('entity/Dossier.php');


class DossierDaoImpl implements DossierDao
{
    private $daoFactory;
    private $connexion;

    public function __construct(DaoFactory $daoFactory)
    {
        $this->daoFactory = $daoFactory;
        $this->connexion = $this->daoFactory->getDbConnection();
    }

    public function list()
    {
        $data = $this->connexion->query('SELECT * FROM Dossier');
        $this->daoFactory->setConnection(null);
        
        return $data->fetchAll();

    }

    public function listByCategorie($categorie)
    {
        if (isset($categorie) ){
            if ($categorie == 'Santé'){
                $data = $this->connexion->query('SELECT id, titre, contenu, dateCreation, dateModification, categorie FROM Article WHERE categorie=2');
                $this->daoFactory->setConnection(null);
            }
            elseif ($categorie == 'Sport'){
                $data = $this->connexion->query('SELECT id, titre, contenu, dateCreation, dateModification, categorie FROM Article WHERE categorie=1');
                $this->daoFactory->setConnection(null);
            }
            elseif ($categorie == 'Education'){
                $data = $this->connexion->query('SELECT id, titre, contenu, dateCreation, dateModification, categorie FROM Article WHERE categorie=3');
                $this->daoFactory->setConnection(null);
            }
            elseif ($categorie == 'Politique'){
                $data = $this->connexion->query('SELECT id, titre, contenu, dateCreation, dateModification, categorie FROM Article WHERE categorie=4');
                $this->daoFactory->setConnection(null);
            }
            else {
                $data = 'Cette categorie n\'esiste pas';
            }
        }
        else {
            $data = 'Il n\'a pas de categorie';
        }
        return $data->fetchAll();
    }
}
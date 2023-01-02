<?php

class DaoFactory
{
    private $url;
    private $username;
    private $password;
    private $connection;


    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getConnection()
    {
        return $this->dbConnection;
    }

    public function setConnection($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public  function getInstance(){
        $daoFactory = new DaoFactory();
        $daoFactory->setUrl('mysql:host=localhost;dbname=mglsi_news;charset=utf8');
        $daoFactory->setUsername('root');
        $daoFactory->setPassword('');
        return $daoFactory;
    }

    public function getDbConnection(){
        try
        {
            $this->dbConnection = new PDO(
                'mysql:host=localhost;dbname=x-med;charset=utf8',
                'root',
                '');
            return $this->dbConnection;
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getDossierDao(){
        return new DossierDaoImpl($this);
    }

    public function getAllergieDao(){
        return new AllergieDaoImpl($this);
    }

    public function getPatientDao(){
        return new PatientDaoImpl($this);
    }

    public function getExamenMedicalDao(){
        return new ExamenMedicalDaoImpl($this);
    }

    public function getPrescriptionDao(){
        return new PrescriptionDaoImpl($this);
    }
}

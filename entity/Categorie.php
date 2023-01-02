<?php

class Categorie
{
    private $id;
    private $libelle;

    public function getId()
    {
        return $this->id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

}
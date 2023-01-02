<?php

class ExamenMedical
{

    private $id;
    private $intitule;
    private $date_examen;
    private $dossier;
    private $description;

    public function getId()
    {
        return $this->id;
    }

    public function getIntitule()
    {
        return $this->intitule;
    }

    public function setIntitule($intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getDateExamen()
    {
        return $this->date_examen;
    }

    public function setDateExamen($date_examen): self
    {
        $this->date_examen = $date_examen;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDossier()
    {
        return $this->dossier;
    }

    public function setDossier($dossier): self
    {
        $this->dossier = $dossier;

        return $this;
    }
}
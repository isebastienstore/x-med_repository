<?php

class Prescription
{

    private $id;
    private $intitule;
    private $nom_prescripteur;
    private $dosage;
    private $date_prescription;
    private $dossier;

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

    public function getNomPrescripteur()
    {
        return $this->nom_prescripteur;
    }

    public function setNomPrescripteur($nom_prescripteur): self
    {
        $this->nom_prescripteur = $nom_prescripteur;

        return $this;
    }

    public function getDosage()
    {
        return $this->dosage;
    }

    public function setDosage($dosage): self
    {
        $this->dosage = $dosage;

        return $this;
    }

    public function getDatePrescription()
    {
        return $this->date_prescription;
    }

    public function setDatePrescription($date_prescription): self
    {
        $this->date_prescription = $date_prescription;

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
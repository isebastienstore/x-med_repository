<?php


class Dossier
{

    private $id;

    private $patient;

    private $prescription;

    private $examen_medical;


    private $allergie;

    public function __construct()
    {
        $this->prescription = new ArrayCollection();
        $this->examen_medical = new ArrayCollection();
        $this->allergie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    
    public function getPrescription()
    {
        return $this->prescription;
    }

    public function addPrescription(Prescription $prescription): self
    {
        if (!$this->prescription->contains($prescription)) {
            $this->prescription->add($prescription);
            $prescription->setDossier($this);
        }

        return $this;
    }

    public function removePrescription(Prescription $prescription): self
    {
        if ($this->prescription->removeElement($prescription)) {
            // set the owning side to null (unless already changed)
            if ($prescription->getDossier() === $this) {
                $prescription->setDossier(null);
            }
        }

        return $this;
    }


    public function getExamenMedical(): Collection
    {
        return $this->examen_medical;
    }

    public function addExamenMedical(ExamenMedical $examenMedical): self
    {
        if (!$this->examen_medical->contains($examenMedical)) {
            $this->examen_medical->add($examenMedical);
            $examenMedical->setDossier($this);
        }

        return $this;
    }

    public function removeExamenMedical(ExamenMedical $examenMedical): self
    {
        if ($this->examen_medical->removeElement($examenMedical)) {
            if ($examenMedical->getDossier() === $this) {
                $examenMedical->setDossier(null);
            }
        }

        return $this;
    }


    public function getAllergie(): Collection
    {
        return $this->allergie;
    }

    public function addAllergie(Allergie $allergie): self
    {
        if (!$this->allergie->contains($allergie)) {
            $this->allergie->add($allergie);
            $allergie->setDossier($this);
        }

        return $this;
    }

    public function removeAllergie(Allergie $allergie): self
    {
        if ($this->allergie->removeElement($allergie)) {
            if ($allergie->getDossier() === $this) {
                $allergie->setDossier(null);
            }
        }

        return $this;
    }
}

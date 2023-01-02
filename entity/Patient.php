<?php

class Patient
{
    private $id;
    private $nom;
    private $prenom;
    private $dossier;
    private $date_de_naissance;
    private $antecedants;
    private $sexe;
    private $ville;
    private $telephone;


    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateDeNaissance()
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance($date_de_naissance): self
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAntecedants()
    {
        return $this->antecedants;
    }

    public function setAntecedants($antecedants)
    {
        $this->antecedants = $antecedants;

        return $this;
    }

    public function getDossier()
    {
        return $this->dossier;
    }

    public function setDossier($dossier): self
    {
        // set the owning side of the relation if necessary
        if ($dossier->getPatient() !== $this) {
            $dossier->setPatient($this);
        }

        $this->dossier = $dossier;

        return $this;
    }

    public function __toString()
    {
     return $this->nom.'  '.$this->prenom;
        // TODO: Implement __toString() method.
    }
}
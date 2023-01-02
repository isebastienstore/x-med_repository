<?php

interface PrescriptionDao{
    public function lister();
    public function supprimer(Prescription $prescription);
    public function modifier(Prescription  $prescription);
    public function ajouter(Prescription $prescription);
}
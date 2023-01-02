<?php
interface PatientDao{
    public function lister();
    public function ajouter(Patient $patient);
    public function modifier(Patient  $patient);
    public function supprimer(Patient $patient);
}
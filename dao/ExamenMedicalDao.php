<?php
require_once ('../entity/ExamenMedical.php');
interface ExamenMedicalDao{
    public function lister();
    public function supprimer(ExamenMedical $examenMedical);
    public function modifier(ExamenMedical $examenMedical);

    public function ajouter(ExamenMedical $examenMedical);
}
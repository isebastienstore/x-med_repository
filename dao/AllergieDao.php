<?php
require_once ('../entity/Allergie.php');
interface AllergieDao{
    public function lister();
    public function ajouter(Allergie $allergie);
    public function modifier(Allergie $allergie);
    public function supprimerr(Allergie $allergie);
}
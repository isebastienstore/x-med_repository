<?php
interface DossierDao{
    public function list();
    public function delete($id);
    public function update($id);
    public function add();
}
<?php

require_once 'model/Manager.php';

class ValidationFicheManager extends mgmtHU\Model\Manager
{
    public function getAllValidationFiche()
    {
        $db = $this->dbConnect();
        $allValidationFiche = $db->prepare('SELECT * FROM validation_fiche');
        $allValidationFiche->execute([]);

        return $allValidationFiche;
    }
}

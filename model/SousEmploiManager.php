<?php

require_once ('model/Manager.php');

class SousEmploiManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllSousEmploi()
    {   
        $db = $this->dbConnect();
        $allEmploi = $db->prepare('
            SELECT s.identifiant identifiant_sous_emploi, s.intitule intitule_sous_emploi, e.intitule intitule_emploi
            FROM sous_emploi s
            LEFT JOIN emploi e
            ON s.emploi = e.identifiant
            ORDER BY s.intitule
            '); 
        $allEmploi->execute(array());
        return $allEmploi;
    }
    
}
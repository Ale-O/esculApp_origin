<?php

require_once ('model/Manager.php');

class EmploiManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllEmploi()
    {   
        $db = $this->dbConnect();
        $allEmploi = $db->prepare('SELECT * FROM emploi ORDER BY intitule'); 
        $allEmploi->execute(array());
        return $allEmploi;
    }
    
}
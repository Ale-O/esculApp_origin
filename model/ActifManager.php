<?php

require_once ('model/Manager.php');

class ActifManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllActif()
    {   
        $db = $this->dbConnect();
        $allActif = $db->prepare('SELECT * FROM actif'); 
        $allActif->execute(array());
        return $allActif;
    }
    
}
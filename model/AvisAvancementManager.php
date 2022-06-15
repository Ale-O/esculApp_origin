<?php

require_once ('model/Manager.php');

class AvisAvancementManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllAvisAvancement()
    {   
        $db = $this->dbConnect();
        $allAvisAvancement = $db->prepare('SELECT * FROM avis_avancement'); 
        $allAvisAvancement->execute(array());
        return $allAvisAvancement;
    }
    
}
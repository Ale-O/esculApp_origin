<?php

require_once ('model/Manager.php');

class TrajectoireHuManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllTrajectoireHu()
    {   
        $db = $this->dbConnect();
        $allTrajectoireHu = $db->prepare('SELECT * FROM trajectoire_hu'); 
        $allTrajectoireHu->execute(array());
        return $allTrajectoireHu;
    }
    
}
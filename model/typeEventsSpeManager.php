<?php

require_once ('model/Manager.php');

class typeEventsSpeManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllTypeEventsSpe()
    {   
        $db = $this->dbConnect();
        $allTypeEventsSpe = $db->prepare('SELECT * FROM type_evenement_spe'); 
        $allTypeEventsSpe->execute(array());
        return $allTypeEventsSpe;
    }
    
}
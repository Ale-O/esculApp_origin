<?php

require_once ('model/Manager.php');

class MobiliteManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllMobilite()
    {   
        $db = $this->dbConnect();
        $allMobilite = $db->prepare('SELECT * FROM mobilite'); 
        $allMobilite->execute(array());
        return $allMobilite;
    }
    
}
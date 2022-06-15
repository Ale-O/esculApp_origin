<?php

require_once ('model/Manager.php');

class PrecnuManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllPrecnu()
    {   
        $db = $this->dbConnect();
        $allPrecnu = $db->prepare('SELECT * FROM precnu'); 
        $allPrecnu->execute(array());
        return $allPrecnu;
    }
    
}
<?php

require_once ('model/Manager.php');

class CnuManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllCnu()
    {   
        $db = $this->dbConnect();
        $allCnu = $db->prepare('SELECT * FROM cnu ORDER BY libelle'); 
        $allCnu->execute(array());
        return $allCnu;
    }

}
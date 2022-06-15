<?php

require_once ('model/Manager.php');

class Absence_depart_arriveeManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllAbsence_depart_arrivee()
    {   
        $db = $this->dbConnect();
        $allAbsence_depart_arrivee = $db->prepare('SELECT * FROM absence_depart_arrivee'); 
        $allAbsence_depart_arrivee->execute(array());
        return $allAbsence_depart_arrivee;
    }    
    
    
}
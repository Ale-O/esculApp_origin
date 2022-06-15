<?php

require_once ('model/Manager.php');

class ActionAffectationManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllActionAffectation()
    {   
        $db = $this->dbConnect();
        $allActionAffectation = $db->prepare('SELECT * FROM action_affectation'); 
        $allActionAffectation->execute(array());
        return $allActionAffectation;
    }

}
<?php

require_once ('model/Manager.php');

class ExperienceManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllExperience()
    {   
        $db = $this->dbConnect();
        $allExperience = $db->prepare('SELECT * FROM experience'); 
        $allExperience->execute(array());
        return $allExperience;
    }
    
}
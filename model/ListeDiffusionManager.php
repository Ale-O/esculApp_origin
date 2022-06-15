<?php

require_once ('model/Manager.php');

class ListeDiffusionManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllListeDiffusion()
    {   
        $db = $this->dbConnect();
        $allListeDiffusion = $db->prepare('SELECT * FROM liste_diffusion'); 
        $allListeDiffusion->execute(array());
        return $allListeDiffusion;
    }

}
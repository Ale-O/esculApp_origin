<?php

require_once ('model/Manager.php');

class DphuManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllDphu()
    {   
        $db = $this->dbConnect();
        $allDphu = $db->prepare('SELECT * FROM dphu'); 
        $allDphu->execute(array());
        return $allDphu;
    }
    
}
<?php

require_once ('model/Manager.php');

class CommissionHuManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllCommissionHu()
    {   
        $db = $this->dbConnect();
        $allCommissionHu = $db->prepare('
            SELECT c.identifiant identifiant_commission, a.annee annee_civile
            FROM commission_hu c
            LEFT JOIN annee_civile a
            ON c.annee_civile = a.identifiant
            '); 
        $allCommissionHu->execute(array());
        return $allCommissionHu;
    }

}
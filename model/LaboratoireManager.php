<?php

require_once 'model/Manager.php';

class LaboratoireManager extends mgmtHU\Model\Manager
{
    public function getAllLaboratoire()
    {
        $db = $this->dbConnect();
        $allLaboratoire = $db->prepare('SELECT * FROM laboratoire');
        $allLaboratoire->execute([]);

        return $allLaboratoire;
    }
}

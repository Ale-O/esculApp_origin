<?php

require_once 'model/Manager.php';

class SuiviRetraiteManager extends mgmtHU\Model\Manager
{
    public function getAllSuiviRetraite()
    {
        $db = $this->dbConnect();
        $allSuiviRetraite = $db->prepare('SELECT * FROM suivi_retraite');
        $allSuiviRetraite->execute([]);

        return $allSuiviRetraite;
    }
}

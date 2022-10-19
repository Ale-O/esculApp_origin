<?php

require_once 'model/Manager.php';

class AnneeCivileManager extends mgmtHU\Model\Manager
{
    public function getAllAnneeCivile()
    {
        $db = $this->dbConnect();
        $allAnneeCivile = $db->prepare('SELECT * FROM annee_civile');
        $allAnneeCivile->execute([]);

        return $allAnneeCivile;
    }
}

<?php

require_once 'model/Manager.php';

class thematiqueTachesManager extends mgmtHU\Model\Manager
{
    public function getAllThematiqueTaches()
    {
        $db = $this->dbConnect();
        $allThematiqueTaches = $db->prepare('SELECT * FROM thematique_taches');
        $allThematiqueTaches->execute([]);

        return $allThematiqueTaches;
    }
}

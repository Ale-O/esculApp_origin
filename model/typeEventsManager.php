<?php

require_once 'model/Manager.php';

class typeEventsManager extends mgmtHU\Model\Manager
{
    public function getAllTypeEvents()
    {
        $db = $this->dbConnect();
        $allTypeEvents = $db->prepare('SELECT * FROM type_evenement');
        $allTypeEvents->execute([]);

        return $allTypeEvents;
    }
}

<?php

require_once 'model/Manager.php';

class NextManager extends mgmtHU\Model\Manager
{
    public function getAllNext()
    {
        $db = $this->dbConnect();
        $allNext = $db->prepare('SELECT * FROM next');
        $allNext->execute([]);

        return $allNext;
    }
}

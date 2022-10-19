<?php

require_once 'model/Manager.php';

class HdrManager extends mgmtHU\Model\Manager
{
    public function getAllHdr()
    {
        $db = $this->dbConnect();
        $allHdr = $db->prepare('SELECT * FROM hdr');
        $allHdr->execute([]);

        return $allHdr;
    }
}

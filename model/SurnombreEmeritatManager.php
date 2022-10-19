<?php

require_once 'model/Manager.php';

class SurnombreEmeritatManager extends mgmtHU\Model\Manager
{
    public function getAllSurnombreEmeritat()
    {
        $db = $this->dbConnect();
        $allSurnombreEmeritat = $db->prepare('SELECT * FROM surnombre_emeritat');
        $allSurnombreEmeritat->execute([]);

        return $allSurnombreEmeritat;
    }
}

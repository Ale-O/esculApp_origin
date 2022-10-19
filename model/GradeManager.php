<?php

require_once 'model/Manager.php';

class GradeManager extends mgmtHU\Model\Manager
{
    public function getAllGrade()
    {
        $db = $this->dbConnect();
        $allGrade = $db->prepare('SELECT * FROM grade');
        $allGrade->execute([]);

        return $allGrade;
    }
}

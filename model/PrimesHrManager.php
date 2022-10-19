<?php

require_once 'model/Manager.php';

class PrimesHrManager extends mgmtHU\Model\Manager
{
    public function getAllPrimesHr()
    {
        $db = $this->dbConnect();
        $allPrimesHr = $db->prepare('SELECT * FROM nature_primes_hr');
        $allPrimesHr->execute([]);

        return $allPrimesHr;
    }
}

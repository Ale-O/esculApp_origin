<?php

require_once 'model/Manager.php';

class EligibleElectionManager extends mgmtHU\Model\Manager
{
    public function getAllEligibleElection()
    {
        $db = $this->dbConnect();
        $allEligibleElection = $db->prepare('SELECT * FROM eligible_election');
        $allEligibleElection->execute([]);

        return $allEligibleElection;
    }
}

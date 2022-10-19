<?php

require_once 'model/Manager.php';

class SuccessionManager extends mgmtHU\Model\Manager
{
    public function getAllSuccession()
    {
        $db = $this->dbConnect();
        $allSuccession = $db->prepare('
            SELECT s.identifiant identifiant_succession, e.nom nom_enseignant, o.intitule origine_support, a.annee annee_civile, c.intitule cause_depart, n.next etat_next 
            FROM succession s
            LEFT JOIN enseignants e
            ON s.enseignant = e.identifiant
            LEFT JOIN origine_support o
            ON s.origine_support = o.identifiant
            LEFT JOIN annee_civile a
            ON s.annee_civile = a.identifiant
            LEFT JOIN cause_depart c
            ON s.cause_depart = c.identifiant
            LEFT JOIN next n
            ON s.next = n.identifiant

            ');
        $allSuccession->execute([]);

        return $allSuccession;
    }
}

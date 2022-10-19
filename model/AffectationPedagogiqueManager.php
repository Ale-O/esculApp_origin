<?php

require_once 'model/Manager.php';

class AffectationPedagogiqueManager extends mgmtHU\Model\Manager
{
    public function getAllAffectationPedagogique()
    {
        $db = $this->dbConnect();
        $allAffectationPedagogique = $db->prepare('
            SELECT a.identifiant identifiant_affectation_pedagogique, a.intitule intitule_affectation_pedagogique, d.intitule intitule_dphu, e.nom nom_enseignant 
            FROM affectation_pedagogique a
            LEFT JOIN dphu d
            ON a.dphu = d.identifiant
            LEFT JOIN enseignants e
            ON a.chef = e.identifiant
            ORDER BY a.intitule
            ');
        $allAffectationPedagogique->execute([]);

        return $allAffectationPedagogique;
    }
}

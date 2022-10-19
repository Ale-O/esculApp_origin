<?php

require_once 'model/Manager.php';

class champsManager extends mgmtHU\Model\Manager
{
    public function itemById($table, $identifiant)
    {
        switch ($table) {
            case 'absence_depart_arrivee':
                $champs = 'etat';
            break;
            case 'actif':
                $champs = 'etat';
            break;
            case 'action_affectation':
                $champs = 'action';
            break;
            case 'affectation_pedagogique':
                $champs = 'intitule';
            break;
            case 'affectation_support':
                $champs = 'support';
            break;
            case 'annee_civile':
                $champs = 'annee';
            break;
            case 'cause_depart':
                $champs = 'intitule';
            break;
            case 'cnu':
                $champs = 'libelle';
            break;
            case 'commission_hu':
                $champs = 'annee_civile';
            break;
            case 'dphu':
                $champs = 'intitule';
            break;
            case 'eligible_election':
                $champs = 'etat';
            break;
            case 'emploi':
                $champs = 'intitule';
            break;
            case 'enseignants':
                $champs = 'nom';
            break;
            case 'experience':
                $champs = 'etat';
            break;
            case 'hdr':
                $champs = 'etat';
            break;
            case 'id_mangue':
                $champs = 'sexe';
            break;
            case 'laboratoire':
                $champs = 'nom';
            break;
            case 'liste_diffusion':
                $champs = 'etat';
            break;
            case 'login':
                $champs = 'prenom';
            break;
            case 'mobilite':
                $champs = 'etat';
            break;
            case 'next':
                $champs = 'next';
            break;
            case 'nom_chu':
                $champs = 'discipline';
            break;
            case 'origine_support':
                $champs = 'intitule';
            break;
            case 'precnu':
                $champs = 'etat';
            break;
            case 'save_search':
                $champs = 'qui';
            break;
            case 'sous_emploi':
                $champs = 'intitule';
            break;
            case 'succession':
                $champs = 'enseignant';
            break;
            case 'suivi':
                $champs = 'qui';
            break;
            case 'suivi_retraite':
                $champs = 'etat';
            break;
            case 'support':
                $champs = 'numero_formate';
            break;
            case 'surnombre_emeritat':
                $champs = 'statut';
            break;
            case 'trajectoire_hu':
                $champs = 'etat';
            break;
            case 'validation_fiche':
                $champs = 'etat';
            break;
            case 'type_evenement':
                $champs = 'intitule';
            break;
            case 'type_evenement_spe':
                $champs = 'intitule';
            break;
            case 'thematique_taches':
                $champs = 'intitule';
            break;
            case 'nature_primes_hr':
                $champs = 'intitule';
            break;
            case 'avis_avancement':
                $champs = 'intitule';
            break;
            default:
                $champs = 'nonChamps';
        }

        if ($champs == 'nonChamps') {
            $contenuChamps = 'nonChamps';

            return $contenuChamps;
        } else {
            $db = $this->dbConnect();
            $contenuChamps = $db->prepare('
            SELECT t.'.$champs.' champs
            FROM '.$table.' t
            WHERE t.identifiant = :identifiant
        ');

            $contenuChamps->execute([
            'identifiant' => $identifiant,
            ]);

            return $contenuChamps;
        }
    }
}

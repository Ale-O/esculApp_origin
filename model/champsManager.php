<?php

require_once ('model/Manager.php');

class champsManager extends mgmtHU\Model\Manager
{



    public function itemById($table,$identifiant)
    {

        

        switch ($table)
        { 
            Case 'absence_depart_arrivee':
                $champs = 'etat';
            break;
            case 'actif':
                $champs = 'etat' ;
            break;
            Case 'action_affectation' : 
                $champs = 'action' ;
            break;
            Case 'affectation_pedagogique' : 
                $champs = 'intitule' ;
            break;
            Case 'affectation_support' : 
                $champs = 'support' ;
            break;
            Case 'annee_civile' :
                $champs = 'annee' ;
            break;
            Case 'cause_depart' : 
                $champs = 'intitule' ;
            break;
            Case 'cnu' : 
                $champs = 'libelle' ;
            break;
            Case 'commission_hu' : 
                $champs = 'annee_civile' ;
            break;
            Case 'dphu' :
                $champs = 'intitule' ;
            break;
            Case 'eligible_election' : 
                $champs = 'etat' ;
            break;
            Case 'emploi' : 
                $champs = 'intitule' ;
            break;
            Case 'enseignants' : 
                $champs = 'nom' ;
            break;
            Case 'experience' : 
                $champs = 'etat' ;
            break;
            Case 'hdr' : 
                $champs = 'etat' ;
            break;
            Case 'id_mangue' : 
                $champs = 'sexe' ;
            break;
            Case 'laboratoire' : 
                $champs = 'nom' ;
            break;
            Case 'liste_diffusion' : 
                $champs = 'etat' ;
            break;
            Case 'login' : 
                $champs = 'prenom' ;
            break;
            Case 'mobilite' : 
                $champs = 'etat' ;
            break;
            Case 'next' :
                $champs = 'next' ;
            break;
            Case 'nom_chu' : 
                $champs = 'discipline' ;
            break;
            Case 'origine_support' :
                $champs = 'intitule' ;
            break;
            Case 'precnu' : 
                $champs = 'etat' ;
            break;
            Case 'save_search' : 
                $champs = 'qui' ;
            break;
            Case 'sous_emploi' :
                $champs = 'intitule' ;
            break;
            Case 'succession' : 
                $champs = 'enseignant' ;
            break;
            Case 'suivi' : 
                $champs = 'qui' ;
            break;
            Case 'suivi_retraite' : 
                $champs = 'etat' ;
            break;
            Case 'support' :
                $champs = 'numero_formate' ;
            break;
            Case 'surnombre_emeritat' :
                $champs = 'statut' ;
            break;
            Case 'trajectoire_hu' :
                $champs = 'etat' ;
            break;
            Case 'validation_fiche' :
                $champs = 'etat' ;
            break;
            Case 'type_evenement' :
                $champs = 'intitule' ;
            break;
            Case 'type_evenement_spe' :
                $champs = 'intitule' ;
            break;
            Case 'thematique_taches' :
                $champs = 'intitule' ;
            break;
            Case 'nature_primes_hr' :
                $champs = 'intitule' ;
            break;
            Case 'avis_avancement' :
                $champs = 'intitule' ;
            break;
            default:
                $champs = 'nonChamps' ;
        }


        if ($champs == 'nonChamps'){


        $contenuChamps = 'nonChamps';
        return $contenuChamps;


        }

        else 

        {


        $db = $this->dbConnect();
        $contenuChamps = $db->prepare('
            SELECT t.'.$champs.' champs
            FROM '.$table.' t
            WHERE t.identifiant = :identifiant
        ');

        $contenuChamps->execute(array(
            'identifiant'=> $identifiant
            )); 
        
        return $contenuChamps;


        }


    }


    
}
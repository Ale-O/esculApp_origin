<?php

require_once ('model/Manager.php');




class AssignManager extends mgmtHU\Model\Manager
{
   
    
    public function getAllAssigns($corbeille)
    {   


        $select = $this->selectAssignManager();
        $etatCorbeille = ($corbeille == "corbeille") ? 'a.Corbeille is not null' : 'a.Corbeille is null';


        $db = $this->dbConnect();
        $allAssigns = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.'
            ORDER BY nom_enseignant
        '); 
        $allAssigns->execute(array());
        return $allAssigns;
    }



    public function getAllAssignsWithoutGhost($corbeille)
    {   


        $select = $this->selectAssignManager();
        $etatCorbeille = ($corbeille == "corbeille") ? 'a.Corbeille is not null' : 'a.Corbeille is null';


        $db = $this->dbConnect();
        $allAssigns = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND a.identifiant !=0
            ORDER BY nom_enseignant
        '); 
        $allAssigns->execute(array());
        return $allAssigns;
    }




     public function getAssigns($corbeille,$support,$startDate,$fin,$nomEnseignant,$prenomEnseignant,$emploi,$sous_emploi,$action)
    {

        $select = $this->selectAssignManager();
        $etatCorbeille = ($corbeille == "corbeille") ? 'a.Corbeille is not null' : 'a.Corbeille is null';


        $support_vide = ($support == "") ? 'OR numero_formate != \'\' OR numero_formate is NULL' : "";
        $startDate_vide = ($startDate == "") ? 'OR debut != \'\' OR debut is NULL' : "";
        $fin_vide = ($fin == "") ? 'OR fin != \'\' OR fin is NULL' : "";
        $enseignant_vide = ($nomEnseignant == "") ? 'OR e.nom != \'\' OR e.nom is NULL' : "";
        $prenomEnseignant_vide = ($prenomEnseignant == "") ? 'OR e.prenom != \'\' OR e.prenom is NULL' : "";
        $emploi_vide = ($emploi == "") ? 'OR em.intitule != \'\' OR em.intitule is NULL' : "";
        $sous_emploi_vide = ($sous_emploi == "") ? 'OR sem.intitule != \'\' OR sem.intitule is NULL' : "";
        $action_vide = ($action == "") ? 'OR aa.action != \'\' OR aa.action is NULL' : "";


        $db = $this->dbConnect();
        $assigns = $db->prepare('
            '.$select.'
            WHERE (numero_formate LIKE :support '.$support_vide.') AND (debut >= :start_date '.$startDate_vide.') AND (fin <= :fin '.$fin_vide.') AND (e.nom LIKE :enseignant '.$enseignant_vide.') AND (e.prenom LIKE :prenomEnseignant '.$prenomEnseignant_vide.') AND (em.intitule LIKE :emploi '.$emploi_vide.') AND (sem.intitule LIKE :sous_emploi '.$sous_emploi_vide.') AND (aa.action LIKE :action '.$action_vide.') AND '.$etatCorbeille.'
            ORDER BY nom_enseignant
        ');

        $assigns->execute(array(
            'support'=> "%".$support."%",
            'enseignant'=> "%".$nomEnseignant."%",
            'prenomEnseignant'=> "%".$prenomEnseignant."%",
            'emploi'=> "%".$emploi."%",
            'sous_emploi'=> "%".$sous_emploi."%",
            'start_date'=> $startDate,
            'fin'=> $fin,
            'action'=> $action,
            )); 
        return $assigns;
    }


     public function getAssignsById($identifiant_affectation)
    {

        $select = $this->selectAssignManager();

        $db = $this->dbConnect();
        $assigns = $db->prepare('
            '.$select.'
            WHERE a.identifiant = :identifiant_affectation
        ');

        $assigns->execute(array(
            'identifiant_affectation'=> $identifiant_affectation
            )); 
        return $assigns;
    }



         public function getAssignsByNextDateDebut($corbeille, $identifiant_enseignant)
    {

        $today = date("Y-m-d");

        $select = $this->selectAssignManager();

        $etatCorbeille = ($corbeille == "corbeille") ? 'a.Corbeille is not null' : 'a.Corbeille is null';

        $db = $this->dbConnect();
        $assigns = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND e.identifiant = :identifiant_enseignant AND a.fin >= :today
            ORDER BY debut2
        ');

        // AND ((action_affectation != 6 AND action_affectation != 7 AND action_affectation != 8) OR action_affectation is NULL)

        $assigns->execute(array(
            'identifiant_enseignant'=> $identifiant_enseignant,
            'today'=> $today
            )); 
        return $assigns;
    }



         public function getAssignsByLastDateFin($corbeille, $identifiant_enseignant)
    {

        $today = date("Y-m-d");

        $select = $this->selectAssignManager();

        $etatCorbeille = ($corbeille == "corbeille") ? 'a.Corbeille is not null' : 'a.Corbeille is null';

        $db = $this->dbConnect();
        $assigns = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND e.identifiant = :identifiant_enseignant
            ORDER BY debut2 DESC
        ');

        // AND debut <= :today AND ((action_affectation != 6 AND action_affectation != 7 AND action_affectation != 8) OR action_affectation is NULL)

        $assigns->execute(array(
            'identifiant_enseignant'=> $identifiant_enseignant,
            // 'today'=> $today
            )); 
        return $assigns;
    }



        public function getAssignsByCurrentDate($corbeille, $identifiant_enseignant)
    {

        $today = date("Y-m-d");

        $select = $this->selectAssignManager();

        $etatCorbeille = ($corbeille == "corbeille") ? 'a.Corbeille is not null' : 'a.Corbeille is null';

        $db = $this->dbConnect();
        $assigns = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND e.identifiant = :identifiant_enseignant AND debut <= :today AND fin >= :today
        ');

        // 

        $assigns->execute(array(
            'identifiant_enseignant'=> $identifiant_enseignant,
            'today'=> $today
            )); 
        return $assigns;
    }






         public function getAssignsWhithoutTeachers($corbeille, $debut)
    {



        $select = $this->selectAssignManager();

        $etatCorbeille = ($corbeille == "corbeille") ? 'a.Corbeille is not null' : 'a.Corbeille is null';

        $db = $this->dbConnect();
        $assigns = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND enseignant = 479 AND fin >= debut AND support != 354
        ');

        $assigns->execute(array(
            'debut'=> $debut,
            )); 
        return $assigns;
    }




         public function getAssignsWhithoutSupport($corbeille, $debut)
    {



        $select = $this->selectAssignManager();

        $etatCorbeille = ($corbeille == "corbeille") ? 'a.Corbeille is not null' : 'a.Corbeille is null';

        $db = $this->dbConnect();
        $assigns = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND (support is null OR support = 354) AND a.identifiant !=0
        ');

        $assigns->execute(array(
            'debut'=> $debut,
            )); 
        return $assigns;
    }




         public function getAssignsWhithoutTeachersAndByDate($corbeille, $support, $debut, $fin)
    {



        $select = $this->selectAssignManager();

        $etatCorbeille = ($corbeille == "corbeille") ? 'a.Corbeille is not null' : 'a.Corbeille is null';

        $db = $this->dbConnect();
        $assigns = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND enseignant = 479 AND support != 354 AND support = :support AND ((debut <= :debut AND fin <= :fin) OR (debut >= :debut AND fin >= :fin) OR (debut >= :debut AND fin <= :fin) OR (debut <= :debut AND fin >= :fin))
        ');

        $assigns->execute(array(
            'support'=> $support,
            'debut'=> $debut,
            'fin'=> $fin,
            )); 
        return $assigns;
    }



    public function createAssign($support,$enseignant,$debut,$fin,$renseignements,$emploi,$sous_emploi)
    {
        $db = $this->dbConnect();
        $newAssign = $db->prepare('INSERT INTO affectation_support (identifiant, support, enseignant, debut, fin, renseignements, nouvelle_fin_potentielle, successeur_potentiel, chef_successeur, action_affectation, annee_civile_action, validation_fiche, emploi, sous_emploi) 

        VALUES (NULL, :support, :enseignant, :debut, :fin, :renseignements, NULL, NULL, NULL, NULL, NULL, NULL, :emploi, :sous_emploi);');

        $newAssign->execute(array(
            'support' => $support,
            'enseignant' => $enseignant,
            'debut' => $debut,
            'fin' => $fin,
            'renseignements' => $renseignements,
            'emploi' => $emploi,
            'sous_emploi' => $sous_emploi,
            ));
        return $newAssign;
    }
    


    public function modifAssign($identifiant,$support,$enseignant,$debut,$fin,$renseignements,$nouvelle_fin_potentielle,$successeur_potentiel,$chef_successeur,$action_affectation,$annee_civile,$validation_fiche,$emploi,$sous_emploi)


    {
        $db = $this->dbConnect();
        $modifAssign = $db->prepare('


            UPDATE `affectation_support` 

            SET 

            support = :support,
            enseignant = :enseignant,
            debut = :debut,
            fin = :fin,
            renseignements = :renseignements,
            nouvelle_fin_potentielle = :nouvelle_fin_potentielle,
            successeur_potentiel = :successeur_potentiel,
            chef_successeur = :chef_successeur,
            action_affectation = :action_affectation,
            annee_civile_action = :annee_civile,
            validation_fiche = :validation_fiche,
            emploi = :emploi,
            sous_emploi = :sous_emploi

            WHERE affectation_support.identifiant = :identifiant;


        ');

        $modifAssign->execute(array(
            'identifiant' => $identifiant,
            'support' => $support,
            'enseignant' => $enseignant,
            'debut' => $debut,
            'fin' => $fin,
            'renseignements' => $renseignements,
            'nouvelle_fin_potentielle' => $nouvelle_fin_potentielle,
            'successeur_potentiel' => $successeur_potentiel,
            'chef_successeur' => $chef_successeur,
            'action_affectation' => $action_affectation,
            'annee_civile' => $annee_civile,
            'validation_fiche' => $validation_fiche,
            'emploi' => $emploi,
            'sous_emploi' => $sous_emploi,
            ));
        return $modifAssign;
    }



    public function modifAssignDate($identifiant,$debut,$fin)


    {
        $db = $this->dbConnect();
        $modifAssignDate = $db->prepare('


            UPDATE `affectation_support` 

            SET 

            debut = :debut,
            fin = :fin

            WHERE affectation_support.identifiant = :identifiant;


        ');

        $modifAssignDate->execute(array(
            'identifiant' => $identifiant,
            'debut' => $debut,
            'fin' => $fin,
            ));
        return $modifAssignDate;
    }



    public function modifAssignHypothese($identifiant,$hypothese)


    {
        $db = $this->dbConnect();
        $modifAssign = $db->prepare('


            UPDATE `affectation_support` 

            SET 

            hypothese = :hypothese

            WHERE affectation_support.identifiant = :identifiant;


        ');

        $modifAssign->execute(array(
            'identifiant' => $identifiant,
            'hypothese' => $hypothese,
            ));
        return $modifAssign;
    }






public function deleteAssign($identifiant_affectation)
    {   
            $db = $this->dbConnect();
            $deleteAssign = $db->prepare('DELETE FROM affectation_support WHERE identifiant = :identifiant_affectation ');
            $deleteAssign->execute(array(
            'identifiant_affectation' => $identifiant_affectation,
            ));
        return $deleteAssign; 
    }


public function corbeilleAssign($identifiant_affectation)
    {
        $db = $this->dbConnect();
        $corbeilleAssign = $db->prepare('


            UPDATE `affectation_support` 

            SET Corbeille = "oui" 

            WHERE affectation_support.identifiant = :identifiant;


        ');

        $corbeilleAssign->execute(array(
            'identifiant' => $identifiant_affectation,
            ));
        return $corbeilleAssign;
    }


public function restoreAssign($identifiant_affectation)
    {
        $db = $this->dbConnect();
        $restoreAssign = $db->prepare('


            UPDATE `affectation_support` 

            SET Corbeille = NULL 

            WHERE affectation_support.identifiant = :identifiant;


        ');

        $restoreAssign->execute(array(
            'identifiant' => $identifiant_affectation,
            ));
        return $restoreAssign;
    }


    
}
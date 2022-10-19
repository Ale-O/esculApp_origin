<?php

require_once 'model/Manager.php';

class TeacherManager extends mgmtHU\Model\Manager
{
    public function getAllTeachers($corbeille)
    {
        $select = $this->selectTeacherManager();
        $etatCorbeille = ($corbeille == 'corbeille') ? 'e.Corbeille is not null' : 'e.Corbeille is null';

        $db = $this->dbConnect();
        $allTeachers = $db->prepare('
            '.$select.'
            WHERE e.Corbeille is NULL
            ORDER BY nom
            ');
        $allTeachers->execute([]);

        return $allTeachers;
    }

    public function getAllTeachersWithoutGhost($corbeille)
    {
        $select = $this->selectTeacherManager();
        $etatCorbeille = ($corbeille == 'corbeille') ? 'e.Corbeille is not null' : 'e.Corbeille is null';

        $db = $this->dbConnect();
        $allTeachers = $db->prepare('
            '.$select.'
            WHERE e.Corbeille is NULL AND e.identifiant !=479
            ORDER BY nom
            ');
        $allTeachers->execute([]);

        return $allTeachers;
    }

    public function getTeachers($actif, $corbeille, $name, $prenom, $emploi, $cnu, $affectation_hospitaliere, $absence_depart_arrivee,
        $liste_de_diffusion,
        $sous_emploi,
        $dphu,
        $affectation_pedagogique,
        $laboratoire,
        $next,
        $trajectoire_hu,
        $annee_civile,
        $emploi_cible,
        $succession,
        $commission_evaluation_hu,
        $experience,
        $mobilite,
        $hdr,
        $precnu,
        $date_dernier_changement,
        $fin_enseignant,
        $eligible_election,
        $grade,
        $debut_grade,
        $ouverture_droits_retraite,
        $age_limite,
        $date_limite_age,
        $enfant_vivant_a_50ans,
        $date_previsionnelle,
        $depart_effectif_ou_souhaite,
        $option_remarque_retraite,
        $surnombre_emeritat
    ) {
        $select = $this->selectTeacherManager();

        $name_vide = ($name == '') ? 'OR e.nom != \'\'  OR e.nom is NULL' : '';
        $prenom_vide = ($prenom == '') ? 'OR e.prenom != \'\'  OR e.prenom is NULL' : '';
        $emploi_vide = ($emploi == '') ? 'OR em.intitule != \'\'  OR em.intitule is NULL' : '';
        $cnu_vide = ($cnu == '') ? 'OR c.libelle != \'\'  OR c.libelle is NULL' : '';
        $affectation_hospitaliere_vide = ($affectation_hospitaliere == '') ? 'OR nc.service != \'\' OR nc.service is NULL' : '';
        $absence_depart_arrivee_vide = ($absence_depart_arrivee == '') ? 'OR ad.etat != \'\' OR ad.etat is NULL' : '';
        $actif_vide = ($actif == '') ? 'OR a.etat != \'\'  OR a.etat is NULL' : '';

        $liste_de_diffusion_vide = ($liste_de_diffusion == '') ? 'OR l.etat != \'\' OR l.etat is NULL' : '';
        $sous_emploi_vide = ($sous_emploi == '') ? 'OR se.intitule != \'\'  OR se.intitule is NULL' : '';
        $dphu_vide = ($dphu == '') ? 'OR d.intitule != \'\'  OR d.intitule is NULL' : '';
        $affectation_pedagogique_vide = ($affectation_pedagogique == '') ? 'OR ap.intitule != \'\'  OR ap.intitule is NULL' : '';
        $laboratoire_vide = ($laboratoire == '') ? 'OR la.code != \'\'  OR la.code is NULL' : '';
        $next_vide = ($next == '') ? 'OR n.next != \'\' OR n.next is NULL' : '';
        $trajectoire_hu_vide = ($trajectoire_hu == '') ? 'OR th.etat != \'\' OR th.etat is NULL' : '';
        $annee_civile_vide = ($annee_civile == '') ? 'OR ac.annee != \'\'  OR ac.annee is NULL' : '';
        $emploi_cible_vide = ($emploi_cible == '') ? 'OR ec.intitule != \'\'  OR ec.intitule is NULL' : '';
        $succession_vide = ($succession == '') ? 'OR suc.numero_formate != \'\'  OR suc.numero_formate is NULL' : '';

        $commission_evaluation_hu_vide = ($commission_evaluation_hu == '') ? 'OR acc.annee != \'\'  OR acc.annee is NULL' : '';

        $experience_vide = ($experience == '') ? 'OR ex.etat != \'\'  OR ex.etat is NULL' : '';
        $mobilite_vide = ($mobilite == '') ? 'OR m.etat != \'\' OR m.etat is NULL' : '';
        $hdr_vide = ($hdr == '') ? 'OR h.etat != \'\' OR h.etat is NULL' : '';
        $precnu_vide = ($precnu == '') ? 'OR pr.etat != \'\'  OR pr.etat is NULL' : '';
        $date_dernier_changement_vide = ($date_dernier_changement == '') ? 'OR e.date_dernier_changement != \'\'  OR e.date_dernier_changement is NULL' : '';
        $fin_enseignant_vide = ($fin_enseignant == '') ? 'OR e.fin_enseignant != \'\'  OR e.fin_enseignant is NULL' : '';
        $eligible_election_vide = ($eligible_election == '') ? 'OR ee.etat != \'\'  OR ee.etat is NULL' : '';
        $grade_vide = ($grade == '') ? 'OR e.grade != \'\'  OR e.grade is NULL' : '';
        $debut_grade_vide = ($debut_grade == '') ? 'OR e.debut_grade != \'\' OR e.debut_grade is NULL' : '';
        $ouverture_droits_retraite_vide = ($ouverture_droits_retraite == '') ? 'OR e.ouverture_droits_retraite != \'\' OR e.ouverture_droits_retraite is NULL' : '';
        $age_limite_vide = ($age_limite == '') ? 'OR e.age_limite != \'\'  OR e.age_limite is NULL' : '';
        $date_limite_age_vide = ($date_limite_age == '') ? 'OR e.date_limite_age != \'\'  OR e.date_limite_age is NULL' : '';
        $enfant_vivant_a_50ans_vide = ($enfant_vivant_a_50ans == '') ? 'OR e.enfant_vivant_a_50ans != \'\'  OR e.enfant_vivant_a_50ans is NULL' : '';
        $date_previsionnelle_vide = ($date_previsionnelle == '') ? 'OR e.date_previsionnelle != \'\'  OR e.date_previsionnelle is NULL' : '';
        $depart_effectif_ou_souhaite_vide = ($depart_effectif_ou_souhaite == '') ? 'OR e.depart_effectif_ou_souhaite != \'\'  OR e.depart_effectif_ou_souhaite is NULL' : '';
        $option_remarque_retraite_vide = ($option_remarque_retraite == '') ? 'OR e.option_remarque_retraite != \'\' OR e.option_remarque_retraite is NULL' : '';
        $surnombre_emeritat_vide = ($surnombre_emeritat == '') ? 'OR srem.statut != \'\' OR srem.statut is NULL' : '';

        $etatCorbeille = ($corbeille == 'corbeille') ? 'e.Corbeille is not null' : 'e.Corbeille is null';

        $db = $this->dbConnect();
        $listTeachers = $db->prepare('
            '.$select.'
            WHERE
            (e.nom LIKE :name '.$name_vide.')
            AND (e.prenom LIKE :prenom '.$prenom_vide.')
            AND (em.intitule = :emploi '.$emploi_vide.')
            AND (c.libelle = :cnu '.$cnu_vide.')
            AND (nc.service LIKE :affectation_hospitaliere '.$affectation_hospitaliere_vide.')
            AND (ad.etat = :absence_depart_arrivee '.$absence_depart_arrivee_vide.')
            AND (a.etat = :actif '.$actif_vide.')


            AND (l.etat = :liste_de_diffusion '.$liste_de_diffusion_vide.')
            AND (se.intitule = :sous_emploi '.$sous_emploi_vide.')
            AND (d.intitule = :dphu '.$dphu_vide.')
            AND (ap.intitule = :affectation_pedagogique '.$affectation_pedagogique_vide.')
            AND (la.code = :laboratoire '.$laboratoire_vide.')
            AND (n.next = :next '.$next_vide.')
            AND (th.etat = :trajectoire '.$trajectoire_hu_vide.')
            AND (ac.annee = :annee_civile '.$annee_civile_vide.')
            AND (ec.intitule = :emploi_cible '.$emploi_cible_vide.')
            AND (suc.numero_formate = :succession '.$succession_vide.')
            AND (acc.annee = :commission_evaluation '.$commission_evaluation_hu_vide.')
            AND (ex.etat = :experience '.$experience_vide.')
            AND (m.etat = :mobilite '.$mobilite_vide.')
            AND (h.etat = :hdr '.$hdr_vide.')
            AND (pr.etat = :precnu '.$precnu_vide.')

            AND (e.date_dernier_changement >= :date_dernier_changement '.$date_dernier_changement_vide.')
            AND (e.fin_enseignant <= :fin_enseignant '.$fin_enseignant_vide.')

            AND (ee.etat = :eligible_election '.$eligible_election_vide.')
            AND (e.grade LIKE :grade '.$grade_vide.')

            AND (e.debut_grade >= :debut_grade '.$debut_grade_vide.')

            AND (e.ouverture_droits_retraite LIKE :ouverture_droits_retraite '.$ouverture_droits_retraite_vide.')
            AND (e.age_limite LIKE :age_limite '.$age_limite_vide.')

            AND (e.date_limite_age >= :date_limite_age '.$date_limite_age_vide.')

            AND (e.enfant_vivant_a_50ans = :enfant_vivant_a_50ans '.$enfant_vivant_a_50ans_vide.')

            AND (e.date_previsionnelle >= :date_previsionnelle '.$date_previsionnelle_vide.')
            AND (e.depart_effectif_ou_souhaite >= :depart_effectif_ou_souhaite '.$depart_effectif_ou_souhaite_vide.')

            AND (e.option_remarque_retraite LIKE :option_remarque_retraite '.$option_remarque_retraite_vide.')
            AND (srem.statut = :surnombre_emeritat '.$surnombre_emeritat_vide.')



            AND '.$etatCorbeille.'
            ORDER BY nom
            ');

        $listTeachers->execute([
            'name' => '%'.$name.'%',
            'affectation_hospitaliere' => '%'.$affectation_hospitaliere.'%',
            'prenom' => '%'.$prenom.'%',
            'emploi' => $emploi,
            'cnu' => $cnu,
            'absence_depart_arrivee' => $absence_depart_arrivee,
            'actif' => $actif,

            'liste_de_diffusion' => $liste_de_diffusion,
            'sous_emploi' => $sous_emploi,
            'dphu' => $dphu,
            'affectation_pedagogique' => $affectation_pedagogique,
            'laboratoire' => $laboratoire,
            'next' => $next,
            'trajectoire' => $trajectoire_hu,
            'annee_civile' => $annee_civile,
            'emploi_cible' => $emploi_cible,
            'succession' => $succession,
            'commission_evaluation' => $commission_evaluation_hu,
            'experience' => $experience,
            'mobilite' => $mobilite,
            'hdr' => $hdr,
            'precnu' => $precnu,
            'date_dernier_changement' => $date_dernier_changement,
            'fin_enseignant' => $fin_enseignant,
            'eligible_election' => $eligible_election,
            'grade' => '%'.$grade.'%',
            'debut_grade' => $debut_grade,
            'ouverture_droits_retraite' => '%'.$ouverture_droits_retraite.'%',
            'age_limite' => '%'.$age_limite.'%',
            'date_limite_age' => $date_limite_age,
            'enfant_vivant_a_50ans' => $enfant_vivant_a_50ans,
            'date_previsionnelle' => $date_previsionnelle,
            'depart_effectif_ou_souhaite' => $depart_effectif_ou_souhaite,
            'option_remarque_retraite' => '%'.$option_remarque_retraite.'%',
            'surnombre_emeritat' => $surnombre_emeritat,
            ]);

        return $listTeachers;
    }

    public function getTeachersById($identifiant)
    {
        $select = $this->selectTeacherManager();

        $db = $this->dbConnect();
        $teachers = $db->prepare('
            '.$select.'
            WHERE e.identifiant = :identifiant
            ');
        $teachers->execute([
            'identifiant' => $identifiant,
            ]);

        return $teachers;
    }

    public function createTeacher($nom, $prenom, $nom_jeune_fille, $absence_depart_arrivee, $commentaire, $affectation_support, $cnu, $emploi, $sous_emploi, $next, $liste_de_diffusion, $courriel_univ, $courriel_chu, $courriel_autre, $grade, $dphu, $affectation_pedagogique, $nom_chu, $laboratoire, $trajectoire_hu, $emploi_cible, $annee_civile, $succession, $commission_evaluation_hu, $experience, $mobilite, $hdr, $precnu, $commentaire_trajectoire_hu, $date_dernier_changement, $actif, $id_mangue, $telephone, $fin_enseignant)
    {
        $db = $this->dbConnect();
        $newTeacher = $db->prepare('

            INSERT INTO `enseignants` (`identifiant`, `nom`, `prenom`, `nom_jeune_fille`, `surnombre_emeritat`, `absence_depart_arrivee`, `commentaire`, `affectation_support`, `cnu`, `emploi`, `sous_emploi`, `next`, `liste_de_diffusion`, `courriel_univ`, `courriel_chu`, `courriel_autre`, `grade`, `ouverture_droits_retraite`, `age_limite`, `date_limite_age`, `enfant_vivant_a_50ans`, `date_previsionnelle`, `depart_effectif_ou_souhaite`, `option_remarque_retraite`, `dphu`, `affectation_pedagogique`, `nom_chu`, `laboratoire`, `trajectoire_hu`, `emploi_cible`, `annee_civile`, `succession`, `commission_evaluation_hu`, `experience`, `mobilite`, `hdr`, `precnu`, `commentaire_trajectoire_hu`, `date_dernier_changement`, `eligible_election`, `actif`, `id_mangue`,`Corbeille`,`telephone`,`fin_enseignant`,`debut_grade`) 

            VALUES (NULL, :nom, :prenom, :nom_jeune_fille, NULL, :absence_depart_arrivee, :commentaire, :affectation_support, :cnu, :emploi, :sous_emploi, :next, :liste_de_diffusion, :courriel_univ, :courriel_chu, :courriel_autre, :grade, NULL, NULL, NULL, NULL, NULL, NULL, NULL, :dphu, :affectation_pedagogique, :nom_chu, :laboratoire, :trajectoire_hu, :emploi_cible, :annee_civile, :succession, :commission_evaluation_hu, :experience, :mobilite, :hdr, :precnu, :commentaire_trajectoire_hu, :date_dernier_changement, NULL, :actif, :id_mangue, NULL, :telephone, :fin_enseignant, :debut_grade);

        ');

        $newTeacher->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'nom_jeune_fille' => $nom_jeune_fille,
            'absence_depart_arrivee' => $absence_depart_arrivee,
            'commentaire' => $commentaire,
            'affectation_support' => $affectation_support,
            'cnu' => $cnu,
            'emploi' => $emploi,
            'sous_emploi' => $sous_emploi,
            'next' => $next,
            'liste_de_diffusion' => $liste_de_diffusion,
            'courriel_univ' => $courriel_univ,
            'courriel_chu' => $courriel_chu,
            'courriel_autre' => $courriel_autre,
            'grade' => $grade,
            'dphu' => $dphu,
            'affectation_pedagogique' => $affectation_pedagogique,
            'nom_chu' => $nom_chu,
            'laboratoire' => $laboratoire,
            'trajectoire_hu' => $trajectoire_hu,
            'emploi_cible' => $emploi_cible,
            'annee_civile' => $annee_civile,
            'succession' => $succession,
            'commission_evaluation_hu' => $commission_evaluation_hu,
            'experience' => $experience,
            'mobilite' => $mobilite,
            'hdr' => $hdr,
            'precnu' => $precnu,
            'commentaire_trajectoire_hu' => $commentaire_trajectoire_hu,
            'date_dernier_changement' => $date_dernier_changement,
            'actif' => $actif,
            'id_mangue' => $id_mangue,
            'telephone' => $telephone,
            'fin_enseignant' => $fin_enseignant,
            'debut_grade' => $date_dernier_changement,
            ]);

        return $newTeacher;
    }

    public function modifTeacher($identifiant, $nom, $prenom, $nom_jeune_fille, $surnombre_emeritat, $absence_depart_arrivee, $commentaire, $affectation_support, $cnu, $emploi, $sous_emploi, $next, $liste_de_diffusion, $courriel_univ, $courriel_chu, $courriel_autre, $grade, $ouverture_droits_retraite, $age_limite, $date_limite_age, $enfant_vivant_a_50ans, $date_previsionnelle, $depart_effectif_ou_souhaite, $option_remarque_retraite, $dphu, $affectation_pedagogique, $nom_chu, $laboratoire, $trajectoire_hu, $emploi_cible, $annee_civile, $succession, $commission_evaluation_hu, $experience, $mobilite, $hdr, $precnu, $commentaire_trajectoire_hu, $date_dernier_changement, $eligible_election, $actif, $id_mangue, $telephone, $fin_enseignant, $debut_grade)
    {
        $db = $this->dbConnect();
        $modifTeacher = $db->prepare('


            UPDATE `enseignants` 

            SET 

            nom = :nom,
            prenom = :prenom,
            nom_jeune_fille = :nom_jeune_fille,
            surnombre_emeritat = :surnombre_emeritat,
            absence_depart_arrivee = :absence_depart_arrivee,
            commentaire = :commentaire,
            affectation_support = :affectation_support,
            cnu = :cnu,
            emploi = :emploi,
            sous_emploi = :sous_emploi,
            next = :next,
            liste_de_diffusion = :liste_de_diffusion,
            courriel_univ = :courriel_univ,
            courriel_chu = :courriel_chu,
            courriel_autre = :courriel_autre,
            grade = :grade,
            ouverture_droits_retraite = :option_remarque_retraite,
            age_limite = :age_limite,
            date_limite_age = :date_limite_age,
            enfant_vivant_a_50ans = :enfant_vivant_a_50ans,
            date_previsionnelle = :date_previsionnelle,
            depart_effectif_ou_souhaite = :depart_effectif_ou_souhaite,
            option_remarque_retraite = :option_remarque_retraite,
            dphu = :dphu,
            affectation_pedagogique = :affectation_pedagogique,
            nom_chu = :nom_chu,
            laboratoire = :laboratoire,
            trajectoire_hu = :trajectoire_hu,
            emploi_cible = :emploi_cible,
            annee_civile = :annee_civile,
            succession = :succession,
            commission_evaluation_hu = :commission_evaluation_hu,
            experience = :experience,
            mobilite = :mobilite,
            hdr = :hdr,
            precnu = :precnu,
            commentaire_trajectoire_hu = :commentaire_trajectoire_hu,
            date_dernier_changement = :date_dernier_changement,
            eligible_election = :eligible_election,
            actif = :actif,
            id_mangue = :id_mangue,
            telephone = :telephone,
            fin_enseignant = :fin_enseignant,
            debut_grade = :debut_grade

            WHERE enseignants.identifiant = :identifiant;


        ');

        $modifTeacher->execute([
            'identifiant' => $identifiant,
            'nom' => $nom,
            'prenom' => $prenom,
            'nom_jeune_fille' => $nom_jeune_fille,
            'surnombre_emeritat' => $surnombre_emeritat,
            'absence_depart_arrivee' => $absence_depart_arrivee,
            'commentaire' => $commentaire,
            'affectation_support' => $affectation_support,
            'cnu' => $cnu,
            'emploi' => $emploi,
            'sous_emploi' => $sous_emploi,
            'next' => $next,
            'liste_de_diffusion' => $liste_de_diffusion,
            'courriel_univ' => $courriel_univ,
            'courriel_chu' => $courriel_chu,
            'courriel_autre' => $courriel_autre,
            'grade' => $grade,
            'ouverture_droits_retraite' => $ouverture_droits_retraite,
            'age_limite' => $age_limite,
            'date_limite_age' => $date_limite_age,
            'enfant_vivant_a_50ans' => $enfant_vivant_a_50ans,
            'date_previsionnelle' => $date_previsionnelle,
            'depart_effectif_ou_souhaite' => $depart_effectif_ou_souhaite,
            'option_remarque_retraite' => $option_remarque_retraite,
            'dphu' => $dphu,
            'affectation_pedagogique' => $affectation_pedagogique,
            'nom_chu' => $nom_chu,
            'laboratoire' => $laboratoire,
            'trajectoire_hu' => $trajectoire_hu,
            'emploi_cible' => $emploi_cible,
            'annee_civile' => $annee_civile,
            'succession' => $succession,
            'commission_evaluation_hu' => $commission_evaluation_hu,
            'experience' => $experience,
            'mobilite' => $mobilite,
            'hdr' => $hdr,
            'precnu' => $precnu,
            'commentaire_trajectoire_hu' => $commentaire_trajectoire_hu,
            'date_dernier_changement' => $date_dernier_changement,
            'eligible_election' => $eligible_election,
            'actif' => $actif,
            'id_mangue' => $id_mangue,
            'telephone' => $telephone,
            'fin_enseignant' => $fin_enseignant,
            'debut_grade' => $debut_grade,
            ]);

        return $modifTeacher;
    }

    public function modifTeacherByAssignDateDebut($identifiant, $affectation_support, $emploi, $sous_emploi, $date_dernier_changement)
    {
        $db = $this->dbConnect();
        $modifTeacherByAssign = $db->prepare('


            UPDATE `enseignants` 

            SET 

            affectation_support = :affectation_support,
            emploi = :emploi,
            sous_emploi = :sous_emploi,
            date_dernier_changement = :date_dernier_changement

            WHERE enseignants.identifiant = :identifiant;


        ');

        $modifTeacherByAssign->execute([
            'identifiant' => $identifiant,
            'affectation_support' => $affectation_support,
            'emploi' => $emploi,
            'sous_emploi' => $sous_emploi,
            'date_dernier_changement' => $date_dernier_changement,
            ]);

        return $modifTeacherByAssign;
    }

    public function modifTeacherByAssignDateFin($identifiant, $affectation_support, $emploi, $sous_emploi, $fin_enseignant)
    {
        $db = $this->dbConnect();
        $modifTeacherByAssign = $db->prepare('


            UPDATE `enseignants` 

            SET 

            affectation_support = :affectation_support,
            emploi = :emploi,
            sous_emploi = :sous_emploi,
            fin_enseignant = :fin_enseignant

            WHERE enseignants.identifiant = :identifiant;


        ');

        $modifTeacherByAssign->execute([
            'identifiant' => $identifiant,
            'affectation_support' => $affectation_support,
            'emploi' => $emploi,
            'sous_emploi' => $sous_emploi,
            'fin_enseignant' => $fin_enseignant,
            ]);

        return $modifTeacherByAssign;
    }

    public function modifTeacherByRevisionEffectif($identifiant, $identifiant_emploi, $identifiant_annee_civile, $trajectoire_hu, $identifiant_support_cible)
    {
        $db = $this->dbConnect();
        $modifTeacherByRevisionEffectif = $db->prepare('


            UPDATE `enseignants` 

            SET 

            emploi_cible = :emploi_cible,
            annee_civile = :annee_civile_cible,
            trajectoire_hu = :trajectoire_hu,
            succession = :identifiant_support_cible

            WHERE enseignants.identifiant = :identifiant;


        ');

        $modifTeacherByRevisionEffectif->execute([
            'identifiant' => $identifiant,
            'emploi_cible' => $identifiant_emploi,
            'annee_civile_cible' => $identifiant_annee_civile,
            'trajectoire_hu' => $trajectoire_hu,
            'identifiant_support_cible' => $identifiant_support_cible,
            ]);

        return $modifTeacherByRevisionEffectif;
    }

    public function modifTeacherByAbsence($identifiant, $identifiant_absence_depart_arrivee)
    {
        $db = $this->dbConnect();
        $modifTeacherByAbsence = $db->prepare('


            UPDATE `enseignants` 

            SET 

            absence_depart_arrivee = :identifiant_absence_depart_arrivee

            WHERE enseignants.identifiant = :identifiant;


        ');

        $modifTeacherByAbsence->execute([
            'identifiant' => $identifiant,
            'identifiant_absence_depart_arrivee' => $identifiant_absence_depart_arrivee,
            ]);

        return $modifTeacherByAbsence;
    }

    public function modifTeacherByMangue($identifiant_mangue, $date_fin, $identifiant_grade, $date_grade)
    {
        $db = $this->dbConnect();
        $modifTeacherByMangue = $db->prepare('


            UPDATE `enseignants` 

            SET 

            fin_enseignant = :fin_enseignant,
            grade = :grade,
            debut_grade = :debut_grade


            WHERE enseignants.id_mangue = :identifiant_mangue;


        ');

        $modifTeacherByMangue->execute([
            'identifiant_mangue' => $identifiant_mangue,
            'fin_enseignant' => $date_fin,
            'grade' => $identifiant_grade,
            'debut_grade' => $date_grade,
            ]);

        return $modifTeacherByMangue;
    }

    public function deleteTeacher($identifiant)
    {
        $db = $this->dbConnect();
        $deleteTeacher = $db->prepare('DELETE FROM enseignants WHERE identifiant = :identifiant ');
        $deleteTeacher->execute([
            'identifiant' => $identifiant,
            ]);

        return $deleteTeacher;
    }

    public function corbeilleTeacher($identifiant)
    {
        $db = $this->dbConnect();
        $corbeilleTeacher = $db->prepare('


            UPDATE `enseignants` 

            SET Corbeille = "oui" 

            WHERE enseignants.identifiant = :identifiant;


        ');

        $corbeilleTeacher->execute([
            'identifiant' => $identifiant,
            ]);

        return $corbeilleTeacher;
    }

    public function restoreTeacher($identifiant)
    {
        $db = $this->dbConnect();
        $restoreTeacher = $db->prepare('


            UPDATE `enseignants` 

            SET Corbeille = NULL 

            WHERE enseignants.identifiant = :identifiant;


        ');

        $restoreTeacher->execute([
            'identifiant' => $identifiant,
            ]);

        return $restoreTeacher;
    }

    public function countTeacher()
    {
        $db = $this->dbConnect();
        $countTeachers = $db->prepare('
            SELECT e.emploi emploi,count(*) 
            FROM enseignants e
            WHERE e.actif = 2 AND e.corbeille is NULL
            GROUP BY e.emploi
            ');
        $countTeachers->execute([
            ]);

        return $countTeachers;
    }
}

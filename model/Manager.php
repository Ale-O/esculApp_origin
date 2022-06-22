<?php

namespace mgmtHU\Model;

use PDO;

class Manager
{




        public function selectTeacherManager()
    {
        $selectTeacherManager = '
            SELECT e.identifiant identifiant, e.nom nom, e.prenom prenom, e.nom_jeune_fille nom_jeune_fille, srem.statut statut_surnombre_emeritat, srem.identifiant identifiant_surnombre_emeritat, ad.etat etat_absence_depart_arrivee, ad.identifiant identifiant_absence_depart_arrivee, e.commentaire commentaire, afs.support support_affectation, afs.identifiant identifiant_affectation, supp.numero_formate numero_support, supp.identifiant identifiant_support, c.libelle libelle_cnu, c.identifiant identifiant_cnu, c.code code_cnu, em.intitule intitule_emploi, em.identifiant identifiant_emploi, se.intitule intitule_sous_emploi, se.identifiant identifiant_sous_emploi, n.next financement_next, n.identifiant identifiant_next, l.etat etat_liste_de_diffusion, l.identifiant identifiant_liste_de_diffusion, e.courriel_univ courriel_univ, e.courriel_chu courriel_chu, e.courriel_autre courriel_autre, e.grade etat_grade, e.ouverture_droits_retraite ouverture_droits_retraite, e.age_limite age_limite, e.date_limite_age date_limite_age, e.enfant_vivant_a_50ans enfant_vivant_a_50ans, e.date_previsionnelle date_previsionnelle, e.depart_effectif_ou_souhaite depart_effectif_ou_souhaite, e.option_remarque_retraite option_remarque_retraite, d.intitule intitule_dphu, d.identifiant identifiant_dphu, ap.intitule intitule_affectation_pedagogique, ap.identifiant identifiant_affectation_pedagogique, nc.identifiant nom_chu, nc.service affectation_hospitaliere, la.code code_laboratoire, la.identifiant identifiant_laboratoire, th.etat etat_trajectoire_hu, th.identifiant identifiant_trajectoire_hu, ec.intitule intitule_emploi_cible, ec.identifiant identifiant_emploi_cible, ac.annee annee_annee_civile, ac.identifiant identifiant_annee_civile, suc.numero_formate numero_formate_succession, suc.identifiant identifiant_succession, ceh.annee_civile annee_civile_commission_hu, ceh.identifiant identifiant_commission_hu, acc.annee annee_civile_commission_hu2, ex.etat etat_experience, ex.identifiant identifiant_experience, m.etat etat_mobilite, m.identifiant identifiant_mobilite, h.etat etat_hdr, h.identifiant identifiant_hdr, pr.etat etat_precnu, pr.identifiant identifiant_precnu, e.commentaire_trajectoire_hu commentaire_trajectoire_hu, e.date_dernier_changement date_dernier_changement, ee.etat etat_eligible_election, ee.identifiant identifiant_eligible_election, a.etat etat_actif, a.identifiant identifiant_actif, im.identifiant identifiant_mangue, im.date_de_naissance date_de_naissance, DATE_FORMAT(im.date_de_naissance, \'%d/%m/%Y \') date_de_naissance2, e.corbeille etatCorbeille, e.telephone telephone, e.fin_enseignant fin_enseignant, e.debut_grade debut_grade, DATE_FORMAT(e.debut_grade, \'%d/%m/%Y \') debut_grade2, DATE_FORMAT(e.fin_enseignant, \'%d/%m/%Y \') fin_enseignant2, DATE_FORMAT(e.date_dernier_changement, \'%d/%m/%Y \') date_dernier_changement2
            FROM enseignants e
            LEFT JOIN surnombre_emeritat srem
            ON e.surnombre_emeritat = srem.identifiant
            LEFT JOIN absence_depart_arrivee ad
            ON e.absence_depart_arrivee = ad.identifiant
            LEFT JOIN affectation_support afs
            ON e.affectation_support = afs.identifiant
            LEFT JOIN support supp
            ON afs.support = supp.identifiant
            LEFT JOIN cnu c
            ON e.cnu = c.identifiant
            LEFT JOIN emploi em
            ON e.emploi = em.identifiant
            LEFT JOIN sous_emploi se
            ON e.sous_emploi = se.identifiant
            LEFT JOIN next n
            ON e.next = n.identifiant
            LEFT JOIN liste_diffusion l
            ON e.liste_de_diffusion = l.identifiant
            LEFT JOIN dphu d
            ON e.dphu = d.identifiant
            LEFT JOIN affectation_pedagogique ap
            ON e.affectation_pedagogique = ap.identifiant
            LEFT JOIN nom_chu nc
            ON e.nom_chu = nc.identifiant
            LEFT JOIN laboratoire la
            ON e.laboratoire = la.identifiant
            LEFT JOIN trajectoire_hu th
            ON e.trajectoire_hu = th.identifiant
            LEFT JOIN emploi ec
            ON e.emploi_cible = ec.identifiant
            LEFT JOIN annee_civile ac
            ON e.annee_civile = ac.identifiant

            LEFT JOIN support suc
            ON e.succession = suc.identifiant


            LEFT JOIN commission_hu ceh
            ON e.commission_evaluation_hu = ceh.identifiant
            LEFT JOIN annee_civile acc
            ON ceh.annee_civile = acc.identifiant
            
            LEFT JOIN experience ex
            ON e.experience = ex.identifiant
            LEFT JOIN mobilite m
            ON e.mobilite = m.identifiant
            LEFT JOIN hdr h
            ON e.hdr = h.identifiant
            LEFT JOIN precnu pr
            ON e.precnu = pr.identifiant
            LEFT JOIN eligible_election ee
            ON e.eligible_election = ee.identifiant
            LEFT JOIN actif a
            ON e.actif = a.identifiant
            LEFT JOIN id_mangue im
            ON e.id_mangue = im.identifiant
        ';
        return $selectTeacherManager;
    }


    public function selectAssignManager()
    {
        $selectAssignManager = '
            SELECT a.identifiant identifiant_affectation, s.numero_formate numero_formate_support, s.identifiant identifiant_support, e.nom nom_enseignant, e.prenom prenom_enseignant, e.identifiant identifiant_enseignant, em.intitule emploi_enseignant, sem.intitule sous_emploi_enseignant, em.identifiant emploi_identifiant, sem.identifiant sous_emploi_identifiant, DATE_FORMAT(a.debut, \'%d/%m/%Y \') debut, DATE_FORMAT(a.fin, \'%d/%m/%Y \') fin, a.debut debut2, a.fin fin2, a.renseignements renseignements, a.nouvelle_fin_potentielle nouvelle_fin_potentielle, a.successeur_potentiel successeur_potentiel, ec.nom nom_chef_successeur, ec.identifiant identifiant_chef_successeur, aa.action action_affectation, aa.identifiant identifiant_action_affectation, ac.annee annee_annee_civile, ac.identifiant identifiant_annee_civile, v.etat etat_validation_fiche, v.identifiant identifiant_validation_fiche, a.corbeille etatCorbeille, e.cnu cnu, nc.pole pole, nc.service service, a.hypothese hypothese
            FROM affectation_support a
            LEFT JOIN support s
            ON a.support = s.identifiant
            LEFT JOIN enseignants e
            ON a.enseignant = e.identifiant
            LEFT JOIN enseignants ec
            ON a.chef_successeur = ec.identifiant
            LEFT JOIN action_affectation aa
            ON a.action_affectation = aa.identifiant
            LEFT JOIN annee_civile ac
            ON a.annee_civile_action = ac.identifiant
            LEFT JOIN validation_fiche v
            ON a.validation_fiche = v.identifiant
            LEFT JOIN emploi em
            ON a.emploi = em.identifiant
            LEFT JOIN sous_emploi sem
            ON a.sous_emploi = sem.identifiant
            LEFT JOIN nom_chu nc
            ON e.nom_chu = nc.identifiant
        ';
        return $selectAssignManager;
    }


    public function selectSuiviManager()
    {
        $selectSuiviManager = '
            SELECT s.identifiant identifiant, s.qui qui, s.quand quand, s.quoiTable quoiTable, s.nomEnregistrement nomEnregistrement, s.idEnregistrement idEnregistrement, s.champsEnregistrement champsEnregistrement, s.ancienneValeur ancienneValeur, s.nouvelleValeur nouvelleValeur
            FROM suivi s

        ';
        return $selectSuiviManager;
    }


    public function selectSupportManager()
    {
        $selectSupportManager = '
            SELECT su.identifiant identifiant, su.numero_formate numero_formate, su.nature nature, su.budget budget, su.eotp eotp, su.quotite quotite, su.categorie categorie, su.corbeille etatCorbeille, su.prenom prenom, su.nom nom, su.absence_depart absence_depart_arrivee, su.debut debut, su.fin fin, supp.renseignement renseignement, su.identifiant_enseignant identifiant_enseignant, su.date_blocage date_blocage, su.date_liberation date_liberation
            FROM (


                    SELECT * FROM support supp
                    LEFT JOIN (


                            SELECT afs.support as support, e.prenom as prenom, e.nom as nom, abs.etat as absence_depart, e.date_dernier_changement as debut, e.fin_enseignant as fin, e.identifiant as identifiant_enseignant
                            FROM affectation_support afs
                            LEFT JOIN enseignants e ON afs.enseignant = e.identifiant
                            LEFT JOIN absence_depart_arrivee abs ON e.absence_depart_arrivee = abs.identifiant
                            INNER JOIN (
                                SELECT afs3.support as support3,
                                MAX(afs3.debut) as max_date3
                                FROM affectation_support afs3
                                GROUP BY support3 ) b
                            ON b.support3 = afs.support
                            WHERE b.max_date3 = afs.debut


                            ) afsd ON supp.identifiant = afsd.support




                        ) su

            LEFT JOIN support supp ON su.identifiant = supp.identifiant


        ';
        return $selectSupportManager;
    }



    public function selectSaveSearchManager()
    {
        $selectSaveSearchManager = '
            SELECT ss.identifiant identifiant, ss.qui qui, ss.quand quand, ss.quoiTable quoiTable, ss.nom nom, ss.formule formule
            FROM save_search ss

        ';
        return $selectSaveSearchManager;
    }




    protected function dbConnect()
    {
    try
        {
            $db = new PDO('mysql:host=localhost;dbname=esculapp;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $db;
        }
        catch (Exception $e)
        {
                throw new Exception('Aucune base de donnée trouvée');
        }
    }



    public function selectEventsManager()
    {
        $selectEventsManager = '
            SELECT ev.identifiant identifiant, ev.nom nom, t.identifiant identifiant_type, t.intitule type, ev.contenu contenu, DATE_FORMAT(ev.debut, \'%d/%m/%Y \') debut, DATE_FORMAT(ev.fin, \'%d/%m/%Y \') fin,  ev.debut debut2, ev.fin fin2, e.identifiant identifiant_enseignant, e.nom enseignant, e.prenom prenom_enseignant, ev.corbeille etatCorbeille
            FROM evenement ev
            LEFT JOIN enseignants e
            ON ev.enseignant = e.identifiant
            LEFT JOIN type_evenement t
            ON ev.type_evenement = t.identifiant
        ';
        return $selectEventsManager;
    }



    public function selectEventsSpeManager($typeEvent)
    {
        

        switch ($typeEvent)
        {
            case 'Taches' :
                $selectEventsSpeManager = '
                    SELECT ev.identifiant identifiant, ev.nom nom, t.identifiant identifiant_type, t.intitule type, ev.contenu contenu, DATE_FORMAT(ev.debut, \'%d/%m/%Y \') debut, DATE_FORMAT(ev.fin, \'%d/%m/%Y \') fin,  ev.debut debut2, ev.fin fin2, e.identifiant identifiant_enseignant, e.nom enseignant, e.prenom prenom_enseignant, ev.corbeille etatCorbeille, th.identifiant identifiant_thematiqueTaches, th.intitule intitule_thematiqueTaches, supp.identifiant identifiant_support
                    FROM evenement_taches ev
                    LEFT JOIN enseignants e
                    ON ev.enseignant = e.identifiant
                    LEFT JOIN type_evenement_spe t
                    ON ev.type_evenement = t.identifiant
                    LEFT JOIN thematique_taches th
                    ON ev.thematique = th.identifiant

                    LEFT JOIN affectation_support afs
                    ON e.affectation_support = afs.identifiant
                    LEFT JOIN support supp
                    ON afs.support = supp.identifiant
                ';

            break;


            case 'Revision_effectifs' :
                $selectEventsSpeManager = '
                    SELECT ev.identifiant identifiant, ev.nom nom, t.identifiant identifiant_type, t.intitule type, ev.contenu contenu, DATE_FORMAT(ev.debut, \'%d/%m/%Y \') debut, DATE_FORMAT(ev.fin, \'%d/%m/%Y \') fin,  ev.debut debut2, ev.fin fin2, e.identifiant identifiant_enseignant, e.nom enseignant, e.prenom prenom_enseignant, ev.corbeille etatCorbeille, em.identifiant identifiant_emploi_cible, em.intitule intitule_emploi_cible, DATE_FORMAT(ev.fin, \'%Y \') fin_annee, su.identifiant identifiant_support_cible, su.numero_formate numero_formate_support_cible, ac.annee annee_civile_commission_hu, ex.etat etat_experience, mo.etat etat_mobilite, hd.etat etat_hdr, pc.etat etat_precnu, e.commentaire_trajectoire_hu commentaire_trajectoire_hu, supp.identifiant identifiant_support, DATE_FORMAT((ADDDATE(ev.fin, INTERVAL 1 YEAR)), \'%d/%m/%Y \') fin3
                    FROM evenement_revision_effectifs ev
                    LEFT JOIN enseignants e
                    ON ev.enseignant = e.identifiant
                    LEFT JOIN affectation_support afs
                    ON e.affectation_support = afs.identifiant
                    LEFT JOIN support supp
                    ON afs.support = supp.identifiant
                    LEFT JOIN type_evenement_spe t
                    ON ev.type_evenement = t.identifiant
                    LEFT JOIN emploi em
                    ON ev.emploi_cible = em.identifiant
                    LEFT JOIN support su
                    ON ev.support_cible = su.identifiant
                    LEFT JOIN commission_hu com
                    ON e.commission_evaluation_hu = com.identifiant
                    LEFT JOIN annee_civile ac
                    ON com.annee_civile = ac.identifiant
                    LEFT JOIN experience ex
                    ON e.experience = ex.identifiant
                    LEFT JOIN mobilite mo
                    ON e.mobilite = mo.identifiant
                    LEFT JOIN hdr hd
                    ON e.hdr = hd.identifiant
                    LEFT JOIN precnu pc
                    ON e.precnu = pc.identifiant


                ';

            break;


            case 'Absence_departs' :
                $selectEventsSpeManager = '
                    SELECT ev.identifiant identifiant, ev.nom nom, t.identifiant identifiant_type, t.intitule type, ev.contenu contenu, DATE_FORMAT(ev.debut, \'%d/%m/%Y \') debut, DATE_FORMAT(ev.fin, \'%d/%m/%Y \') fin,  ev.debut debut2, ev.fin fin2, e.identifiant identifiant_enseignant, e.nom enseignant, e.prenom prenom_enseignant, e.emploi emploi_enseignant, ev.corbeille etatCorbeille, ad.identifiant identifiant_absence_depart_arrivee, ad.etat etat_absence_depart_arrivee, supp.identifiant identifiant_support, supp.numero_formate numero_formate_support
                    FROM evenement_absence_departs ev
                    LEFT JOIN enseignants e
                    ON ev.enseignant = e.identifiant

                    LEFT JOIN affectation_support afs
                    ON e.affectation_support = afs.identifiant
                    LEFT JOIN support supp
                    ON afs.support = supp.identifiant

                    LEFT JOIN type_evenement_spe t
                    ON ev.type_evenement = t.identifiant
                    LEFT JOIN absence_depart_arrivee ad
                    ON ev.absence_depart_arrivee = ad.identifiant
                ';

            break;


            case 'Avancements' :
                $selectEventsSpeManager = '
                    SELECT ev.identifiant identifiant, ev.nom nom, t.identifiant identifiant_type, t.intitule type, ev.contenu contenu, DATE_FORMAT(ev.debut, \'%d/%m/%Y \') debut, DATE_FORMAT(ev.fin, \'%d/%m/%Y \') fin,  ev.debut debut2, ev.fin fin2, e.identifiant identifiant_enseignant, e.nom enseignant, e.prenom prenom_enseignant, ev.corbeille etatCorbeille, aa.identifiant identifiant_avis_avancement, aa.intitule intitule_avis_avancement, ev.grade_cible etat_grade_cible, supp.identifiant identifiant_support
                    FROM evenement_avancements ev
                    LEFT JOIN enseignants e
                    ON ev.enseignant = e.identifiant
                    LEFT JOIN type_evenement_spe t
                    ON ev.type_evenement = t.identifiant
                    LEFT JOIN avis_avancement aa
                    ON ev.avis = aa.identifiant

                    LEFT JOIN affectation_support afs
                    ON e.affectation_support = afs.identifiant
                    LEFT JOIN support supp
                    ON afs.support = supp.identifiant
                ';

            break;


            case 'Primes_hr' :
                $selectEventsSpeManager = '
                    SELECT ev.identifiant identifiant, ev.nom nom, t.identifiant identifiant_type, t.intitule type, ev.contenu contenu, DATE_FORMAT(ev.debut, \'%d/%m/%Y \') debut, DATE_FORMAT(ev.fin, \'%d/%m/%Y \') fin,  ev.debut debut2, ev.fin fin2, e.identifiant identifiant_enseignant, e.nom enseignant, e.prenom prenom_enseignant, ev.corbeille etatCorbeille, np.identifiant identifiant_nature_primes_hr, np.intitule intitule_nature_primes_hr, ev.montant montant, ev.heures heures, e.id_mangue id_mangue, em.intitule emploi, supp.identifiant identifiant_support
                    FROM evenement_primes_hr ev
                    LEFT JOIN enseignants e
                    ON ev.enseignant = e.identifiant
                    LEFT JOIN type_evenement_spe t
                    ON ev.type_evenement = t.identifiant
                    LEFT JOIN nature_primes_hr np
                    ON ev.nature = np.identifiant
                    LEFT JOIN emploi em
                    ON e.emploi = em.identifiant

                    LEFT JOIN affectation_support afs
                    ON e.affectation_support = afs.identifiant
                    LEFT JOIN support supp
                    ON afs.support = supp.identifiant
                ';

            break;


            default:
                throw new Exception('Aucune close select sql trouvé');
        }



        return $selectEventsSpeManager;





    }






  
    
}
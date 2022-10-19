<?php

require_once 'model/Manager.php';

class eventsSpeManager extends mgmtHU\Model\Manager
{
    public function getAllEventsSpe($typeEvent, $corbeille)
    {
        $select = $this->selectEventsSpeManager($typeEvent);
        $etatCorbeille = ($corbeille == 'corbeille') ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $db = $this->dbConnect();
        $allEventsSpe = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.'
            ORDER BY debut2
        ');
        $allEventsSpe->execute([
        ]);

        return $allEventsSpe;
    }

    public function getEventsSpe($typeEvent, $corbeille, $nom, $type, $contenu, $debut, $fin, $nomEnseignant, $prenomEnseignant, $parametre1, $parametre2, $parametre3)
    {
        $select = $this->selectEventsSpeManager($typeEvent);
        $etatCorbeille = ($corbeille == 'corbeille') ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $nom_vide = ($nom == '') ? 'OR ev.nom != \'\' OR ev.nom is NULL' : '';
        $type_vide = ($type == '') ? 'OR t.intitule != \'\' OR t.intitule is NULL' : '';
        $contenu_vide = ($contenu == '') ? 'OR ev.contenu != \'\' OR ev.contenu is NULL' : '';
        $debut_vide = ($debut == '') ? 'OR ev.debut != \'\' OR ev.debut is NULL' : '';
        $fin_vide = ($fin == '') ? 'OR ev.fin != \'\' OR ev.fin is NULL' : '';
        $enseignant_vide = ($nomEnseignant == '') ? 'OR e.nom != \'\' OR e.nom is NULL' : '';
        $prenom_enseignant_vide = ($prenomEnseignant == '') ? 'OR e.prenom != \'\' OR e.prenom is NULL' : '';

        switch ($typeEvent) {
                case 'Taches':

                    $thematiqueTaches_vide = ($parametre1 == '') ? 'OR th.intitule != \'\' OR th.intitule is NULL' : '';

                break;

                case 'Revision_effectifs':

                    $emploi_cible_vide = ($parametre1 == '') ? 'OR em.intitule != \'\' OR em.intitule is NULL' : '';

                    $support_cible_vide = ($parametre2 == '') ? 'OR su.numero_formate != \'\' OR su.numero_formate is NULL' : '';

                break;

                case 'Absence_departs':

                    $absence_depart_arrivee_vide = ($parametre1 == '') ? 'OR ad.etat != \'\' OR ad.etat is NULL' : '';

                break;

                case 'Avancements':

                    $avis_avancement_vide = ($parametre1 == '') ? 'OR aa.intitule != \'\' OR aa.intitule is NULL' : '';

                    $grade_cible_vide = ($parametre2 == '') ? 'OR ev.grade_cible != \'\' OR ev.grade_cible is NULL' : '';

                break;

                case 'Primes_hr':

                    $nature_primes_hr_vide = ($parametre1 == '') ? 'OR np.intitule != \'\' OR np.intitule is NULL' : '';

                    $montant_vide = ($parametre2 == '') ? 'OR ev.montant != \'\' OR ev.montant is NULL' : '';
                    $heures_vide = ($parametre3 == '') ? 'OR ev.heures != \'\' OR ev.heures is NULL' : '';

                break;

                default:
                    throw new Exception('Aucun typeEvent trouvé pour filtre list');
            }

        switch ($typeEvent) {
            case 'Taches':

                $whereEventsSpeManager = '
                    (ev.nom LIKE :nom '.$nom_vide.') AND (t.intitule LIKE :type '.$type_vide.') AND (ev.contenu LIKE :contenu '.$contenu_vide.') AND (ev.debut >= :debut '.$debut_vide.') AND (ev.fin <= :fin '.$fin_vide.') AND (e.nom LIKE :enseignant '.$enseignant_vide.') AND (e.prenom LIKE :prenomEnseignant '.$prenom_enseignant_vide.')

                    AND (th.intitule LIKE :thematique '.$thematiqueTaches_vide.')

                ';

            break;

            case 'Revision_effectifs':

                $whereEventsSpeManager = '
                    (ev.nom LIKE :nom '.$nom_vide.') AND (t.intitule LIKE :type '.$type_vide.') AND (ev.contenu LIKE :contenu '.$contenu_vide.') AND (ev.debut >= :debut '.$debut_vide.') AND (ev.fin <= :fin '.$fin_vide.') AND (e.nom LIKE :enseignant '.$enseignant_vide.') AND (e.prenom LIKE :prenomEnseignant '.$prenom_enseignant_vide.')

                    AND (em.intitule LIKE :emploi_cible '.$emploi_cible_vide.')

                    AND (su.numero_formate LIKE :support_cible '.$support_cible_vide.')

                ';

            break;

            case 'Absence_departs':

                $whereEventsSpeManager = '
                    (ev.nom LIKE :nom '.$nom_vide.') AND (t.intitule LIKE :type '.$type_vide.') AND (ev.contenu LIKE :contenu '.$contenu_vide.') AND (ev.debut >= :debut '.$debut_vide.') AND (ev.fin <= :fin '.$fin_vide.') AND (e.nom LIKE :enseignant '.$enseignant_vide.') AND (e.prenom LIKE :prenomEnseignant '.$prenom_enseignant_vide.')


                    AND (ad.etat LIKE :absence_depart_arrivee '.$absence_depart_arrivee_vide.')

                ';

            break;

            case 'Avancements':

                $whereEventsSpeManager = '
                    (ev.nom LIKE :nom '.$nom_vide.') AND (t.intitule LIKE :type '.$type_vide.') AND (ev.contenu LIKE :contenu '.$contenu_vide.') AND (ev.debut >= :debut '.$debut_vide.') AND (ev.fin <= :fin '.$fin_vide.') AND (e.nom LIKE :enseignant '.$enseignant_vide.') AND (e.prenom LIKE :prenomEnseignant '.$prenom_enseignant_vide.')


                    AND (aa.intitule LIKE :avis_avancement '.$avis_avancement_vide.')

                    AND (ev.grade_cible LIKE :grade_cible '.$grade_cible_vide.')

                ';

            break;

            case 'Primes_hr':

                $whereEventsSpeManager = '
                    (ev.nom LIKE :nom '.$nom_vide.') AND (t.intitule LIKE :type '.$type_vide.') AND (ev.contenu LIKE :contenu '.$contenu_vide.') AND (ev.debut >= :debut '.$debut_vide.') AND (ev.fin <= :fin '.$fin_vide.') AND (e.nom LIKE :enseignant '.$enseignant_vide.') AND (e.prenom LIKE :prenomEnseignant '.$prenom_enseignant_vide.')


                    AND (np.intitule LIKE :nature_primes_hr '.$nature_primes_hr_vide.')

                    AND (ev.montant >= :montant '.$montant_vide.')
                    AND (ev.heures >= :heures '.$heures_vide.')


                ';

            break;

            default:
                throw new Exception('Aucune close where sql trouvé');
        }

        $db = $this->dbConnect();
        $allEventsSpe = $db->prepare('
            '.$select.'

            WHERE '.$whereEventsSpeManager.' AND '.$etatCorbeille.'
            ORDER BY debut2

        ');

        switch ($typeEvent) {
            case 'Taches':

                $allEventsSpe->execute([
                    'nom' => '%'.$nom.'%',
                    'type' => '%'.$type.'%',
                    'contenu' => '%'.$contenu.'%',
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => '%'.$nomEnseignant.'%',
                    'prenomEnseignant' => '%'.$prenomEnseignant.'%',

                    'thematique' => $parametre1,
                    ]);

            break;

            case 'Revision_effectifs':

                $allEventsSpe->execute([
                    'nom' => '%'.$nom.'%',
                    'type' => '%'.$type.'%',
                    'contenu' => '%'.$contenu.'%',
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => '%'.$nomEnseignant.'%',
                    'prenomEnseignant' => '%'.$prenomEnseignant.'%',

                    'emploi_cible' => $parametre1,

                    'support_cible' => $parametre2,
                    ]);

            break;

            case 'Absence_departs':

                $allEventsSpe->execute([
                    'nom' => '%'.$nom.'%',
                    'type' => '%'.$type.'%',
                    'contenu' => '%'.$contenu.'%',
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => '%'.$nomEnseignant.'%',
                    'prenomEnseignant' => '%'.$prenomEnseignant.'%',

                    'absence_depart_arrivee' => $parametre1,
                    ]);

            break;

            case 'Avancements':

                $allEventsSpe->execute([
                    'nom' => '%'.$nom.'%',
                    'type' => '%'.$type.'%',
                    'contenu' => '%'.$contenu.'%',
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => '%'.$nomEnseignant.'%',
                    'prenomEnseignant' => '%'.$prenomEnseignant.'%',

                    'avis_avancement' => $parametre1,

                    'grade_cible' => $parametre2,
                    ]);

            break;

            case 'Primes_hr':

                $allEventsSpe->execute([
                    'nom' => '%'.$nom.'%',
                    'type' => '%'.$type.'%',
                    'contenu' => '%'.$contenu.'%',
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => '%'.$nomEnseignant.'%',
                    'prenomEnseignant' => '%'.$prenomEnseignant.'%',

                    'nature_primes_hr' => $parametre1,

                    'montant' => $parametre2,
                    'heures' => $parametre3,
                    ]);

            break;

            default:
                throw new Exception('Aucune close where sql trouvé');
        }

        return $allEventsSpe;
    }

    public function getEventsSpeById($typeEvent, $identifiant)
    {
        $select = $this->selectEventsSpeManager($typeEvent);

        $db = $this->dbConnect();
        $eventSpe = $db->prepare('
            '.$select.'
            WHERE ev.identifiant = :identifiant
        ');

        $eventSpe->execute([
            'identifiant' => $identifiant,
            ]);

        return $eventSpe;
    }

    public function getEventsSpeRevByLastDateFin($typeEvent, $corbeille, $identifiant_enseignant)
    {
        $today = date('Y-m-d');

        $select = $this->selectEventsSpeManager($typeEvent);

        $etatCorbeille = ($corbeille == 'corbeille') ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $db = $this->dbConnect();
        $eventSpe = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND e.identifiant = :identifiant_enseignant AND ev.debut <= :today
            ORDER BY fin
        ');

        $eventSpe->execute([
            'identifiant_enseignant' => $identifiant_enseignant,
            'today' => $today,
            ]);

        return $eventSpe;
    }

    public function getEventsSpeAbsByLastDateFin($typeEvent, $corbeille, $identifiant_enseignant)
    {
        $today = date('Y-m-d');

        $select = $this->selectEventsSpeManager($typeEvent);

        $etatCorbeille = ($corbeille == 'corbeille') ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $db = $this->dbConnect();
        $eventSpe = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND e.identifiant = :identifiant_enseignant AND ((ev.fin >= :today) OR (ev.fin is NULL)) AND (t.identifiant = 9 OR t.identifiant = 10)
            ORDER BY ev.debut
        ');

        $eventSpe->execute([
            'identifiant_enseignant' => $identifiant_enseignant,
            'today' => $today,
            ]);

        return $eventSpe;
    }

    public function getEventsSpeAbsByDates($typeEvent, $corbeille, $debut)
    {
        $select = $this->selectEventsSpeManager($typeEvent);

        $etatCorbeille = ($corbeille == 'corbeille') ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $debut_vide = ($debut == '') ? 'OR ev.debut != \'\' OR ev.debut is NULL' : '';

        $db = $this->dbConnect();

        $eventSpe = $db->prepare('
            '.$select.'
            INNER JOIN (
                SELECT ev2.identifiant as identifiant2,
                max(ev2.debut) as debut22
                FROM evenement_absence_departs ev2
                GROUP BY identifiant2
            ) a
            ON a.identifiant2 = ev.identifiant

            WHERE '.$etatCorbeille.' AND ((ev.fin >= :debut '.$debut_vide.') OR (ev.fin is NULL)) 

                AND (ad.identifiant = 5 
                OR ad.identifiant = 6
                OR ad.identifiant = 26
                OR ad.identifiant = 25
                OR ad.identifiant = 8
                OR ad.identifiant = 7
                OR ad.identifiant = 2
                OR ad.identifiant = 1
                OR ad.identifiant = 27
                OR ad.identifiant = 28
                OR ad.identifiant = 29
                OR ad.identifiant = 30
                OR ad.identifiant = 31
                OR ad.identifiant = 32
                OR ad.identifiant = 33
                OR ad.identifiant = 34
                OR ad.identifiant = 37
                OR ad.identifiant = 38
                OR ad.identifiant = 48
                OR ad.identifiant = 49
                OR ad.identifiant = 50
                )
            
            ORDER BY fin
        ');

        $eventSpe->execute([
            'debut' => $debut,
            // 'fin'=> $fin->format('Y-m-d H:i:s'),
            ]);

        return $eventSpe;
    }

    public function getEventsSpeRevLiberationSupport($typeEvent, $corbeille, $debut)
    {
        $select = $this->selectEventsSpeManager($typeEvent);

        $etatCorbeille = ($corbeille == 'corbeille') ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $debut_vide = ($debut == '') ? 'OR ev.debut != \'\' OR ev.debut is NULL' : '';

        $db = $this->dbConnect();

        $eventSpe = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.' AND (e.emploi = 2 OR e.emploi = 15 OR e.emploi = 6 OR e.emploi = 4) AND ADDDATE(ev.fin, INTERVAL 1 YEAR) >= :debut
        ');

        $eventSpe->execute([
            'debut' => $debut,
            ]);

        return $eventSpe;
    }

    public function getCountEventsAjax()
    {
        $db = $this->dbConnect();

        $eventSpe = $db->prepare('

            SELECT count(*) 
            FROM evenement_taches ev 
            WHERE ev.corbeille is NULL AND year(ev.debut)= year(now()) 
            GROUP BY month(ev.debut)

        ');

        $eventSpe->execute([
            ]);

        return $eventSpe;
    }

    public function createEventSpe($typeEvent, $nom, $type, $contenu, $debut, $fin, $enseignant, $parametre1, $parametre2, $parametre3)
    {
        switch ($typeEvent) {
            case 'Taches':

                $db = $this->dbConnect();
                $newEventSpe = $db->prepare('INSERT INTO evenement_taches (identifiant, nom, type_evenement, contenu, debut, fin, enseignant, thematique) 

                VALUES (NULL, :nom, :type_evenement, :contenu, :debut, :fin, :enseignant, :thematique);');

                $newEventSpe->execute([
                    'nom' => $nom,
                    'type_evenement' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'thematique' => $parametre1,
                    ]);

            break;

            case 'Revision_effectifs':

                $db = $this->dbConnect();
                $newEventSpe = $db->prepare('INSERT INTO evenement_revision_effectifs (identifiant, nom, type_evenement, contenu, debut, fin, enseignant, emploi_cible, support_cible) 

                VALUES (NULL, :nom, :type_evenement, :contenu, :debut, :fin, :enseignant, :emploi_cible, :support_cible);');

                $newEventSpe->execute([
                    'nom' => $nom,
                    'type_evenement' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'emploi_cible' => $parametre1,

                    'support_cible' => $parametre2,
                    ]);

            break;

            case 'Absence_departs':

                $db = $this->dbConnect();
                $newEventSpe = $db->prepare('INSERT INTO evenement_absence_departs (identifiant, nom, type_evenement, contenu, debut, fin, enseignant, absence_depart_arrivee) 

                VALUES (NULL, :nom, :type_evenement, :contenu, :debut, :fin, :enseignant, :absence_depart_arrivee);');

                $newEventSpe->execute([
                    'nom' => $nom,
                    'type_evenement' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'absence_depart_arrivee' => $parametre1,
                    ]);

            break;

            case 'Avancements':

                $db = $this->dbConnect();
                $newEventSpe = $db->prepare('INSERT INTO evenement_avancements (identifiant, nom, type_evenement, contenu, debut, fin, enseignant, avis, grade_cible) 

                VALUES (NULL, :nom, :type_evenement, :contenu, :debut, :fin, :enseignant, :avis_avancement, :grade_cible);');

                $newEventSpe->execute([
                    'nom' => $nom,
                    'type_evenement' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'avis_avancement' => $parametre1,

                    'grade_cible' => $parametre2,
                    ]);

            break;

            case 'Primes_hr':

                $db = $this->dbConnect();
                $newEventSpe = $db->prepare('INSERT INTO evenement_primes_hr (identifiant, nom, type_evenement, contenu, debut, fin, enseignant, nature, montant, heures) 

                VALUES (NULL, :nom, :type_evenement, :contenu, :debut, :fin, :enseignant, :nature_primes_hr, :montant, :heures);');

                $newEventSpe->execute([
                    'nom' => $nom,
                    'type_evenement' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'nature_primes_hr' => $parametre1,

                    'montant' => $parametre2,
                    'heures' => $parametre3,
                    ]);

            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour création');
        }

        return $newEventSpe;
    }

    public function modifEventSpe($typeEvent, $identifiant, $nom, $type, $contenu, $debut, $fin, $enseignant, $parametre1, $parametre2, $parametre3)
    {
        switch ($typeEvent) {
            case 'Taches':

                $db = $this->dbConnect();
                $modifEventSpe = $db->prepare('


                    UPDATE `evenement_taches` 

                    SET 

                    nom = :nom,
                    type_evenement = :type,
                    contenu = :contenu,
                    fin = :fin,
                    debut = :debut,
                    enseignant = :enseignant,

                    thematique = :thematique


                    WHERE evenement_taches.identifiant = :identifiant;


                ');

                $modifEventSpe->execute([
                    'identifiant' => $identifiant,
                    'nom' => $nom,
                    'type' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'thematique' => $parametre1,
                    ]);

            break;

            case 'Revision_effectifs':

                $db = $this->dbConnect();
                $modifEventSpe = $db->prepare('


                    UPDATE `evenement_revision_effectifs` 

                    SET 

                    nom = :nom,
                    type_evenement = :type,
                    contenu = :contenu,
                    fin = :fin,
                    debut = :debut,
                    enseignant = :enseignant,

                    emploi_cible = :emploi_cible,

                    support_cible = :support_cible


                    WHERE evenement_revision_effectifs.identifiant = :identifiant;


                ');

                $modifEventSpe->execute([
                    'identifiant' => $identifiant,
                    'nom' => $nom,
                    'type' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'emploi_cible' => $parametre1,

                    'support_cible' => $parametre2,
                    ]);

            break;

            case 'Absence_departs':

                $db = $this->dbConnect();
                $modifEventSpe = $db->prepare('


                    UPDATE `evenement_absence_departs` 

                    SET 

                    nom = :nom,
                    type_evenement = :type,
                    contenu = :contenu,
                    fin = :fin,
                    debut = :debut,
                    enseignant = :enseignant,

                    absence_depart_arrivee = :absence_depart_arrivee


                    WHERE evenement_absence_departs.identifiant = :identifiant;


                ');

                $modifEventSpe->execute([
                    'identifiant' => $identifiant,
                    'nom' => $nom,
                    'type' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'absence_depart_arrivee' => $parametre1,
                    ]);

            break;

            case 'Avancements':

                $db = $this->dbConnect();
                $modifEventSpe = $db->prepare('


                    UPDATE `evenement_avancements` 

                    SET 

                    nom = :nom,
                    type_evenement = :type,
                    contenu = :contenu,
                    fin = :fin,
                    debut = :debut,
                    enseignant = :enseignant,

                    avis = :avis_avancement,

                    grade_cible = :grade_cible


                    WHERE evenement_avancements.identifiant = :identifiant;


                ');

                $modifEventSpe->execute([
                    'identifiant' => $identifiant,
                    'nom' => $nom,
                    'type' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'avis_avancement' => $parametre1,

                    'grade_cible' => $parametre2,
                    ]);

            break;

            case 'Primes_hr':

                $db = $this->dbConnect();
                $modifEventSpe = $db->prepare('


                    UPDATE `evenement_primes_hr` 

                    SET 

                    nom = :nom,
                    type_evenement = :type,
                    contenu = :contenu,
                    fin = :fin,
                    debut = :debut,
                    enseignant = :enseignant,

                    nature = :nature_primes_hr,

                    montant = :montant,
                    heures = :heures


                    WHERE evenement_primes_hr.identifiant = :identifiant;


                ');

                $modifEventSpe->execute([
                    'identifiant' => $identifiant,
                    'nom' => $nom,
                    'type' => $type,
                    'contenu' => $contenu,
                    'debut' => $debut,
                    'fin' => $fin,
                    'enseignant' => $enseignant,

                    'nature_primes_hr' => $parametre1,

                    'montant' => $parametre2,
                    'heures' => $parametre3,
                    ]);

            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour modification');
        }

        return $modifEventSpe;
    }

    public function corbeilleEventSpe($typeEvent, $identifiant)
    {
        switch ($typeEvent) {
            case 'Taches':

                $db = $this->dbConnect();
                $corbeilleEventSpe = $db->prepare('


                    UPDATE `evenement_taches` 

                    SET Corbeille = "oui" 

                    WHERE evenement_taches.identifiant = :identifiant;


                ');

                $corbeilleEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            case 'Revision_effectifs':

                $db = $this->dbConnect();
                $corbeilleEventSpe = $db->prepare('


                    UPDATE `evenement_revision_effectifs` 

                    SET Corbeille = "oui" 

                    WHERE evenement_revision_effectifs.identifiant = :identifiant;


                ');

                $corbeilleEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            case 'Absence_departs':

                $db = $this->dbConnect();
                $corbeilleEventSpe = $db->prepare('


                    UPDATE `evenement_absence_departs` 

                    SET Corbeille = "oui" 

                    WHERE evenement_absence_departs.identifiant = :identifiant;


                ');

                $corbeilleEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            case 'Avancements':

                $db = $this->dbConnect();
                $corbeilleEventSpe = $db->prepare('


                    UPDATE `evenement_avancements` 

                    SET Corbeille = "oui" 

                    WHERE evenement_avancements.identifiant = :identifiant;


                ');

                $corbeilleEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            case 'Primes_hr':

                $db = $this->dbConnect();
                $corbeilleEventSpe = $db->prepare('


                    UPDATE `evenement_primes_hr` 

                    SET Corbeille = "oui" 

                    WHERE evenement_primes_hr.identifiant = :identifiant;


                ');

                $corbeilleEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour corbeille');
        }

        return $corbeilleEventSpe;
    }

    public function restoreEventSpe($typeEvent, $identifiant)
    {
        switch ($typeEvent) {
            case 'Taches':

                $db = $this->dbConnect();
                $restoreEventSpe = $db->prepare('


                    UPDATE `evenement_taches` 

                    SET Corbeille = NULL 

                    WHERE evenement_taches.identifiant = :identifiant;


                ');

                $restoreEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            case 'Revision_effectifs':

                $db = $this->dbConnect();
                $restoreEventSpe = $db->prepare('


                    UPDATE `evenement_revision_effectifs` 

                    SET Corbeille = NULL 

                    WHERE evenement_revision_effectifs.identifiant = :identifiant;


                ');

                $restoreEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            case 'Absence_departs':

                $db = $this->dbConnect();
                $restoreEventSpe = $db->prepare('


                    UPDATE `evenement_absence_departs` 

                    SET Corbeille = NULL 

                    WHERE evenement_absence_departs.identifiant = :identifiant;


                ');

                $restoreEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            case 'Avancements':

                $db = $this->dbConnect();
                $restoreEventSpe = $db->prepare('


                    UPDATE `evenement_avancements` 

                    SET Corbeille = NULL 

                    WHERE evenement_avancements.identifiant = :identifiant;


                ');

                $restoreEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            case 'Primes_hr':

                $db = $this->dbConnect();
                $restoreEventSpe = $db->prepare('


                    UPDATE `evenement_primes_hr` 

                    SET Corbeille = NULL 

                    WHERE evenement_primes_hr.identifiant = :identifiant;


                ');

                $restoreEventSpe->execute([
                    'identifiant' => $identifiant,
                    ]);

            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour restore');
        }

        return $restoreEventSpe;
    }
}

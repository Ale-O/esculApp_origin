<?php ob_start(); ?>

   
    <?php 

        $eventsSpeManager = new eventsSpeManager();
        $req = $eventsSpeManager->getEventsSpeById($typeEvent,$identifiant);
        
        $data = $req->fetch();

        $nom = $data['nom'];
        $contenu = $data['contenu'];
        $intitule_type = $data['type'];
        $identifiant_type = $data['identifiant_type'];
        $debut = $data['debut2'];
        $fin = $data['fin2'];
        $nom_enseignant = $data['enseignant'];
        $identifiant_enseignant = $data['identifiant_enseignant'];


        switch ($typeEvent)
        {
            case 'Taches' :

                $identifiant_thematiqueTaches = $data['identifiant_thematiqueTaches'];
                $intitule_thematiqueTaches = $data['intitule_thematiqueTaches'];

            break;


            case 'Revision_effectifs' :

                $identifiant_emploi_cible = $data['identifiant_emploi_cible'];
                $intitule_emploi_cible = $data['intitule_emploi_cible'];

                $identifiant_support_cible = $data['identifiant_support_cible'];
                $numero_formate_support_cible = $data['numero_formate_support_cible']; 

            break;


            case 'Absence_departs' :

                $identifiant_absence_depart_arrivee = $data['identifiant_absence_depart_arrivee'];
                $etat_absence_depart_arrivee = $data['etat_absence_depart_arrivee'];

            break;


            case 'Avancements' :

                $identifiant_avis_avancement = $data['identifiant_avis_avancement'];
                $intitule_avis_avancement = $data['intitule_avis_avancement'];

                $etat_grade_cible = $data['etat_grade_cible'];

            break;


            case 'Primes_hr' :

                $identifiant_nature_primes_hr = $data['identifiant_nature_primes_hr'];
                $intitule_nature_primes_hr = $data['intitule_nature_primes_hr'];

                $montant = $data['montant'];

                $heures = $data['heures'];


            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour filtre list');
        }








        $req->closeCursor();


        require ("view/fronted/Spe/form/copyEventForm.php");

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>


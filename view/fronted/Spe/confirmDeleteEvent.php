<?php ob_start(); ?>

   
    <?php

    $data = $req->fetch();

    echo

    '<p>
    <a href="index.php?action=deleteEventSpe&typeEvent='.$typeEvent.'&identifiant='.$data['identifiant'].'&nom='.$data['nom'].'&type='.$data['type'].'&contenu='.$data['contenu'].'&enseignant='.$data['identifiant_enseignant'].'" class="btn btn-danger">Supprimer événement</a>
    </p>

        <dt>Nom</dt><dd>'
        .$data['nom'].' </dd>
        <dt>Etat</dt><dd> '
        .$data['type'].' </dd>
        <dt>Contenu</dt><dd> '
        .$data['contenu'].' </dd>
        <dt>Date de début</dt><dd> '
        .$data['debut'].' </dd>
        <dt>Date de fin</dt><dd> '
        .$data['fin'].' </dd>
        <dt>Enseignant</dt><dd> '
        .$data['enseignant'].' </dd>';

        switch ($typeEvent) {
            case 'Taches':
                echo '

                    <dt>Thématique</dt><dd> '
                    .$data['intitule_thematiqueTaches'].' </dd>

                ';
            break;

            case 'Revision_effectifs':
                echo '

                    <dt>Emploi cible</dt><dd> '
                    .$data['intitule_emploi_cible'].' </dd>

                ';
            break;

            case 'Absence_departs':
                echo '

                    <dt>Absences/Départs</dt><dd> '
                    .$data['etat_absence_depart_arrivee'].' </dd>

                ';
            break;

            case 'Avancements':
                echo '

                    <dt>Avis</dt><dd> '
                    .$data['intitule_avis_avancement'].' </dd>

                ';
            break;

            case 'Primes_hr':
                echo '

                    <dt>Nature</dt><dd> '
                    .$data['intitule_nature_primes_hr'].' </dd>

                    <dt>Montant</dt><dd> '
                    .$data['montant'].' </dd>

                    <dt>Heures</dt><dd> '
                    .$data['heures'].' </dd>

                ';
            break;

            default:
        }

    $req->closeCursor();

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


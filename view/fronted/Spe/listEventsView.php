<?php ob_start(); ?>


    <p>
    <a href="index.php?action=createEventSpe&typeEvent=<?php echo $typeEvent; ?>&identifiant_enseignant=''" class="btn btn-primary">Nouveau</a>
    </p>


    <?php

    if (isset($corbeille)) {
        $corbeilleChecked = ($corbeille == 'corbeille') ? 'checked' : '';
    }

    if (isset($search)) {
        require 'view/fronted/Spe/form/presearchEventsForm.php';

        echo
        '
        <br>
        <p>
        <a href="index.php?action=exportListEventsSpe&typeEvent='.$typeEvent.'&corbeille='.$corbeille.'&nom='.$nom.'&type='.$type.'&contenu='.$contenu.'&debut='.$debut.'&fin='.$fin.'&enseignant='.$enseignant.'&parametre1='.$parametre1.'&parametre2='.$parametre2.'&parametre3='.$parametre3.'" class="btn btn-primary">Export</a>
        </p>

        '
        ;
    } else {
        require 'view/fronted/Spe/form/searchEventsForm.php';

        echo
        '
        <br>
        <p>
        <a href="index.php?action=exportAllEventsSpe&typeEvent='.$typeEvent.'" class="btn btn-primary">Export</a>
        </p>

        '
        ;
    }

    require 'view/fronted/Spe/form/loadSearchEventsForm.php';

        echo '

       <hr>
       <table class="table table-bordered table-striped table-condensed">



      ';

        switch ($typeEvent) {
            case 'Taches':
                echo '

                    <h4>Les Tâches</h4>

                ';
            break;

            case 'Revision_effectifs':
                echo '

                    <h4>Révisions des effectifs</h4>

                ';
            break;

            case 'Absence_departs':
                echo '

                    <h4>Les absences et departs</h4>

                ';
            break;

            case 'Avancements':
                echo '

                    <h4>Les avancements</h4>

                ';
            break;

            case 'Primes_hr':
                echo '

                    <h4>Les primes et heures référentielles</h4>

                ';
            break;

            default:
        }

        echo '



       <thead>
          <tr>
                <th>Edit</th>
                <th>Copie</th>
                <th>Voir</th>
                <th>Nom</th>
                <th>Etat</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Enseignant</th>
        ';

        switch ($typeEvent) {
            case 'Taches':
                echo '

                    <th>Thématique</th>

                ';
            break;

            case 'Revision_effectifs':
                echo '

                    <th>Emploi cible</th>
                    <th>support cible</th>
                    <th>liberation</th>

                ';
            break;

            case 'Absence_departs':
                echo '

                    <th>Nature</th>
                    <th>Support</th>
                    <th>liberation</th>

                ';
            break;

            case 'Avancements':
                echo '

                    <th>Avis</th>
                    <th>Grade cible</th>

                ';
            break;

            case 'Primes_hr':
                echo '

                    <th>Nature</th>
                    <th>Montant</th>
                    <th>Heures</th>


                ';
            break;

            default:
        }

        echo '
       </thead>
       <tbody>';

            while ($data = $req->fetch()) {
                echo '<tr>

                <td><a href="index.php?action=editEventSpe&typeEvent='.$typeEvent.'&identifiant='.$data['identifiant'].'">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                </svg>

                </a>
                </td>


                <td><a href="index.php?action=copyEventSpe&typeEvent='.$typeEvent.'&identifiant='.$data['identifiant'].'">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
                  <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                </svg>

                </a>
                </td>


                <td><a href="index.php?action=eventSpe&typeEvent='.$typeEvent.'&identifiant='.$data['identifiant'].'">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>

                </a>
                </td>

                <td>'.$data['nom'].'</td>
                <td>'.$data['type'].'</td>
                <td>'.$data['debut'].'</td>
                <td>'.$data['fin'].'</td>
                <td><a href="index.php?action=teacher&identifiant='.$data['identifiant_enseignant'].'">'.$data['enseignant'].' '.$data['prenom_enseignant'].'</a></td>


                    ';

                $AssignManager = new AssignManager();

                $reqAssign = $AssignManager->getAssignsWhithoutTeachersAndByDate('present', $data['identifiant_support'], $data['debut'], $data['fin']);

                $assignFind = $reqAssign->fetch();

                switch ($typeEvent) {
                        case 'Taches':
                            echo '

                                <td>'.$data['intitule_thematiqueTaches'].'</td>

                            ';
                        break;

                        case 'Revision_effectifs':
                            echo '

                                <td>'.$data['intitule_emploi_cible'].'</td>
                                <td>'.$data['numero_formate_support_cible'].'</td>

                                '
                                ;

                                if (empty($assignFind)) {
                                    echo '


                                    <td><a href="index.php?action=createAssignFromEvent&typeEvent='.$typeEvent.'&identifiant=479&identifiant_support='.$data['identifiant_support'].'&debut='.$data['fin2'].'">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
                                          <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                                        </svg>

                                    </a>
                                    </td>


                                '
                                ;
                                }

                        break;

                        case 'Absence_departs':
                            echo '

                                <td>'.$data['etat_absence_depart_arrivee'].'</td>
                                <td>'.$data['numero_formate_support'].'</td>



                                '
                                ;

                                if (empty($assignFind)) {
                                    echo '


                                    <td><a href="index.php?action=createAssignFromEvent&typeEvent='.$typeEvent.'&identifiant=479&identifiant_support='.$data['identifiant_support'].'&debut='.$data['debut2'].'&fin='.$data['fin2'].'">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
                                          <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                                        </svg>

                                    </a>
                                    </td>


                                '
                                ;
                                }

                        break;

                        case 'Avancements':
                            echo '

                                <td>'.$data['intitule_avis_avancement'].'</td>
                                <td>'.$data['etat_grade_cible'].'</td>

                            ';
                        break;

                        case 'Primes_hr':
                            echo '

                                <td>'.$data['intitule_nature_primes_hr'].'</td>
                                <td>'.$data['montant'].'</td>
                                <td>'.$data['heures'].'</td>


                            ';
                        break;

                        default:
                    }

                echo '





                    </tr>';
            }
        echo '</tbody></table>';

        $req->closeCursor();

        if (isset($presearch)) {
            echo
            '
            
            <p>
            <a href="index.php?action=suppSaveSearch&formule='.$formule.'" class="btn btn-danger">Supprimer recherche</a>
            </p>

            '
            ;
        }

    ?>

                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


                    

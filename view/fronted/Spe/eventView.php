<?php ob_start(); ?>

   
    <?php

    $data = $req->fetch();

    echo

    '

    <p>
    <a href="index.php?action=editEventSpe&typeEvent='.$typeEvent.'&identifiant='.$data['identifiant'].'" " class="btn btn-primary">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
        </svg>

    Modifier</a>
    </p>





<br>
<hr>
<br>





   <fieldset>
       <legend>Général</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Nom</dt><dd>'.$data['nom'].' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Etat</dt><dd>'.$data['type'].' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Enseignant</dt><dd>'.$data['enseignant'].' </dd>
                      
                </div>


        </div>


   </fieldset>


<br>
<hr>
<br>




';

$varTexteArea = str_replace('\n', '<br />', nl2br($data['contenu']));

echo '




<div class="col-10 themed-grid-col">
          
    <p>
        <dt>Contenu</dt>
        
        <dd row="10">'.$varTexteArea.' </dd>
    </p>

</div>






<br>
<hr>
<br>


   <fieldset>
       <legend>Durée</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Date de début</dt><dd>'.$data['debut'].' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Date de fin</dt><dd>'.$data['fin'].' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>


<br>
<hr>
<br>



    
    '
    ;

        switch ($typeEvent) {
            case 'Taches':
                echo '
                   <fieldset>
                       <legend>Tâches</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">
                                      
                                    <br>
                                    <dt>Thématique</dt><dd>'.$data['intitule_thematiqueTaches'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">      

                                </div>

                                <div class="col-3 themed-grid-col">
                                          
                                </div>

                                <div class="col-3 themed-grid-col">
                                               
                                </div>
                        </div>

                   </fieldset>
                <br>
                <hr>
                <br>
                ';
            break;

            case 'Revision_effectifs':
                echo '
                   <fieldset>
                       <legend>Révision des effectifs</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">

                                    <br>
                                    <dt>Emploi cible</dt><dd>'.$data['intitule_emploi_cible'].' </dd>
   
                                </div>

                                <div class="col-3 themed-grid-col">      

                                    <br>
                                    <dt>Support cible</dt><dd>'.$data['numero_formate_support_cible'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">
                                          
                                </div>

                                <div class="col-3 themed-grid-col">
                                               
                                </div>
                        </div>

                   </fieldset>
                <br>
                <hr>
                <br>
                   <fieldset>
                       <legend>Synthèse sur le candidat</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">

                                    <br>
                                    <dt>Expérience</dt><dd>'.$data['etat_experience'].' </dd>
   
                                </div>

                                <div class="col-3 themed-grid-col">      

                                    <br>
                                    <dt>Mobilité</dt><dd>'.$data['etat_mobilite'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">

                                    <br>
                                    <dt>HDR</dt><dd>'.$data['etat_hdr'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">

                                    <br>
                                    <dt>PréCNU</dt><dd>'.$data['etat_precnu'].' </dd>
          
                                </div>

                        </div>

                   </fieldset>
                <br>
                <hr>
                <br>     
                   <fieldset>
                       <legend>Commentaire</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">

                                    <br>
                                    <dt>Commission évaluation HU</dt><dd>'.$data['annee_civile_commission_hu'].' </dd>
   
                                </div>

                                <div class="col-3 themed-grid-col">      

                                    <br>
                                    <dt>Commentaire sur la trajectoire HU</dt><dd>'.$data['commentaire_trajectoire_hu'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">



                                </div>

                                <div class="col-3 themed-grid-col">


          
                                </div>

                        </div>

                   </fieldset>
                <br>
                <hr>
                <br>  
                ';
            break;

            case 'Absence_departs':
                echo '
                   <fieldset>
                       <legend>Absences et départs</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">
                                 
                                    <br>
                                    <dt>Nature</dt><dd>'.$data['etat_absence_depart_arrivee'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">      

                                </div>

                                <div class="col-3 themed-grid-col">
                                          
                                </div>

                                <div class="col-3 themed-grid-col">
                                               
                                </div>
                        </div>

                   </fieldset>
                <br>
                <hr>
                <br>
                ';
            break;

            case 'Avancements':
                echo '
                   <fieldset>
                       <legend>Avancements</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">

                                    <br>
                                    <dt>Avis</dt><dd>'.$data['intitule_avis_avancement'].' </dd>
                                          
                                </div>

                                <div class="col-3 themed-grid-col">      

                                    <br>
                                    <dt>Grade cible</dt><dd>'.$data['etat_grade_cible'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">
                                          
                                </div>

                                <div class="col-3 themed-grid-col">
                                               
                                </div>
                        </div>

                   </fieldset>
                <br>
                <hr>
                <br>
                ';
            break;

            case 'Primes_hr':
                echo '
                   <fieldset>
                       <legend>Primes et heures référentielles</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">
                                          
                                    <br>
                                    <dt>Nature</dt><dd>'.$data['intitule_nature_primes_hr'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">      

                                    <br>
                                    <dt>Montant</dt><dd>'.$data['montant'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">

                                    <br>
                                    <dt>Heures</dt><dd>'.$data['heures'].' </dd>
                                           
                                </div>

                                <div class="col-3 themed-grid-col">
                                               
                                </div>
                        </div>

                   </fieldset>
                <br>
                <hr>
                <br>
                   <fieldset>
                       <legend>Renseignements</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">
                                          
                                    <br>
                                    <dt>Emploi</dt><dd>'.$data['emploi'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">      

                                    <br>
                                    <dt>Identifiant mangue</dt><dd>'.$data['id_mangue'].' </dd>

                                </div>

                                <div class="col-3 themed-grid-col">

                                           
                                </div>

                                <div class="col-3 themed-grid-col">
                                               
                                </div>
                        </div>

                   </fieldset>
                <br>
                <hr>
                <br>
                ';
            break;

            default:
        }

    if ($data['etatCorbeille'] == 'oui') {
        echo
        '
        <a href="index.php?action=restoreEventSpe&typeEvent='.$typeEvent.'&identifiant='.$data['identifiant'].'&nom='.$data['nom'].'&type='.$data['type'].'&contenu='.$data['contenu'].'&enseignant='.$data['identifiant_enseignant'].'" class="btn btn-danger">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>

        Restaurer</a>
        </p>

        '
        ;
    } else {
        echo
        '

        <a href="index.php?action=confirmDeleteEventSpe&typeEvent='.$typeEvent.'&identifiant='.$data['identifiant'].'" class="btn btn-danger">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>

        Supprimer</a>
        </p>

        '
        ;
    }

    $req->closeCursor();

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>



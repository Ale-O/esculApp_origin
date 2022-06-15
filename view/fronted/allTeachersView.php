<?php ob_start(); ?>


    <p>
    <a href="index.php?action=createTeacher" class="btn btn-primary">Nouvel enseignant</a>
    </p>




    <?php





    if (isset($corbeille)){
        $corbeilleChecked = ($corbeille == "corbeille") ? "checked" : "";
    }



    if (isset($search)){
        require("view/fronted/form/presearchTeacherForm.php");

        echo
        '
        
        <p>
        <br>
        <a href="index.php?action=exportListTeacher&

        corbeille=' . $corbeille . '&nom=' . $name . '&affectation_hospitaliere=' . $affectation_hospitaliere . '&actif=' . $actif . '&prenom=' . $prenom . '&emploi=' . $emploi . '&cnu=' . $cnu . '&absence_depart_arrivee=' . $absence_depart_arrivee . '&liste_de_diffusion=' . $liste_de_diffusion. '&sous_emploi=' . $sous_emploi . '&dphu=' . $dphu . '&affectation_pedagogique=' . $affectation_pedagogique . '&laboratoire=' . $laboratoire . '&next=' . $next . '&trajectoire_hu=' . $trajectoire_hu . '&annee_civile=' . $annee_civile . '&emploi_cible=' . $emploi_cible . '&succession=' . $succession . '&commission_evaluation_hu=' .  $commission_evaluation_hu . '&experience=' . $experience . '&mobilite=' . $mobilite . '&hdr=' . $hdr . '&precnu=' . $precnu . '&date_dernier_changement=' . $date_dernier_changement . '&fin_enseignant=' . $fin_enseignant . '&eligible_election=' . $eligible_election . '&grade=' . $grade . '&debut_grade=' . $debut_grade . '&ouverture_droits_retraite=' . $ouverture_droits_retraite . '&age_limite=' . $age_limite . '&date_limite_age=' . $date_limite_age . '&enfant_vivant_a_50ans=' . $enfant_vivant_a_50ans . '&date_previsionnelle=' . $date_previsionnelle . '&depart_effectif_ou_souhaite=' . $depart_effectif_ou_souhaite . '&option_remarque_retraite=' . $option_remarque_retraite . '&surnombre_emeritat=' .$surnombre_emeritat . ' " class="btn btn-primary">Export</a>
        </p>

        '
        ;


    }
    else {
        require("view/fronted/form/searchTeacherForm.php");
        
        echo
        '
        
        <p>
        <br>
        <a href="index.php?action=exportAllTeacher" class="btn btn-primary">Export</a>
        </p>

        '
        ;

    }


    require ("view/fronted/form/loadSearchTeacherForm.php");


       echo '

       <hr>
       <table class="table table-bordered table-striped table-condensed">
        <h4>Les enseignants</h4>
       <thead>
          <tr>
                <th>Edit</th>
                <th>Copie</th>               
                <th>Nom</th>
                <th>Prénom</th>
                <th>Emploi</th>
                <th>Discipline CNU</th>
                <th>Affectation hospitalière</th>
                <th>Absence/Départ</th>
                <th>Actif</th>
          </tr>
       </thead>
       <tbody>';

            while ($data = $req->fetch())
                {  
                    echo '<tr>
                
                <td><a href="index.php?action=editTeacher&identifiant=' . $data['identifiant'] . '">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                </svg>

                </a>
                </td>

                <td><a href="index.php?action=copyTeacher&identifiant=' . $data['identifiant'] . '">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
                  <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                </svg>

                </a>
                </td>

                <td><a href="index.php?action=teacher&identifiant=' . $data['identifiant'] . '">' . $data['nom'] . '</a></td>
                <td>' . $data['prenom'] . '</td>
                <td>' . $data['intitule_emploi'] . '</td>
                <td>' . $data['code_cnu'] .' / '. $data['libelle_cnu'] . '</td>
                <td>' . $data['affectation_hospitaliere'] . '</td>
                <td>' . $data['etat_absence_depart_arrivee'] . '</td>
                <td>' . $data['etat_actif'] . '</td>

                    </tr>';
                                }
        echo '</tbody></table>';


        $req->closeCursor();



        if (isset($presearch)){

            echo
            '
            
            <p>
            <a href="index.php?action=suppSaveSearch&formule=' . $formule . '" class="btn btn-danger">Supprimer recherche</a>
            </p>

            '
            ;


        }        




    ?>
                        

<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>
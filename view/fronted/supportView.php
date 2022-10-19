<?php ob_start(); ?>

   
    <?php

    $data = $req->fetch();

    echo

    '

    <p>
    <a href="index.php?action=editSupport&identifiant='.$data['identifiant'].'" " class="btn btn-primary">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
        </svg>

    Modifier</a>
    </p>









<br>
<hr>
<br>




';

$varTexteArea = str_replace('\n', '<br />', nl2br($data['renseignement']));

echo '



<div class="col-10 themed-grid-col">
          
    <p>
        <dt>Renseignements</dt>
        
        <dd row="10">'.$varTexteArea.' </dd>
    </p>

</div>

















<br>
<hr>
<br>














   <fieldset>
       <legend>Support</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Numéro de poste</dt><dd>'.$data['numero_formate'].' </dd>


                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Nature</dt><dd>'.$data['nature'].' </dd>


                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Budget</dt><dd>'.$data['budget'].' </dd>


                </div>

                    

                <div class="col-3 themed-grid-col">
                    
                    <br>      
                    <dt>Eotp</dt><dd>'.$data['categorie'].' </dd>
                      
                </div>


        </div>


   </fieldset>


<br>
<hr>
<br>



   <fieldset>
       <legend>Informations complémentaires</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                        
                    <br>  
                    <dt>Eotp</dt><dd>'.$data['eotp'].' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Quotité</dt><dd>'.$data['quotite'].' </dd>

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







   <table class="table table-bordered table-striped table-condensed">
    <h4>Les affectations de support</h4>
   <thead>
      <tr>
            <th>Edit</th>
            <th>Voir</th>
            <th>Support</th>
            <th>Enseignant</th>
            <th>Emploi</th>
            <th>Sous-emploi</th>
            <th>Date de début</th>
            <th>Date de fin</th>
      </tr>
   </thead>
   <tbody>';

    require_once 'model/AssignManager.php';
    $AssignManager = new AssignManager();
    $reqAssign = $AssignManager->getAssigns('present', $data['numero_formate'], '', '', '', '', '', '', '');
    while ($dataAssign = $reqAssign->fetch()) {
        echo '<tr>

                <td><a href="index.php?action=editAssign&identifiant_affectation='.$dataAssign['identifiant_affectation'].'">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                </svg>

                </a>
                </td>

                <td><a href="index.php?action=assign&identifiant_affectation='.$dataAssign['identifiant_affectation'].'">


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>

                </a>
                </td>

                <td>'.$dataAssign['numero_formate_support'].'</td>
                <td><a href="index.php?action=teacher&identifiant='.$dataAssign['identifiant_enseignant'].'">'.$dataAssign['nom_enseignant'].' '.$dataAssign['prenom_enseignant'].'</a></td>
                <td>'.$dataAssign['emploi_enseignant'].'</td>
                <td>'.$dataAssign['sous_emploi_enseignant'].'</td>
                <td>'.$dataAssign['debut'].'</td>
                <td>'.$dataAssign['fin'].'</td>

                    </tr>';
    }
        echo '

        </tbody></table>



<br>
<hr>
<br>

        ';

        $reqAssign->closeCursor();

    echo '


   <table class="table table-bordered table-striped table-condensed">
    <h4>Les révisions des effectifs utilisant ce support</h4>
   <thead>
      <tr>
            <th>Edit</th>
            <th>Copie</th>
            <th>Voir</th>
            <th>Nom</th>
            <th>Etat</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Emploi cible</th>
            <th>support cible</th>
      </tr>
   </thead>
   <tbody>';

    require_once 'model/eventsSpeManager.php';
    $eventsSpeManager = new eventsSpeManager();
    $reqEventsSpe = $eventsSpeManager->getEventsSpe('Revision_effectifs', 'present', '', '', '', '', '', '', '', '', $data['numero_formate'], '');
    while ($dataEventsSpe = $reqEventsSpe->fetch()) {
        echo '<tr>

            <td><a href="index.php?action=editEventSpe&typeEvent=Revision_effectifs&identifiant='.$dataEventsSpe['identifiant'].'">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=copyEventSpe&typeEvent=Revision_effectifs&identifiant='.$dataEventsSpe['identifiant'].'">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=eventSpe&typeEvent=Revision_effectifs&identifiant='.$dataEventsSpe['identifiant'].'">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>

            </a>
            </td>

            <td>'.$dataEventsSpe['nom'].'</td>
            <td>'.$dataEventsSpe['type'].'</td>
            <td>'.$dataEventsSpe['debut'].'</td>
            <td>'.$dataEventsSpe['fin'].'</td>
            <td>'.$dataEventsSpe['intitule_emploi_cible'].'</td>
            <td>'.$dataEventsSpe['numero_formate_support_cible'].'</td>

                    </tr>';
    }
        echo '

        </tbody></table>


<br>
<hr>
<br>

        ';

        $reqEventsSpe->closeCursor();

    if ($data['etatCorbeille'] == 'oui') {
        echo
        '





        <a href="index.php?action=restoreSupport&identifiant='.$data['identifiant'].' &numero_formate='.$data['numero_formate'].'" class="btn btn-danger">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>

        Restaurer</a>
        </p>

        '
        ;
    } else {
        echo
        '

        <a href="index.php?action=confirmDeleteSupport&identifiant='.$data['identifiant'].'" class="btn btn-danger">

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



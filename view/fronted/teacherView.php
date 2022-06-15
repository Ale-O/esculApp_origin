<?php ob_start(); ?>

   
    <?php 




    $data = $req->fetch();

    echo 

    '




<br>
<hr>
<br> 

<ul class="nav nav-pills">
  <li class="nav-item"><a href="#signaletique" class="nav-link">Signalétique</a></li>
  <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
  <li class="nav-item"><a href="#emploi" class="nav-link">Emploi</a></li>
  <li class="nav-item"><a href="#affectation_universitaire" class="nav-link">Affectation universitaire</a></li>
  <li class="nav-item"><a href="#affectation_hospitaliere" class="nav-link">Affectation hospitalière</a></li>
  <li class="nav-item"><a href="#affectation_scientifique" class="nav-link">Affectation scientifique</a></li>
  <li class="nav-item"><a href="#connexion_bases_externes" class="nav-link">Connexions bases externes</a></li>
  <li class="nav-item"><a href="#support" class="nav-link">Support</a></li>
  <li class="nav-item"><a href="#trajectoire_hu" class="nav-link">Trajectoire HU</a></li>
  <li class="nav-item"><a href="#presence_absence" class="nav-link">Présence/Abcence</a></li>
  <li class="nav-item"><a href="#avancement" class="nav-link">Avancement</a></li>
  <li class="nav-item"><a href="#retraite" class="nav-link">Retraite</a></li>
  <li class="nav-item"><a href="#prime" class="nav-link">Primes et heures référentielles</a></li>
  <li class="nav-item"><a href="#taches" class="nav-link">Tâches</a></li>
</ul>


<br>
<hr>
<br> 







    <p>
    <a href="index.php?action=editTeacher&identifiant=' . $data['identifiant'] . '" " class="btn btn-primary">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
        </svg>

    Modifier</a>
    </p>










<br id="signaletique">
<br>
<br>
<hr>
<br> 














   <fieldset" >
       <legend>Signalétique</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Nom</dt><dd>'. $data['nom']. ' </dd>


                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Prénom</dt><dd>'. $data['prenom']. ' </dd>


                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Nom de jeune fille</dt><dd>'. $data['nom_jeune_fille']. ' </dd>


                </div>

                    
                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Téléphone</dt><dd>'. $data['telephone']. ' </dd>
                      
                </div>


        </div>


   </fieldset>


<br id="contact">
<br>
<br>
<hr>
<br>



   <fieldset>
       <legend>Contact</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                        
                    <br>  
                    <dt>Liste de diffusion</dt><dd>'. $data['etat_liste_de_diffusion']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Courriel universitaire</dt><dd>'. $data['courriel_univ']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                         
                    <br> 
                    <dt>Courriel hospitalier</dt><dd>'. $data['courriel_chu']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Courriel autre</dt><dd>'. $data['courriel_autre']. ' </dd>
                      
                </div>


        </div>


   </fieldset>


<br id="emploi">
<br>
<br>
<hr>
<br>





   <fieldset>
       <legend>Emploi</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                      
                    <br>    
                    <dt>Emploi</dt><dd>'. $data['intitule_emploi']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Sous-Emploi</dt><dd>'. $data['intitule_sous_emploi']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>





<br id="affectation_universitaire">
<br>
<br>
<hr>
<br>










   <fieldset>
       <legend>Affectation universitaire</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>DPHU</dt><dd>'. $data['intitule_dphu']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Affectation pédagogique</dt><dd>'. $data['intitule_affectation_pedagogique']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Libellé CNU</dt><dd>' . $data['code_cnu'] .' / '. $data['libelle_cnu'] . ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>








<br id="affectation_hospitaliere">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Affectation hospitalière</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Service</dt><dd>'. $data['affectation_hospitaliere']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      



                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>











<br id="affectation_scientifique">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Affectation scientifique</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Laboratoire</dt><dd>'. $data['code_laboratoire']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      



                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>









<br id="connexion_bases_externes">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Connexions bases externes</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Identifiant chu</dt><dd>'. $data['nom_chu']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Identifiant mangue</dt><dd>'. $data['identifiant_mangue']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>







<br id="support">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Support</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Affectation dernier support</dt><dd>'. $data['numero_support']. '</dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Financement Next</dt><dd>'. $data['financement_next']. ' </dd>

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




    echo '


   <table class="table table-bordered table-striped table-condensed">
    <h4>Les affectations de support</h4>
   <thead>
      <tr>
            <th>Edit</th>
            <th>Voir</th>
            <th>Support</th>
            <th>Emploi</th>
            <th>Sous-emploi</th>
            <th>Date de début</th>
            <th>Date de fin</th>
      </tr>
   </thead>
   <tbody>';

    require_once ('model/AssignManager.php');
    $AssignManager = new AssignManager();
    $reqAssign = $AssignManager->getAssigns('present','','','',$data['nom'],$data['prenom'],'','','');
    while ($dataAssign = $reqAssign->fetch())
        { 
                    echo '<tr>

                <td><a href="index.php?action=editAssign&identifiant_affectation=' . $dataAssign['identifiant_affectation'] . '">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                </svg>

                </a>
                </td>

                <td><a href="index.php?action=assign&identifiant_affectation=' . $dataAssign['identifiant_affectation'] . '">


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>

                </a>
                </td>

                <td>' . $dataAssign['numero_formate_support'] . '</td>
                <td>' . $dataAssign['emploi_enseignant'] . '</td>
                <td>' . $dataAssign['sous_emploi_enseignant'] . '</td>
                <td>' . $dataAssign['debut'] . '</td>
                <td>' . $dataAssign['fin'] . '</td>

                    </tr>';
        }
        echo '

        </tbody></table>




        ';

        $reqAssign->closeCursor();




 

    echo 

    '

    <p>
    <a href="index.php?action=createAssign&identifiant=' . $data['identifiant'] . '" class="btn btn-primary">Nouvelle affectation</a>
    </p>


<br id="trajectoire_hu">
<br>
<br>
<hr>
<br>






   <fieldset>
       <legend >Trajectoire HU</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Trajectoire HU</dt><dd>'. $data['etat_trajectoire_hu']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Année civile cible</dt><dd>'. $data['annee_annee_civile']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Emploi cible</dt><dd>'. $data['intitule_emploi_cible']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


        <br>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Support cible</dt><dd>'. $data['numero_formate_succession']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Commission évaluation HU</dt><dd>'. $data['annee_civile_commission_hu2']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


        <br>



        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Expérience</dt><dd>'. $data['etat_experience']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Mobilité</dt><dd>'. $data['etat_mobilite']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>HDR</dt><dd>'. $data['etat_hdr']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Précnu</dt><dd>'. $data['etat_precnu']. ' </dd>
                      
                </div>


        </div>




   </fieldset>



<br>
<hr>
<br>




<div class="col-10 themed-grid-col">
          
    <p>
        <dt>Commentaire sur la trajectoire HU</dt>
        
        <dd row="10">'. $data['commentaire_trajectoire_hu']. ' </dd>
    </p>

</div>







<br>
<hr>
<br>



    '
    ;




    echo '


   <table class="table table-bordered table-striped table-condensed">
    <h4>Les révisions des effectifs</h4>
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

    require_once ('model/eventsSpeManager.php');
    $eventsSpeManager = new eventsSpeManager();
    $reqEventsSpe = $eventsSpeManager->getEventsSpe('Revision_effectifs','present','','','','','',$data['nom'],$data['prenom'],'','','');
    while ($dataEventsSpe = $reqEventsSpe->fetch())
        { 
                    echo '<tr>

            <td><a href="index.php?action=editEventSpe&typeEvent=Revision_effectifs&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=copyEventSpe&typeEvent=Revision_effectifs&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=eventSpe&typeEvent=Revision_effectifs&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>

            </a>
            </td>

            <td>' . $dataEventsSpe['nom'] . '</td>
            <td>' . $dataEventsSpe['type'] . '</td>
            <td>' . $dataEventsSpe['debut'] . '</td>
            <td>' . $dataEventsSpe['fin'] . '</td>
            <td>' . $dataEventsSpe['intitule_emploi_cible'] . '</td>
            <td>' . $dataEventsSpe['numero_formate_support_cible'] . '</td>

                    </tr>';
        }
        echo '

        </tbody></table>




        ';

        $reqEventsSpe->closeCursor();




 

    echo 

    '

    <p>
    <a href="index.php?action=createEventSpe&typeEvent=Revision_effectifs&identifiant_enseignant=' . $data['identifiant'] . '" class="btn btn-primary">Nouvelle candidature</a>
    </p>



<br id="presence_absence">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Etat de présence</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Absence/Départ</dt><dd>'. $data['etat_absence_depart_arrivee']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Date du dernier changement de statut</dt><dd>'. $data['date_dernier_changement2']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Date de fin</dt><dd>'. $data['fin_enseignant2']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Actif</dt><dd>'. $data['etat_actif']. ' </dd>
                      
                </div>


        </div>

        <div class="row">


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Elécteur</dt><dd>'. $data['etat_eligible_election']. ' </dd>

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



<div class="col-10 themed-grid-col">
          
    <p>
        <dt>Commentaire</dt>
        
        <dd row="10">'. $data['commentaire']. ' </dd>
    </p>

</div>







<br>
<hr>
<br>



    '
    ;




    echo '


   <table class="table table-bordered table-striped table-condensed">
    <h4>Les absences</h4>
   <thead>
      <tr>
            <th>Edit</th>
            <th>Copie</th>
            <th>Voir</th>
            <th>Nom</th>
            <th>Etat</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Nature</th>
      </tr>
   </thead>
   <tbody>';

    require_once ('model/eventsSpeManager.php');
    $eventsSpeManager = new eventsSpeManager();
    $reqEventsSpe = $eventsSpeManager->getEventsSpe('Absence_departs','present','','','','','',$data['nom'],$data['prenom'],'','','');
    while ($dataEventsSpe = $reqEventsSpe->fetch())
        { 
                    echo '<tr>

            <td><a href="index.php?action=editEventSpe&typeEvent=Absence_departs&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=copyEventSpe&typeEvent=Absence_departs&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=eventSpe&typeEvent=Absence_departs&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>

            </a>
            </td>

            <td>' . $dataEventsSpe['nom'] . '</td>
            <td>' . $dataEventsSpe['type'] . '</td>
            <td>' . $dataEventsSpe['debut'] . '</td>
            <td>' . $dataEventsSpe['fin'] . '</td>
            <td>' . $dataEventsSpe['etat_absence_depart_arrivee'] . '</td>

                    </tr>';
        }
        echo '

        </tbody></table>




        ';

        $reqEventsSpe->closeCursor();




 

    echo 

    '

    <p>
    <a href="index.php?action=createEventSpe&typeEvent=Absence_departs&identifiant_enseignant=' . $data['identifiant'] . '" class="btn btn-primary">Nouvelle absence</a>
    </p>











<br id="avancement">
<br>
<br>
<hr>
<br>



   <fieldset>
       <legend>Avancements</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Grade</dt><dd>'. $data['etat_grade']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Date de début dans le grade</dt><dd>'. $data['debut_grade2']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>



<br>
<hr>
<br>






    '
    ;




    echo '


   <table class="table table-bordered table-striped table-condensed">
    <h4>Les candidatures pour avancement</h4>
   <thead>
      <tr>
            <th>Edit</th>
            <th>Copie</th>
            <th>Voir</th>
            <th>Nom</th>
            <th>Etat</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Avis</th>
            <th>Grade cible</th>
      </tr>
   </thead>
   <tbody>';

    require_once ('model/eventsSpeManager.php');
    $eventsSpeManager = new eventsSpeManager();
    $reqEventsSpe = $eventsSpeManager->getEventsSpe('Avancements','present','','','','','',$data['nom'],$data['prenom'],'','','');
    while ($dataEventsSpe = $reqEventsSpe->fetch())
        { 
                    echo '<tr>

            <td><a href="index.php?action=editEventSpe&typeEvent=Avancements&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=copyEventSpe&typeEvent=Avancements&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=eventSpe&typeEvent=Avancements&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>

            </a>
            </td>

            <td>' . $dataEventsSpe['nom'] . '</td>
            <td>' . $dataEventsSpe['type'] . '</td>
            <td>' . $dataEventsSpe['debut'] . '</td>
            <td>' . $dataEventsSpe['fin'] . '</td>
            <td>' . $dataEventsSpe['intitule_avis_avancement'] . '</td>
            <td>' . $dataEventsSpe['etat_grade_cible'] . '</td>

                    </tr>';
        }
        echo '

        </tbody></table>




        ';

        $reqEventsSpe->closeCursor();




 

    echo 

    '

    <p>
    <a href="index.php?action=createEventSpe&typeEvent=Avancements&identifiant_enseignant=' . $data['identifiant'] . '" class="btn btn-primary">Nouvelle candidature</a>
    </p>











<br id="retraite">
<br>
<br>
<hr>
<br>






   <fieldset>
       <legend>Retraite</legend>



        <div class="row">


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Date de naissance</dt><dd>'. $data['date_de_naissance2']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>

                <div class="col-3 themed-grid-col">
                          


                </div>


        </div>


        <div class="row">


                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Ouverture droit retraite</dt><dd>'. $data['ouverture_droits_retraite']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Age limite</dt><dd>'. $data['age_limite']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Date age limite</dt><dd>'. $data['date_limite_age']. ' </dd>
                      
                </div>

                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Enfant vivant à 50 ans</dt><dd>'. $data['enfant_vivant_a_50ans']. ' </dd>

                </div>


        </div>


        <div class="row">




                <div class="col-3 themed-grid-col">      

                    <br>
                    <dt>Date prévisionnelle</dt><dd>'. $data['date_previsionnelle']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Départ effectif ou/et souhaité</dt><dd>'. $data['depart_effectif_ou_souhaite']. ' </dd>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <br>
                    <dt>Commentaire retraite</dt><dd>'. $data['option_remarque_retraite']. ' </dd>
                      
                </div>

                <div class="col-3 themed-grid-col">
                          


                </div>


        </div>

<br>
<hr>
<br>

<div class="row">

        <div class="col-3 themed-grid-col">
                  
            <br>
            <dt>Surnombre/Eméritat</dt><dd>'. $data['statut_surnombre_emeritat']. ' </dd>

        </div>

</div>




   </fieldset>

<br>
<hr>
<br>








    '
    ;




    echo '


   <table class="table table-bordered table-striped table-condensed">
    <h4 id="prime">Les primes et les heures référentielles</h4>
   <thead>
      <tr>
            <th>Edit</th>
            <th>Copie</th>
            <th>Voir</th>
            <th>Nom</th>
            <th>Etat</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Nature</th>
            <th>Montant</th>
            <th>Heures</th>
      </tr>
   </thead>
   <tbody>';

    require_once ('model/eventsSpeManager.php');
    $eventsSpeManager = new eventsSpeManager();
    $reqEventsSpe = $eventsSpeManager->getEventsSpe('Primes_hr','present','','','','','',$data['nom'],$data['prenom'],'','','');
    while ($dataEventsSpe = $reqEventsSpe->fetch())
        { 
                    echo '<tr>

            <td><a href="index.php?action=editEventSpe&typeEvent=Primes_hr&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=copyEventSpe&typeEvent=Primes_hr&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=eventSpe&typeEvent=Primes_hr&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>

            </a>
            </td>

            <td>' . $dataEventsSpe['nom'] . '</td>
            <td>' . $dataEventsSpe['type'] . '</td>
            <td>' . $dataEventsSpe['debut'] . '</td>
            <td>' . $dataEventsSpe['fin'] . '</td>
            <td>' . $dataEventsSpe['intitule_nature_primes_hr'] . '</td>
            <td>' . $dataEventsSpe['montant'] . '</td>
            <td>' . $dataEventsSpe['heures'] . '</td>
                    </tr>';
        }
        echo '

        </tbody></table>




        ';

        $reqEventsSpe->closeCursor();




 

    echo 

    '

    <p>
    <a href="index.php?action=createEventSpe&typeEvent=Primes_hr&identifiant_enseignant=' . $data['identifiant'] . '" class="btn btn-primary">Nouvelle demande</a>
    </p>




<br>
<hr>
<br>








    '
    ;




    echo '


   <table class="table table-bordered table-striped table-condensed">
    <h4 id="taches">Les tâches</h4>
   <thead>
      <tr>
            <th>Edit</th>
            <th>Copie</th>
            <th>Voir</th>
            <th>Nom</th>
            <th>Etat</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Thématique</th>

      </tr>
   </thead>
   <tbody>';

    require_once ('model/eventsSpeManager.php');
    $eventsSpeManager = new eventsSpeManager();
    $reqEventsSpe = $eventsSpeManager->getEventsSpe('Taches','present','','','','','',$data['nom'],$data['prenom'],'','','');
    while ($dataEventsSpe = $reqEventsSpe->fetch())
        { 
                    echo '<tr>

            <td><a href="index.php?action=editEventSpe&typeEvent=Revision_effectifs&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=copyEventSpe&typeEvent=Revision_effectifs&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
            </svg>

            </a>
            </td>


            <td><a href="index.php?action=eventSpe&typeEvent=Revision_effectifs&identifiant=' . $dataEventsSpe['identifiant'] . '">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>

            </a>
            </td>

            <td>' . $dataEventsSpe['nom'] . '</td>
            <td>' . $dataEventsSpe['type'] . '</td>
            <td>' . $dataEventsSpe['debut'] . '</td>
            <td>' . $dataEventsSpe['fin'] . '</td>
            <td>' . $dataEventsSpe['intitule_thematiqueTaches'] . '</td>
                    </tr>';
        }
        echo '

        </tbody></table>




        ';

        $reqEventsSpe->closeCursor();




 

    echo 

    '

    <p>
    <a href="index.php?action=createEventSpe&typeEvent=Taches&identifiant_enseignant=' . $data['identifiant'] . '" class="btn btn-primary">Nouvelle tâche</a>
    </p>




<br>
<hr>
<br>








    
    '
    ;


    if ($data['etatCorbeille'] == 'oui') {


        echo
        '
        <a href="index.php?action=restoreTeacher&identifiant=' . $data['identifiant'] . '&nom=' . $data['nom'] . '&prenom=' . $data['prenom'] . '" class="btn btn-danger">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>

        Restaurer</a>
        </p>

        '
        ;


    }
    else {

        echo
        '
        <a href="index.php?action=confirmDeleteTeacher&identifiant=' . $data['identifiant'] . '" class="btn btn-danger">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>

        Supprimer</a>
        </p>










        '
        ;

    }
  
    

    ;

    $req->closeCursor();

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>


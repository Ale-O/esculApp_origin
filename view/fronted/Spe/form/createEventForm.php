<form action="index.php?action=newEventSpe&typeEvent=<?php echo $typeEvent; ?>" method="post">



   <fieldset>
       <legend>Général</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" value="<?php echo $nom_enseignant; ?>"/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="type" class="form-label">Etat</label>
                            <select name="type" class="form-select" id="type">
                                <option value="">Sélectionner</option>

                        <?php
                        require_once 'model/typeEventsSpeManager.php';
                        $typeEventsSpeManager = new typeEventsSpeManager();
                        $req1 = $typeEventsSpeManager->getAllTypeEventsSpe();
                        while ($data1 = $req1->fetch()) {
                            echo '
                                            <option value="'.$data1['identifiant'].'" >'.$data1['intitule'].'</option>
                                        ';
                        }
                                $req1->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="enseignant" class="form-label">Enseignant concerné</label>
                            <select name="enseignant" class="form-select" id="enseignant">
                                <option value="<?php echo $identifiant_enseignant; ?>" selected>Valeur actuelle : <?php echo $nom_enseignant; ?></option>

                        <?php
                        require_once 'model/TeacherManager.php';
                        $TeacherManager = new TeacherManager();
                        $req2 = $TeacherManager->getAllTeachers(present);
                        while ($data2 = $req2->fetch()) {
                            echo '
                                            <option value="'.$data2['identifiant'].'" >'.$data2['nom'].' - '.$data2['prenom'].'</option>
                                        ';
                        }
                                $req2->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>
                      
                </div>


        </div>


   </fieldset>

<br>
<hr>
<br>



<div class="form-group">
          
    <p>
        <label for="contenu" class="form-label">Contenu</label>
        
        <textarea name="contenu" class="form-control" rows="10"></textarea>
    </p>

</div>


<br>
<hr>
<br>


   <fieldset>
       <legend>Durée</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="debut" class="form-label">Date de début</label>
                        <input type="date" name="debut" class="form-control" required/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">      

                    <p>
                        <label for="fin" class="form-label">Date de fin</label>
                        <input type="date" name="fin" class="form-control" />
                    </p>

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




<?php

        switch ($typeEvent) {
            case 'Taches':
                echo '
                   <fieldset>
                       <legend>Tâches</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">
                                       
                                        <div class="form-group">
                                            <label for="thematiqueTaches" class="form-label">Thématiques</label>
                                                <select name="thematiqueTaches" class="form-select" id="thematiqueTaches" >
                                                    <option value="">Sélectionner</option>

                                            ';
                                            require_once 'model/ThematiqueTachesManager.php';
                                            $ThematiqueTachesManager = new ThematiqueTachesManager();
                                            $req3 = $ThematiqueTachesManager->getAllThematiqueTaches();
                                            while ($data3 = $req3->fetch()) {
                                                echo '
                                                                <option value="'.$data3['identifiant'].'" >'.$data3['intitule'].'</option>
                                                            ';
                                            }
                                                    $req3->closeCursor();
                                            echo '

                                                </select>
                                            <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                                        </div>

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
                       <legend>Révision effectifs</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">
                           

                                        <div class="form-group">
                                            <label for="emploi_cible" class="form-label">Emploi cible</label>
                                                <select name="emploi_cible" class="form-select" id="emploi_cible" >
                                                <option value="" selected>Sélectionner</option>

                                            ';
                                            require_once 'model/EmploiManager.php';
                                            $EmploiManager = new EmploiManager();
                                            $req3 = $EmploiManager->getAllEmploi();
                                            while ($data3 = $req3->fetch()) {
                                                echo '
                                                                    <option value="'.$data3['identifiant'].'" >'.$data3['intitule'].'</option>
                                                                ';
                                            }
                                                        $req3->closeCursor();
                                                echo '

                                                </select>
                                            <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                                        </div>


                                </div>

                                <div class="col-3 themed-grid-col">      


                                        <div class="form-group">
                                            <label for="support_cible" class="form-label">Support cible</label>
                                                <select name="support_cible" class="form-select" id="support_cible" >
                                                <option value="" selected>Sélectionner</option>

                                            ';
                                            require_once 'model/SupportManager.php';
                                            $SupportManager = new SupportManager();
                                            $req3 = $SupportManager->getAllSupport('present');
                                            while ($data3 = $req3->fetch()) {
                                                echo '
                                                                <option value="'.$data3['identifiant'].'" >'.$data3['numero_formate'].'</option>
                                                            ';
                                            }
                                                    $req3->closeCursor();
                                                echo '

                                                </select>
                                            <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                                        </div>


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
                       <legend>Absences départs</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">

                                        <div class="form-group">
                                            <label for="absence_depart_arrivee" class="form-label">Nature</label>
                                                <select name="absence_depart_arrivee" class="form-select" id="absence_depart_arrivee" >
                                                <option value="" selected>Sélectionner</option>

                                            ';
                                            require_once 'model/Absence_depart_arriveeManager.php';
                                            $Absence_depart_arriveeManager = new Absence_depart_arriveeManager();
                                            $req3 = $Absence_depart_arriveeManager->getAllAbsence_depart_arrivee();
                                            while ($data3 = $req3->fetch()) {
                                                echo '
                                                                    <option value="'.$data3['identifiant'].'" >'.$data3['etat'].'</option>
                                                                ';
                                            }
                                                        $req3->closeCursor();
                                                echo '

                                                </select>
                                            <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                                        </div>
      
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


                                    <div class="form-group">
                                        <label for="avis_avancement" class="form-label">Avis</label>
                                            <select name="avis_avancement" class="form-select" id="avis_avancement" >
                                                <option value="" selected>Sélectionner</option>

                                        ';
                                        require_once 'model/AvisAvancementManager.php';
                                        $AvisAvancementManager = new AvisAvancementManager();
                                        $req3 = $AvisAvancementManager->getAllAvisAvancement();
                                        while ($data3 = $req3->fetch()) {
                                            echo '
                                                            <option value="'.$data3['identifiant'].'" >'.$data3['intitule'].'</option>
                                                        ';
                                        }
                                                $req3->closeCursor();
                                        echo '

                                            </select>
                                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                                    </div>


                                </div>

                                <div class="col-3 themed-grid-col">      

                                    <p>
                                        <label for="grade_cible" class="form-label">Grade cible</label>
                                        <input type="text" name="grade_cible" value="" class="form-control" />
                                    </p>

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
                       <legend>Primes/Heures référentielles</legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">
                              

                                        <div class="form-group">
                                            <label for="nature_primes_hr" class="form-label">Primes/Heures référentielles</label>
                                                <select name="nature_primes_hr" class="form-select" id="nature_primes_hr" >
                                                    <option value="" selected>Sélectionner</option>

                                            ';
                                            require_once 'model/PrimesHrManager.php';
                                            $PrimesHrManager = new PrimesHrManager();
                                            $req3 = $PrimesHrManager->getAllPrimesHr();
                                            while ($data3 = $req3->fetch()) {
                                                echo '
                                                                <option value="'.$data3['identifiant'].'" >'.$data3['intitule'].'</option>
                                                            ';
                                            }
                                                    $req3->closeCursor();
                                            echo '

                                                </select>
                                            <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                                        </div>


                                </div>

                                <div class="col-3 themed-grid-col">      

                                    <p>
                                        <label for="montant" class="form-label">Montant</label>
                                        <input type="number" name="montant" value="" class="form-control" />
                                    </p>

                                </div>

                                <div class="col-3 themed-grid-col">

                                    <p>
                                        <label for="heures" class="form-label">Heures</label>
                                        <input type="number" name="heures" value="" class="form-control" />
                                    </p>
                
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

?>








<p>
    <button class="btn btn-primary">Créer</button>
</p>

</form>
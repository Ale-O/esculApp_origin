<form action="index.php?action=listEventsSpe&typeEvent=<?php echo $typeEvent; ?>" method="post">
    <legend>Recherche</legend>



        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom : </label>
                        <input type="text" name="nom" class="form-control" />
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="type" class="form-label">Etat :</label>
                            <select name="type" class="form-select" id="type" >
                                <option value="" selected>Sélectionner</option>

                        <?php
                        require_once 'model/typeEventsSpeManager.php';
                        $typeEventsSpeManager = new typeEventsSpeManager();
                        $req1 = $typeEventsSpeManager->getAllTypeEventsSpe();
                        while ($data = $req1->fetch()) {
                            echo '
                                            <option value="'.$data['intitule'].'" >'.$data['intitule'].'</option>
                                        ';
                        }
                                $req1->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="contenu" class="form-label">Contenu : </label>
                        <input type="text" name="contenu" class="form-control" />
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="enseignant" class="form-label">Enseignant : </label>
                        <input type="text" name="enseignant" class="form-control" />
                    </div>
                      
                </div>


        </div>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="debut" class="form-label">Date de début : </label>
                        <input type="date" name="debut" class="form-control" />
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="fin" class="form-label">Date de fin : </label>
                        <input type="date" name="fin" class="form-control" />
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>

<br>

        <div class="form-group">
            <label for="corbeille" class="form-label">Corbeille : </label>
            <input type="checkbox" name="corbeille"/>
        </div>


<hr>







<?php

        switch ($typeEvent) {
            case 'Taches':
                echo '
                   <fieldset>
                       <legend></legend>

                        <div class="row">
                                <div class="col-3 themed-grid-col">
                                         


                                              
                                        <div class="form-group">
                                            <label for="thematiqueTaches" class="form-label">Thématiques</label>
                                                <select name="thematiqueTaches" class="form-select" id="thematiqueTaches" >
                                                    <option value="" selected>Sélectionner</option>

                                            ';
                                            require_once 'model/ThematiqueTachesManager.php';
                                            $ThematiqueTachesManager = new ThematiqueTachesManager();
                                            $req3 = $ThematiqueTachesManager->getAllThematiqueTaches();
                                            while ($data3 = $req3->fetch()) {
                                                echo '
                                                                <option value="'.$data3['intitule'].'" >'.$data3['intitule'].'</option>
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
                       <legend></legend>

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
                                                                    <option value="'.$data3['intitule'].'" >'.$data3['intitule'].'</option>
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

            case 'Absence_departs':
                echo '
                   <fieldset>
                       <legend></legend>

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
                                                                    <option value="'.$data3['etat'].'" >'.$data3['etat'].'</option>
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
                       <legend></legend>

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
                                                                <option value="'.$data3['intitule'].'" >'.$data3['intitule'].'</option>
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
                                            <label for="grade_cible" class="form-label">grade cible : </label>
                                            <input type="text" name="grade_cible" class="form-control" />
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

            case 'Primes_hr':
                echo '
                   <fieldset>
                       <legend></legend>

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
                                                                <option value="'.$data3['intitule'].'" >'.$data3['intitule'].'</option>
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
                                        <label for="montant" class="form-label">Montant supérieur ou égal à </label>
                                        <input type="number" name="montant" value="" class="form-control" />
                                    </p>

                                </div>

                                <div class="col-3 themed-grid-col">

                                    <p>
                                        <label for="heures" class="form-label">Heures supérieures ou égal à </label>
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






        <button class="btn btn-primary">Rechercher</button>

</form>
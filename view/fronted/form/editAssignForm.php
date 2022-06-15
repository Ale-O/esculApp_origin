<form action="index.php?action=modifAssign" method="post">


   <fieldset>
       <legend>Général</legend>

        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="support" class="form-label">Support de poste</label>
                            <select name="support" class="form-select" id="support" >
                                <option value="<?php echo $identifiant_support ?>" selected>Valeur actuelle : <?php echo $numero_formate_support ?></option>

                        <?php 
                        require_once ('model/SupportManager.php');
                        $SupportManager = new SupportManager();
                        $req = $SupportManager->getAllSupport('present');
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '" >' . $data['numero_formate'] .'</option>
                                        ';  
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="enseignant" class="form-label">Enseignant</label>
                            <select name="enseignant" class="form-select" id="enseignant" >
                                <option value="<?php echo $identifiant_enseignant ?>" selected>Valeur actuelle : <?php echo $nom_enseignant ?></option>

                        <?php 
                        require_once ('model/TeacherManager.php');
                        $TeacherManager = new TeacherManager();
                        $req = $TeacherManager->getAllTeachers(present);
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '" >' . $data['nom'] .' - ' . $data['prenom'] . '</option>
                                        ';  
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="debut" class="form-label">Date de début</label>
                    <input type="date" name="debut" value="<?php echo $debut ?>" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="fin" class="form-label">Date de fin</label>
                    <input type="date" name="fin" value="<?php echo $fin ?>" class="form-control" />
                      
                </div>


        </div>


    </fieldset>


<br>
<hr>
<br>


   <fieldset>
       <legend>Emploi</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="emploi" class="form-label">Emploi</label>
                            <select name="emploi" class="form-select" id="emploi" required>
                                <option value="<?php echo $identifiant_emploi ?>" selected>Valeur actuelle : <?php echo $intitule_emploi ?></option>

                                    <?php 
                        require_once ('model/EmploiManager.php');
                        $EmploiManager = new EmploiManager();
                        $req = $EmploiManager->getAllEmploi();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['intitule'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="sous_emploi" class="form-label">Sous-emploi</label>
                            <select name="sous_emploi" class="form-select" id="sous_emploi" >
                                <option value="<?php echo $identifiant_sous_emploi ?>" selected>Valeur actuelle : <?php echo $intitule_sous_emploi ?></option>

                                    <?php 
                        require_once ('model/SousEmploiManager.php');
                        $SousEmploiManager = new SousEmploiManager();
                        $req = $SousEmploiManager->getAllSousEmploi();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant_sous_emploi'] . '">' . $data['intitule_sous_emploi'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

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



   <fieldset>
       <legend>Informations</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <label for="nouvelle_fin_potentielle" class="form-label">Nouvelle fin potentielle</label>
                    <input type="date" name="nouvelle_fin_potentielle" value="<?php echo $nouvelle_fin_potentielle ?>" class="form-control" />

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


<div class="form-group">
          
    <p>
        <label for="renseignements" class="form-label">Renseignements</label>
        
        <textarea name="renseignements" class="form-control" rows="10"><?php echo $renseignements ?></textarea>
    </p>

</div>






<br>
<hr>
<br>


   <fieldset>
       <legend>Suite</legend>

        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <label for="successeur_potentiel" class="form-label">Successeur potentiel</label>
                    <input type="text" name="successeur_potentiel" value="<?php echo $successeur_potentiel ?>" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="chef_successeur" class="form-label">Chef successeur</label>
                            <select name="chef_successeur" class="form-select" id="chef_successeur" >
                                <option value="<?php echo $identifiant_chef_successeur ?>" selected>Valeur actuelle : <?php echo $nom_chef_successeur ?></option>

                        <?php 
                        require_once ('model/TeacherManager.php');
                        $TeacherManager = new TeacherManager();
                        $req = $TeacherManager->getAllTeachers(present);
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '" >' . $data['prenom'] .' - ' . $data['nom'] . '</option>
                                        ';  
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">


                    <div class="form-group">
                        <label for="annee_civile" class="form-label">Annee civile concernée</label>
                            <select name="annee_civile" class="form-select" id="annee_civile" >
                                <option value="<?php echo $identifiant_annee_civile ?>" selected>Valeur actuelle : <?php echo $annee_annee_civile ?></option>

                                    <?php 
                        require_once ('model/AnneeCivileManager.php');
                        $AnneeCivileManager = new AnneeCivileManager();
                        $req = $AnneeCivileManager->getAllAnneeCivile();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['annee'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">


                    <div class="form-group">
                        <label for="validation_fiche" class="form-label">Validation fiche</label>
                            <select name="validation_fiche" class="form-select" id="validation_fiche" >
                                <option value="<?php echo $identifiant_validation_fiche ?>" selected>Valeur actuelle : <?php echo $etat_validation_fiche ?></option>

                                    <?php 
                        require_once ('model/ValidationFicheManager.php');
                        $ValidationFicheManager = new ValidationFicheManager();
                        $req = $ValidationFicheManager->getAllValidationFiche();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
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


   <fieldset>
       <legend>Suivi</legend>

        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="action_affectation" class="form-label">Action affectation</label>
                            <select name="action_affectation" class="form-select" id="action_affectation" >
                                <option value="<?php echo $identifiant_action_affectation ?>" selected>Valeur actuelle : <?php echo $action_affectation ?></option>

                        <?php 
                        require_once ('model/ActionAffectationManager.php');
                        $ActionAffectationManager = new ActionAffectationManager();
                        $req = $ActionAffectationManager->getAllActionAffectation();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '" >' . $data['action'] .'</option>
                                        ';  
                                    }
                                $req->closeCursor();
                        ?>

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





<p>
    <button class="btn btn-primary">Modifier</button>
</p>




<p>
    <label for="numeroEtEnseignant"></label>
    <input type="hidden" name="numeroEtEnseignant" value="<?php echo $numero_formate_support ." ". $nom_enseignant; ?>" />
</p>

<p>
    <label for="ancSupport"></label>
    <input type="hidden" name="ancSupport" value="<?php echo $identifiant_support ?>" />
</p>

<p>
    <label for="ancEnseignant"></label>
    <input type="hidden" name="ancEnseignant" value="<?php echo $identifiant_enseignant ?>" />
</p>

<p>
    <label for="ancDebut"></label>
    <input type="hidden" name="ancDebut" value="<?php echo $debut ?>" />
</p>

<p>
    <label for="ancFin"></label>
    <input type="hidden" name="ancFin" value="<?php echo $fin ?>" />
</p>

<p>
    <label for="ancRenseignements"></label>
    <input type="hidden" name="ancRenseignements" value="<?php echo $renseignements ?>" />
</p>

<p>
    <label for="ancNouvelle_fin_potentielle"></label>
    <input type="hidden" name="ancNouvelle_fin_potentielle" value="<?php echo $nouvelle_fin_potentielle ?>" />
</p>

<p>
    <label for="ancSuccesseur_potentiel"></label>
    <input type="hidden" name="ancSuccesseur_potentiel" value="<?php echo $successeur_potentiel ?>" />
</p>

<p>
    <label for="ancChef_successeur"></label>
    <input type="hidden" name="ancChef_successeur" value="<?php echo $identifiant_chef_successeur ?>" />
</p>

<p>
    <label for="ancAction_affectation"></label>
    <input type="hidden" name="ancAction_affectation" value="<?php echo $identifiant_action_affectation ?>" />
</p>

<p>
    <label for="ancAnnee_civile"></label>
    <input type="hidden" name="ancAnnee_civile" value="<?php echo $identifiant_annee_civile ?>" />
</p>

<p>
    <label for="ancValidation_fiche"></label>
    <input type="hidden" name="ancValidation_fiche" value="<?php echo $identifiant_validation_fiche ?>" />
</p>

<p>
    <label for="ancEmploi"></label>
    <input type="hidden" name="ancEmploi" value="<?php echo $identifiant_emploi ?>" />
</p>

<p>
    <label for="ancSous_emploi"></label>
    <input type="hidden" name="ancSous_emploi" value="<?php echo $identifiant_sous_emploi ?>" />
</p>


<p>
    <label for="identifiant"></label>
    <input type="hidden" name="identifiant" value="<?php echo $identifiant_affectation ?>" />
</p>



</form>

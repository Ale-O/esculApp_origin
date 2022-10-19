<form action="index.php?action=newAssign" method="post">


   <fieldset>
       <legend>Création d'une affectation de support</legend>

        <div class="row">


                <div class="col-3 themed-grid-col">      

                        <div class="form-group">
                            <label for="support" class="form-label">Support de poste</label>
                                <select name="support" class="form-select" id="support" required>
                                    <option value="<?php echo $identifiant_support; ?>" selected>Valeur actuelle : <?php echo $numero_formate_support; ?></option>

                            <?php
                            require_once 'model/SupportManager.php';
                            $SupportManager = new SupportManager();
                            $req = $SupportManager->getAllSupport('present');
                            while ($data = $req->fetch()) {
                                echo '
                                                <option value="'.$data['identifiant'].'" >'.$data['numero_formate'].'</option>
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

                        <label for="debut" class="form-label">Date de début</label>
                        <input type="date" name="debut" class="form-control" value="<?php echo $debut; ?>" required/>

                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">

                        <label for="fin" class="form-label">Date de fin</label>
                        <input type="date" name="fin" class="form-control" value="<?php echo $fin; ?>"/>

                    </div>
                      
                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">



                    </div>

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
                                <option value="<?php echo $identifiant_emploi; ?>" selected>Valeur actuelle : <?php echo $intitule_emploi; ?></option>

                                    <?php
                        require_once 'model/EmploiManager.php';
                        $EmploiManager = new EmploiManager();
                        $req = $EmploiManager->getAllEmploi();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['intitule'].'</option>
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
                                <option value="<?php echo $identifiant_sous_emploi; ?>" selected>Valeur actuelle : <?php echo $intitule_sous_emploi; ?></option>

                                    <?php
                        require_once 'model/SousEmploiManager.php';
                        $SousEmploiManager = new SousEmploiManager();
                        $req = $SousEmploiManager->getAllSousEmploi();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant_sous_emploi'].'">'.$data['intitule_sous_emploi'].'</option>
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



<div class="form-group">
          
    <p>
        <label for="renseignements" class="form-label">Renseignements</label>
        
        <textarea name="renseignements" class="form-control" rows="10"></textarea>
    </p>

</div>






<br>
<hr>
<br>






<p>
    <button class="btn btn-primary">Créer</button>
</p>



    <div class="form-group">

        <label for="enseignant"></label>
        <input type="hidden" name="enseignant" value="<?php echo $identifiant; ?>" />

    </div>

    





</form>



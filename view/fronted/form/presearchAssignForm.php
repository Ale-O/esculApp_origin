<form action="index.php?action=listAssign" method="post">
    <legend>Recherche d'une affectation de support</legend>



        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="support" class="form-label">Support de poste : </label>
                        <input type="text" name="support" class="form-control" value="<?php echo $support; ?>"/>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="enseignant" class="form-label">Enseignant : </label>
                        <input type="text" name="enseignant" class="form-control" value="<?php echo $enseignant; ?>"/>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="emploi" class="form-label">Emploi</label>
                            <select name="emploi" class="form-select" id="emploi">
                                <option value="<?php echo $emploi; ?>" selected><?php echo $emploi; ?></option>

                                    <?php
                        require_once 'model/EmploiManager.php';
                        $EmploiManager = new EmploiManager();
                        $reqList = $EmploiManager->getAllEmploi();
                        while ($dataList = $reqList->fetch()) {
                            echo '
                                            <option value="'.$dataList['intitule'].'">'.$dataList['intitule'].'</option>
                                        ';
                        }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="sous_emploi" class="form-label">Sous-emploi</label>
                            <select name="sous_emploi" class="form-select" id="sous_emploi" >
                                <option value="<?php echo $sous_emploi; ?>" selected><?php echo $sous_emploi; ?></option>

                                    <?php
                        require_once 'model/SousEmploiManager.php';
                        $SousEmploiManager = new SousEmploiManager();
                        $reqList = $SousEmploiManager->getAllSousEmploi();
                        while ($dataList = $reqList->fetch()) {
                            echo '
                                            <option value="'.$dataList['intitule_sous_emploi'].'">'.$dataList['intitule_sous_emploi'].'</option>
                                        ';
                        }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>
                      
                </div>


        </div>


        <br>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="startDate" class="form-label">A partir du : </label>
                        <input type="date" name="startDate" class="form-control" value="<?php echo $startDate; ?>"/>
                    </div>
                    <br>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="fin" class="form-label">Avant le : </label>
                        <input type="date" name="fin" class="form-control" value="<?php echo $fin; ?>"/>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="action_affectation" class="form-label">Action affectation</label>
                            <select name="action_affectation" class="form-select" id="action_affectation" >
                                <option value="<?php echo $action_affectation; ?>" selected>Valeur actuelle : <?php echo $action_affectation; ?></option>

                        <?php
                        require_once 'model/ActionAffectationManager.php';
                        $ActionAffectationManager = new ActionAffectationManager();
                        $reqList = $ActionAffectationManager->getAllActionAffectation();
                        while ($dataList = $reqList->fetch()) {
                            echo '
                                            <option value="'.$dataList['action'].'" >'.$dataList['action'].'</option>
                                        ';
                        }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


        <br>


                <div class="form-group">
                    <label for="corbeille" class="form-label">Corbeille : </label>
                    <input type="checkbox" name="corbeille" <?php echo $corbeilleChecked; ?>/>
                </div>


        <br>







        <button class="btn btn-primary">Rechercher</button>
    </form>




<hr>





<form action="index.php?action=saveSearch" method="post">
    <legend>Enregistrement de la recherche</legend>
        <div class="form-group">
            <label for="quoiTable" class="form-label"></label>
            <input type="hidden" name="quoiTable" value="affectation_support"/>
        </div>
        <div class="form-group">
            <label for="formule" class="form-label"></label>
            <input type="hidden" name="formule" value="<?php echo $support.';'.$enseignant.';'.$emploi.';'.$sous_emploi.';'.$startDate.';'.$fin.';'.$corbeilleChecked.';'.$action_affectation; ?>"/>
        </div>
        <div class="form-group">
            <label for="nomSave" class="form-label">Nom de la recherche : </label>
            <input type="text" name="nomSave"/>
        </div>
        <br>


    <div class="col-md-5 mb-3">
        <label for="modifSearch" class="form-label">Recherches à modifier</label>
            <select name="modifSearch" class="form-select" id="modifSearch" >
                <option value="" selected></option>


        <?php

        $saveSearchManager = new saveSearchManager();
        $reqSave = $saveSearchManager->getAllSaveSearchAssign();
        while ($dataSave = $reqSave->fetch()) {
            echo '
                            <option value="'.$dataSave['identifiant'].'" >'.$dataSave['qui'].' - '.$dataSave['nom'].'</option>
                        ';
        }
                $reqSave->closeCursor();
        ?>

            </select>
        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
    </div>



        <button class="btn btn-primary">Sauvegarder recherche</button>
</form>
<form action="index.php?action=listAssign" method="post">
    <legend>Recherche d'une affectation de support</legend>



        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="support" class="form-label">Support de poste : </label>
                        <input type="text" name="support" class="form-control" />
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="enseignant" class="form-label">Enseignant : </label>
                        <input type="text" name="enseignant" class="form-control" />
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="emploi" class="form-label">Emploi</label>
                            <select name="emploi" class="form-select" id="emploi">
                                <option value="" selected>Sélectionner</option>

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
                                <option value="" selected>Sélectionner</option>

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
                        <input type="date" name="startDate" class="form-control" />
                    </div>
                    <br>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="fin" class="form-label">Avant le : </label>
                        <input type="date" name="fin" class="form-control" />
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="action_affectation" class="form-label">Action affectation</label>
                            <select name="action_affectation" class="form-select" id="action_affectation" >
                                <option value="" selected>Sélectionner</option>

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
                    <input type="checkbox" name="corbeille"/>
                </div>


        <br>







        <button class="btn btn-primary">Rechercher</button>
    </form>
<form action="index.php?action=listEvents" method="post">
    <legend>Recherche</legend>



        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom : </label>
                        <input type="text" name="nom" class="form-control" value="<?php echo $nom ?>"/>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="type" class="form-label">Type :</label>
                            <select name="type" class="form-select" id="type" >
                                <option value="<?php echo $type ?>" selected><?php echo $type ?></option>

                        <?php 
                        require_once ('model/typeEventsManager.php');
                        $typeEventsManager = new typeEventsManager();
                        $req1 = $typeEventsManager->getAllTypeEvents();
                        while ($data = $req1->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['intitule'] . '" >' . $data['intitule'] .'</option>
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
                        <input type="text" name="contenu" class="form-control" value="<?php echo $contenu ?>"/>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="enseignant" class="form-label">Enseignant : </label>
                        <input type="text" name="enseignant" class="form-control" value="<?php echo $enseignant ?>"/>
                    </div>
                      
                </div>


        </div>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="debut" class="form-label">Date de début : </label>
                        <input type="date" name="debut" class="form-control" value="<?php echo $debut ?>"/>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="fin" class="form-label">Date de fin : </label>
                        <input type="date" name="fin" class="form-control" value="<?php echo $fin ?>"/>
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
            <input type="checkbox" name="corbeille" <?php echo $corbeilleChecked ?>/>
        </div>

<br>


        <button class="btn btn-primary">Rechercher</button>

</form>










<hr>

        <form action="index.php?action=saveSearch" method="post">
            <legend>Enregistrement de la recherche</legend>
                <div class="form-group">
                    <label for="quoiTable" class="form-label"></label>
                    <input type="hidden" name="quoiTable" value="evenement"/>
                </div>
                <div class="form-group">
                    <label for="formule" class="form-label"></label>
                    <input type="hidden" name="formule" value="<?php echo $nom.";".$type.";".$contenu.";".$debut.";".$fin.";".$enseignant.";".$corbeilleChecked ?>"/>
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
        $reqSave = $saveSearchManager->getAllSaveSearchEvent();
        while ($dataSave = $reqSave->fetch())
                    {  
                        echo '
                            <option value="' . $dataSave['identifiant'] . '" >'. $dataSave['qui'] .' - '. $dataSave['nom'] .'</option>
                        ';  
                    }
                $reqSave->closeCursor();
        ?>

            </select>
        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
    </div>


                <button class="btn btn-primary">Sauvegarder recherche</button>
        </form>
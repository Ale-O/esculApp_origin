<form action="index.php?action=listSupport" method="post">
    <legend>Recherche d'un support</legend>




        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="numero_formate" class="form-label">Numéro de poste : </label>
                        <input type="text" name="numero_formate" class="form-control" value="<?php echo $numero_formate ?>"/>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="categorie" class="form-label">Catégorie : </label>
                        <input type="text" name="categorie" class="form-control" value="<?php echo $categorie ?>"/>
                    </div>

                </div>

        </div>


        <br>


                <div class="form-group">
                    <label for="corbeille" class="form-label">Corbeille : </label>
                    <input type="checkbox" name="corbeille"/>
                </div>


        <br>


<br>


        <button class="btn btn-primary">Rechercher</button>
    </form>



<hr>





<form action="index.php?action=saveSearch" method="post">
    <legend>Enregistrement de la recherche</legend>
        <div class="form-group">
            <label for="quoiTable" class="form-label"></label>
            <input type="hidden" name="quoiTable" value="support"/>
        </div>
        <div class="form-group">
            <label for="formule" class="form-label"></label>
            <input type="hidden" name="formule" value="<?php echo $numero_formate.";".$categorie.";".$corbeilleChecked ?>"/>
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
        $reqSave = $saveSearchManager->getAllSaveSearchSupport();
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
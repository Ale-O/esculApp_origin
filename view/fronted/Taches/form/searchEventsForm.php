<form action="index.php?action=listEvents" method="post">
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
                        <label for="type" class="form-label">Type :</label>
                            <select name="type" class="form-select" id="type" >
                                <option value="" selected>Sélectionner></option>

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


        <button class="btn btn-primary">Rechercher</button>

</form>
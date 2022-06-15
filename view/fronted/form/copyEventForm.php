<form action="index.php?action=newEvent" method="post">



   <fieldset>
       <legend>Général</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" value="<?php echo $nom ?>"/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="type" class="form-label">Type d'événement</label>
                            <select name="type" class="form-select" id="type" required>
                                <option value="<?php echo $identifiant_type ?>" selected>Valeur actuelle : <?php echo $intitule_type ?></option>

                        <?php 
                        require_once ('model/typeEventsManager.php');
                        $typeEventsManager = new typeEventsManager();
                        $req1 = $typeEventsManager->getAllTypeEvents();
                        while ($data1 = $req1->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data1['identifiant'] . '" >' . $data1['intitule'] .'</option>
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
                        <label for="enseignant" class="form-label">Enseignant</label>
                            <select name="enseignant" class="form-select" id="enseignant" >
                                <option value="<?php echo $identifiant_enseignant ?>" selected>Valeur actuelle : <?php echo $nom_enseignant ?></option>

                        <?php 
                        require_once ('model/TeacherManager.php');
                        $TeacherManager = new TeacherManager();
                        $req2 = $TeacherManager->getAllTeachers(present);
                        while ($data2 = $req2->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data2['identifiant'] . '" >' . $data2['nom'] .' - ' . $data2['prenom'] . '</option>
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
        
        <textarea name="contenu" class="form-control" rows="10"><?php echo $contenu ?></textarea>
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
                        <input type="date" name="debut" class="form-control" required value="<?php echo $debut ?>"/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">      

                    <p>
                        <label for="fin" class="form-label">Date de fin</label>
                        <input type="date" name="fin" class="form-control" value="<?php echo $fin ?>"/>
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










<p>
    <button class="btn btn-primary">Créer</button>
</p>









</form>

<form action="index.php?action=newSupport" method="post">



   <fieldset>
       <legend>Support</legend>

        <div class="row">

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="numero_formate" class="form-label">Numéro de poste</label>
                    <input type="text" name="numero_formate" value="<?php echo $numero_formate; ?>" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="nature" class="form-label">Nature</label>
                    <input type="text" name="nature" value="<?php echo $nature; ?>" class="form-control" />
                      
                </div>

                <div class="col-3 themed-grid-col">
                          
                    <label for="budget" class="form-label">Budget</label>
                    <input type="text" name="budget" value="<?php echo $budget; ?>" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="eotp" class="form-label">Eotp</label>
                    <input type="text" name="eotp" value="<?php echo $eotp; ?>" class="form-control" />
                      
                </div>


        </div>


        <div class="row">

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="quotite" class="form-label">Quotite</label>
                    <input type="number" name="quotite" value="<?php echo $quotite; ?>" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="categorie" class="form-label">Categorie</label>
                    <input type="text" name="categorie" value="<?php echo $categorie; ?>" class="form-control" />
                      
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

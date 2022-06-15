<form action="index.php?action=modifSupport" method="post">







<div class="form-group">
          
    <p>
        <label for="renseignement" class="form-label">Renseignements</label>
        
        <textarea name="renseignement" class="form-control" rows="10"><?php echo $renseignement ?></textarea>
    </p>

</div>






<br>
<hr>
<br>






   <fieldset>
       <legend>Support</legend>

        <div class="row">

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="numero_formate" class="form-label">Numéro de poste</label>
                    <input type="text" name="numero_formate" value="<?php echo $numero_formate ?>" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="nature" class="form-label">Nature</label>
                    <input type="text" name="nature" value="<?php echo $nature ?>" class="form-control" />
                      
                </div>

                <div class="col-3 themed-grid-col">
                          
                    <label for="budget" class="form-label">Budget</label>
                    <input type="text" name="budget" value="<?php echo $budget ?>" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="eotp" class="form-label">Eotp</label>
                    <input type="text" name="eotp" value="<?php echo $eotp ?>" class="form-control" />
                      
                </div>


        </div>


        <div class="row">

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="quotite" class="form-label">Quotite</label>
                    <input type="number" name="quotite" value="<?php echo $quotite ?>" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="categorie" class="form-label">Categorie</label>
                    <input type="text" name="categorie" value="<?php echo $categorie ?>" class="form-control" />
                      
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
    <label for="identifiant"></label>
    <input type="hidden" name="identifiant" value="<?php echo $identifiant ?>" />
</p>

<p>
    <label for="ancNumero_formate"></label>
    <input type="hidden" name="ancNumero_formate" value="<?php echo $numero_formate ?>" />
</p>

<p>
    <label for="ancNature"></label>
    <input type="hidden" name="ancNature" value="<?php echo $nature ?>" />
</p>

<p>
    <label for="ancBudget"></label>
    <input type="hidden" name="ancBudget" value="<?php echo $budget ?>" />
</p>

<p>
    <label for="ancEotp"></label>
    <input type="hidden" name="ancEotp" value="<?php echo $eotp ?>" />
</p>

<p>
    <label for="ancQuotite"></label>
    <input type="hidden" name="ancQuotite" value="<?php echo $quotite ?>" />
</p>

<p>
    <label for="ancCategorie"></label>
    <input type="hidden" name="ancCategorie" value="<?php echo $categorie ?>" />
</p>

<p>
    <label for="ancRenseignement"></label>
    <input type="hidden" name="ancRenseignement" value="<?php echo $renseignement ?>" />
</p>



</form>

<form action="index.php?action=listSuivi" method="post">
    <legend>Recherche</legend>

        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <label for="qui" class="form-label">Utilisateur : </label>
                    <input type="text" name="qui" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">      

                    <label for="quand" class="form-label">Quand : </label>
                    <input type="date" name="quand" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="quoiTable" class="form-label">Table : </label>
                    <input type="text" name="quoiTable" class="form-control" />

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <label for="nomEnregistrement" class="form-label">Enregistrement : </label>
                    <input type="text" name="nomEnregistrement" class="form-control" />
                      
                </div>


        </div>

<br>

        <button class="btn btn-primary">Rechercher</button>

</form>
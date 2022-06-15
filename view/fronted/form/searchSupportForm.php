<form action="index.php?action=listSupport" method="post">
    <legend>Recherche d'un support</legend>



        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="numero_formate" class="form-label">Numéro de poste : </label>
                        <input type="text" name="numero_formate" class="form-control" />
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="categorie" class="form-label">Catégorie : </label>
                        <input type="text" name="categorie" class="form-control" />
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
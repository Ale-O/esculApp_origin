<form action="index.php?action=listTeacher" method="post">
    <div class="col-md-5 mb-3">
        <label for="loadSearch">Recherches enregistrées</label>
            <select name="loadSearch" class="custom-select d-block w-100" id="loadSearch" >
                <option value="">Sélectionner</option>

        <?php
        $saveSearchManager = new saveSearchManager();
        $req = $saveSearchManager->getAllSaveSearch();
        while ($data = $req->fetch()) {
            echo '
                            <option value="'.$data['identifiant'].'" >'.$data['nom'].'</option>
                        ';
        }
                $req->closeCursor();
        ?>

            </select>
        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
    </div>

    <p>
        <input type="submit" value="Charger" />
    </p>

    </form>
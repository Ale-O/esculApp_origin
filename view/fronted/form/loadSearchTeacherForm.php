<hr>
<form action="index.php?action=listTeacher" method="post">
    <div class="col-md-5 mb-3">
        <label for="loadSearch" class="form-label">Recherches enregistrées</label>
            <select name="loadSearch" class="form-select" id="loadSearch" >


        <?php

        if (isset($presearch)) {
            echo
            '
            
            <option value="'.$dataSaveLoad['identifiant'].'" selected>Valeur actuelle : '.$dataSaveLoad['qui'].' - '.$dataSaveLoad['nom'].' </option>

            '
            ;
        }

        $saveSearchManager = new saveSearchManager();
        $reqSave = $saveSearchManager->getAllSaveSearchTeacher();
        while ($dataSave = $reqSave->fetch()) {
            echo '
                            <option value="'.$dataSave['identifiant'].'" >'.$dataSave['qui'].' - '.$dataSave['nom'].'</option>
                        ';
        }
                $reqSave->closeCursor();
        ?>

            </select>
        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
    </div>

    <p>
        <button class="btn btn-primary">Charger</button>
    </p>

    </form>

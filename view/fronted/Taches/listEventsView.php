<?php ob_start(); ?>


    <p>
    <a href="index.php?action=createEvent" class="btn btn-primary">Nouvel événement</a>
    </p>


    <?php

    if (isset($corbeille)) {
        $corbeilleChecked = ($corbeille == 'corbeille') ? 'checked' : '';
    }

    if (isset($search)) {
        require 'view/fronted/form/presearchEventsForm.php';

        echo
        '
        <br>
        <p>
        <a href="index.php?action=exportListEvents&corbeille='.$corbeille.'&nom='.$nom.'&type='.$type.'&contenu='.$contenu.'&debut='.$debut.'&fin='.$fin.'&enseignant='.$enseignant.'" class="btn btn-primary">Export</a>
        </p>

        '
        ;
    } else {
        require 'view/fronted/form/searchEventsForm.php';

        echo
        '
        <br>
        <p>
        <a href="index.php?action=exportAllEvents" class="btn btn-primary">Export</a>
        </p>

        '
        ;
    }

    require 'view/fronted/form/loadSearchEventsForm.php';

        echo '

       <hr>
       <table class="table table-bordered table-striped table-condensed">
        <h4>Les évenements</h4>
       <thead>
          <tr>
                <th>Edit</th>
                <th>Copy</th>
                <th>Voir</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Contenu</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Enseignant</th>
       </thead>
       <tbody>';

            while ($data = $req->fetch()) {
                echo '<tr>

                <td><a href="index.php?action=editEvent&identifiant='.$data['identifiant'].'">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                </svg>

                </a>
                </td>


                <td><a href="index.php?action=copyEvent&identifiant='.$data['identifiant'].'">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
                  <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                </svg>

                </a>
                </td>


                <td><a href="index.php?action=event&identifiant='.$data['identifiant'].'">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>

                </a>
                </td>

                <td>'.$data['nom'].'</td>
                <td>'.$data['type'].'</td>
                <td>'.$data['contenu'].'</td>
                <td>'.$data['debut'].'</td>
                <td>'.$data['fin'].'</td>
                <td>'.$data['enseignant'].'</td>

                    </tr>';
            }
        echo '</tbody></table>';

        $req->closeCursor();

        if (isset($presearch)) {
            echo
            '
            
            <p>
            <a href="index.php?action=suppSaveSearch&formule='.$formule.'" class="btn btn-danger">Supprimer recherche</a>
            </p>

            '
            ;
        }

    ?>

                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


                    

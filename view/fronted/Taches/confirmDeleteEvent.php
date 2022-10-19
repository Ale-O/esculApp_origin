<?php ob_start(); ?>

   
    <?php

    $data = $req->fetch();

    echo

    '<p>
    <a href="index.php?action=deleteEvent&identifiant='.$data['identifiant'].'&nom='.$data['nom'].'&type='.$data['type'].'&contenu='.$data['contenu'].'" class="btn btn-danger">Supprimer événement</a>
    </p>

        <dt>Nom</dt><dd>'
        .$data['nom'].' </dd>
        <dt>Type</dt><dd> '
        .$data['type'].' </dd>
        <dt>Contenu</dt><dd> '
        .$data['contenu'].' </dd>
        <dt>Date de début</dt><dd> '
        .$data['debut'].' </dd>
        <dt>Date de fin</dt><dd> '
        .$data['fin'].' </dd>
        <dt>Enseignant</dt><dd> '
        .$data['enseignant'].' </dd>';

    $req->closeCursor();

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


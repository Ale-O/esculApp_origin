<?php ob_start(); ?>

   
    <?php

    $data = $req->fetch();

    echo

    '<p>
    <a href="index.php?action=deleteAssign&identifiant_affectation='.$identifiant_affectation.'&nom='.$data['nom_enseignant'].'&prenom='.$data['prenom_enseignant'].'&numero='.$data['numero_formate_support'].'&identifiant_enseignant='.$data['identifiant_enseignant'].'" class="btn btn-danger">Supprimer affectation support</a>
    </p>

        <dt>Support</dt><dd>'
        .$data['numero_formate_support'].' </dd>
        <dt>Enseignant</dt><dd> '
        .$data['nom_enseignant'].' </dd>
        <dt>Date de début</dt><dd> '
        .$data['debut'].' </dd>
        <dt>Date de fin</dt><dd> '
        .$data['fin'].' </dd>';

    $req->closeCursor();

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


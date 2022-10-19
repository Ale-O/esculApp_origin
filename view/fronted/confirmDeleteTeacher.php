<?php ob_start(); ?>

   
    <?php

    $data = $req->fetch();

    echo

    '<p>
    <a href="index.php?action=deleteTeacher&identifiant='.$data['identifiant'].'&nom='.$data['nom'].'&prenom='.$data['prenom'].'" class="btn btn-danger">Supprimer enseignant</a>
    </p>


    <dt>Courriel</dt><dd>'
        .$data['courriel_univ'].' </dd>
        <dt>Nom</dt><dd> '
        .$data['nom'].' </dd>
        <dt>Nom Marital</dt><dd> '
        .$data['nom_jeune_fille'].' </dd>
        <dt>Prénom</dt><dd> '
        .$data['prenom'].' </dd>
        <dt>CNU</dt><dd> '
        .$data['libelle_cnu'].' </dd>';

    $req->closeCursor();

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


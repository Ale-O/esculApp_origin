<?php ob_start(); ?>

   
    <?php

    $data = $req->fetch();

    echo

    '<p>
    <a href="index.php?action=deleteSupport&identifiant='.$identifiant.'&numero_formate='.$data['numero_formate'].'" class="btn btn-danger">Supprimer support</a>
    </p>

        <dt>Numéro de poste</dt><dd>'
        .$data['numero_formate'].' </dd>
        <dt>Nature</dt><dd> '
        .$data['nature'].' </dd>
        <dt>Budget</dt><dd> '
        .$data['budget'].' </dd>
        <dt>Eotp</dt><dd> '
        .$data['eotp'].' </dd>
        <dt>Quotite</dt><dd> '
        .$data['quotite'].' </dd>
        <dt>Catégorie</dt><dd> '
        .$data['categorie'].' </dd>';

    $req->closeCursor();

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


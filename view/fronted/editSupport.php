<?php ob_start(); ?>

   
    <?php

        $SupportManager = new SupportManager();
        $req = $SupportManager->getSupportsById($identifiant);

        $data = $req->fetch();

            $numero_formate = $data['numero_formate'];
            $nature = $data['nature'];
            $budget = $data['budget'];
            $eotp = $data['eotp'];
            $quotite = $data['quotite'];
            $categorie = $data['categorie'];
            $renseignement = $data['renseignement'];

        $req->closeCursor();

        require 'view/fronted/form/editSupportForm.php';

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


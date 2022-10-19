<?php ob_start(); ?>

   
    <?php

        if (isset($error)) {
            echo 'mauvais mot de passe';
        }

        require 'view/fronted/form/profilForm.php';

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


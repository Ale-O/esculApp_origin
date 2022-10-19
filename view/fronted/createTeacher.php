<?php ob_start(); ?>

   
    <?php

        require 'view/fronted/form/createTeacherForm.php';

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


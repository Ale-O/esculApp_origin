<?php ob_start(); ?>

   
    <?php 

        require ("view/fronted/Spe/form/createEventForm.php");

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>


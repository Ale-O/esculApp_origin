<?php ob_start(); ?>



    <?php require 'view/fronted/import/importMangueForm.php'; ?>


    <?php require 'view/fronted/import/importChuForm.php'; ?>
    
                        

<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>
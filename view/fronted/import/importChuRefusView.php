<?php ob_start(); ?>


    <?php echo '


    <br>
    <hr>
    <h4>Désolé, cet import a échoué. Veuillez privilégier le format csv</h4>
    <hr>
    <br>


    '; ?>



    <?php require("view/fronted/import/importChuForm.php"); ?>   
                  

                       

<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>
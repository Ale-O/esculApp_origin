<?php ob_start(); ?>

   
    <?php

        $TeacherManager = new TeacherManager();
        $req = $TeacherManager->getTeachersById($identifiant);

        $data = $req->fetch();

        require 'view/fronted/data/dataTeacher.php';

        $req->closeCursor();

        require 'view/fronted/form/editTeacherForm.php';

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


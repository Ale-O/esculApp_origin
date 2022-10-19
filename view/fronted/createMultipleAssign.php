<?php ob_start(); ?>

   
    <?php

        $assignManager = new assignManager();
        $reqAssign = $assignManager->getAssignsById($arrayData[0]);

        $dataAssign = $reqAssign->fetch();

        $TeacherManager = new TeacherManager();
        $reqTeacher = $TeacherManager->getTeachersById($identifiant);

        $dataTeacher = $reqTeacher->fetch();

        $identifiant_emploi = $dataTeacher['identifiant_emploi'];
        $intitule_emploi = $dataTeacher['intitule_emploi'];

        $identifiant_sous_emploi = $dataTeacher['identifiant_sous_emploi'];
        $intitule_sous_emploi = $dataTeacher['intitule_sous_emploi'];

        $reqTeacher->closeCursor();

        require 'view/fronted/form/createMultipleAssignForm.php';

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


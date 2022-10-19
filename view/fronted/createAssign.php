<?php ob_start(); ?>

   
    <?php

        $TeacherManager = new TeacherManager();
        $reqTeacher = $TeacherManager->getTeachersById($identifiant);

        $dataTeacher = $reqTeacher->fetch();

        $identifiant_emploi = $dataTeacher['identifiant_emploi'];
        $intitule_emploi = $dataTeacher['intitule_emploi'];

        $identifiant_sous_emploi = $dataTeacher['identifiant_sous_emploi'];
        $intitule_sous_emploi = $dataTeacher['intitule_sous_emploi'];

        if (empty($debut)) {
            $debut = $dataTeacher['date_dernier_changement'];
        }

        if (empty($fin)) {
            $fin = $dataTeacher['fin_enseignant'];
        }

        if (empty($identifiant_support)) {
            $identifiant_support = 479;
        }

        $supportManager = new supportManager();

        $reqSupport = $supportManager->getSupportsById($identifiant_support);

        $dataSupport = $reqSupport->fetch();

        $numero_formate_support = $dataSupport['numero_formate'];

        $reqTeacher->closeCursor();

        require 'view/fronted/form/createAssignForm.php';

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


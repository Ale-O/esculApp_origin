<?php ob_start(); ?>

   
    <?php 

        $eventsManager = new eventsManager();
        $req = $eventsManager->getEventsById($identifiant);
        
        $data = $req->fetch();

        
            $nom = $data['nom'];
            $contenu = $data['contenu'];
            $intitule_type = $data['type'];
            $identifiant_type = $data['identifiant_type'];
            $debut = $data['debut2'];
            $fin = $data['fin2'];
            $nom_enseignant = $data['enseignant'];
            $identifiant_enseignant = $data['identifiant_enseignant'];





        $req->closeCursor();


        require ("view/fronted/form/editEventForm.php");

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>


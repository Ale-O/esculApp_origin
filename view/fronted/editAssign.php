<?php ob_start(); ?>

   
    <?php

        $AssignManager = new AssignManager();
        $req = $AssignManager->getAssignsById($identifiant_affectation);

        $data = $req->fetch();

            $numero_formate_support = $data['numero_formate_support'];
            $identifiant_support = $data['identifiant_support'];
            $nom_enseignant = $data['nom_enseignant'];
            $identifiant_enseignant = $data['identifiant_enseignant'];
            $debut = $data['debut2'];
            $fin = $data['fin2'];
            $renseignements = $data['renseignements'];
            $nouvelle_fin_potentielle = $data['nouvelle_fin_potentielle'];
            $successeur_potentiel = $data['successeur_potentiel'];
            $nom_chef_successeur = $data['nom_chef_successeur'];
            $identifiant_chef_successeur = $data['identifiant_chef_successeur'];
            $action_affectation = $data['action_affectation'];
            $identifiant_action_affectation = $data['identifiant_action_affectation'];
            $annee_annee_civile = $data['annee_annee_civile'];
            $identifiant_annee_civile = $data['identifiant_annee_civile'];
            $etat_validation_fiche = $data['etat_validation_fiche'];
            $identifiant_validation_fiche = $data['identifiant_validation_fiche'];
            $intitule_emploi = $data['emploi_enseignant'];
            $intitule_sous_emploi = $data['sous_emploi_enseignant'];
            $identifiant_emploi = $data['emploi_identifiant'];
            $identifiant_sous_emploi = $data['sous_emploi_identifiant'];

        $req->closeCursor();

        require 'view/fronted/form/editAssignForm.php';

    ?>
    
                    
<?php $content = ob_get_clean(); ?>
<?php require 'view/fronted/template/template.php'; ?>


<?php

require_once 'model/Manager.php';

class IdMangueManager extends mgmtHU\Model\Manager
{
    public function getAllImportIdMangue()
    {
        $db = $this->dbConnect();
        $allIdMangue = $db->prepare('
            SELECT * 
            FROM id_mangue
            ');
        $allIdMangue->execute([]);

        return $allIdMangue;
    }

    public function getAllIdMangue()
    {
        $db = $this->dbConnect();
        $allIdMangue = $db->prepare('
            SELECT * 
            FROM id_mangue
            WHERE id_mangue.corps = "PUPH"  
                OR id_mangue.corps = "SANS CORPS" 
                OR id_mangue.corps = "MCF" 
                OR id_mangue.corps = "MCUPH" 
                OR id_mangue.corps = "PR" 
                OR id_mangue.corps = "MCU MG" 
                OR id_mangue.corps = "PRCE" 
                OR id_mangue.corps = "PU MG"
                OR id_mangue.corps = ""
            ');
        $allIdMangue->execute([]);

        return $allIdMangue;
    }

    public function getIdMangueById($identifiant)
    {
        $db = $this->dbConnect();
        $idMangue = $db->prepare('
            SELECT * FROM id_mangue
            WHERE id_mangue.identifiant = :identifiant
            ');
        $idMangue->execute([
            'identifiant' => $identifiant,
            ]);

        return $idMangue;
    }

    public function createIdMangue($identifiant, $sexe, $civilite, $nom, $prenom, $nom_de_famille, $date_de_naissance, $lieu_de_naissance, $departement_de_naissance, $pays_de_naissance, $pays_national, $no_insee, $pers_id, $date_debut, $date_fin, $corps, $grade, $echelon, $position, $quotite, $indice, $statut, $type_contrat, $reliquat_annee, $reliquat_mois, $reliquat_jours, $conserv_annees, $conserv_mois, $Conserv_jours, $debut_aff, $fin_aff, $aff_niv1, $aff_niv2, $aff_globale, $quot_aff, $anc_gen, $anc_svc, $debut_occ, $fin_occ, $quot_occ, $quot_fin, $emploi, $implantation, $chapitre, $adresse, $code_postal, $ville, $code_spec, $specialisation)
    {
        $db = $this->dbConnect();
        $newIdMangue = $db->prepare('INSERT INTO id_mangue (identifiant,sexe,civilite,nom,prenom,nom_de_famille,date_de_naissance,lieu_de_naissance,departement_de_naissance,pays_de_naissance,pays_national,no_insee,pers_id,date_debut,date_fin,corps,grade,echelon,position,quotite,indice,statut,type_contrat,reliquat_annee,reliquat_mois,reliquat_jours,conserv_annees,conserv_mois,Conserv_jours,debut_aff,fin_aff,aff_niv1,aff_niv2,aff_globale,quot_aff,anc_gen,anc_svc,debut_occ,fin_occ,quot_occ,quot_fin,emploi,implantation,chapitre,adresse,code_postal,ville,code_spec,specialisation) 

        VALUES (:identifiant, :sexe, :civilite, :nom, :prenom, :nom_de_famille, :date_de_naissance, :lieu_de_naissance, :departement_de_naissance, :pays_de_naissance, :pays_national, :no_insee, :pers_id, :date_debut, :date_fin, :corps, :grade, :echelon, :position, :quotite, :indice, :statut, :type_contrat, :reliquat_annee, :reliquat_mois, :reliquat_jours, :conserv_annees, :conserv_mois, :Conserv_jours, :debut_aff, :fin_aff, :aff_niv1, :aff_niv2, :aff_globale, :quot_aff, :anc_gen, :anc_svc, :debut_occ, :fin_occ, :quot_occ, :quot_fin, :emploi, :implantation, :chapitre, :adresse, :code_postal, :ville, :code_spec, :specialisation);');

        $newIdMangue->execute([
            'identifiant' => $identifiant,
            'sexe' => $sexe,
            'civilite' => $civilite,
            'nom' => $nom,
            'prenom' => $prenom,
            'nom_de_famille' => $nom_de_famille,
            'date_de_naissance' => $date_de_naissance,
            'lieu_de_naissance' => $lieu_de_naissance,
            'departement_de_naissance' => $departement_de_naissance,
            'pays_de_naissance' => $pays_de_naissance,
            'pays_national' => $pays_national,
            'no_insee' => $no_insee,
            'pers_id' => $pers_id,
            'date_debut' => $date_debut,
            'date_fin' => $date_fin,
            'corps' => $corps,
            'grade' => $grade,
            'echelon' => $echelon,
            'position' => $position,
            'quotite' => $quotite,
            'indice' => $indice,
            'statut' => $statut,
            'type_contrat' => $type_contrat,
            'reliquat_annee' => $reliquat_annee,
            'reliquat_mois' => $reliquat_mois,
            'reliquat_jours' => $reliquat_jours,
            'conserv_annees' => $conserv_annees,
            'conserv_mois' => $conserv_mois,
            'Conserv_jours' => $Conserv_jours,
            'debut_aff' => $debut_aff,
            'fin_aff' => $fin_aff,
            'aff_niv1' => $aff_niv1,
            'aff_niv2' => $aff_niv2,
            'aff_globale' => $aff_globale,
            'quot_aff' => $quot_aff,
            'anc_gen' => $anc_gen,
            'anc_svc' => $anc_svc,
            'debut_occ' => $debut_occ,
            'fin_occ' => $fin_occ,
            'quot_occ' => $quot_occ,
            'quot_fin' => $quot_fin,
            'emploi' => $emploi,
            'implantation' => $implantation,
            'chapitre' => $chapitre,
            'adresse' => $adresse,
            'code_postal' => $code_postal,
            'ville' => $ville,
            'code_spec' => $code_spec,
            'specialisation' => $specialisation,
            ]);

        return $newIdMangue;
    }

    public function modifIdMangue($identifiant, $sexe, $civilite, $nom, $prenom, $nom_de_famille, $date_de_naissance, $lieu_de_naissance, $departement_de_naissance, $pays_de_naissance, $pays_national, $no_insee, $pers_id, $date_debut, $date_fin, $corps, $grade, $echelon, $position, $quotite, $indice, $statut, $type_contrat, $reliquat_annee, $reliquat_mois, $reliquat_jours, $conserv_annees, $conserv_mois, $Conserv_jours, $debut_aff, $fin_aff, $aff_niv1, $aff_niv2, $aff_globale, $quot_aff, $anc_gen, $anc_svc, $debut_occ, $fin_occ, $quot_occ, $quot_fin, $emploi, $implantation, $chapitre, $adresse, $code_postal, $ville, $code_spec, $specialisation)
    {
        $db = $this->dbConnect();
        $modifIdMangue = $db->prepare('


            UPDATE `id_mangue` 

            SET 

            sexe = :sexe,
            civilite = :civilite,
            nom = :nom,
            prenom = :prenom,
            nom_de_famille = :nom_de_famille,
            date_de_naissance = :date_de_naissance,
            lieu_de_naissance = :lieu_de_naissance,
            departement_de_naissance = :departement_de_naissance,
            pays_de_naissance = :pays_de_naissance,
            pays_national = :pays_national,
            no_insee = :no_insee,
            pers_id = :pers_id,
            date_debut = :date_debut,
            date_fin = :date_fin,
            corps = :corps,
            grade = :grade,
            echelon = :echelon,
            position = :position,
            quotite = :quotite,
            indice = :indice,
            statut = :statut,
            type_contrat = :type_contrat,
            reliquat_annee = :reliquat_annee,
            reliquat_mois = :reliquat_mois,
            reliquat_jours = :reliquat_jours,
            conserv_annees = :conserv_annees,
            conserv_mois = :conserv_mois,
            Conserv_jours = :Conserv_jours,
            debut_aff = :debut_aff,
            fin_aff = :fin_aff,
            aff_niv1 = :aff_niv1,
            aff_niv2 = :aff_niv2,
            aff_globale = :aff_globale,
            quot_aff = :quot_aff,
            anc_gen = :anc_gen,
            anc_svc = :anc_svc,
            debut_occ = :debut_occ,
            fin_occ = :fin_occ,
            quot_occ = :quot_occ,
            quot_fin = :quot_fin,
            emploi = :emploi,
            implantation = :implantation,
            chapitre = :chapitre,
            adresse = :adresse,
            code_postal = :code_postal,
            ville = :ville,
            code_spec = :code_spec,
            specialisation = :specialisation


            WHERE id_mangue.identifiant = :identifiant;


        ');

        $modifIdMangue->execute([
            'identifiant' => $identifiant,
            'sexe' => $sexe,
            'civilite' => $civilite,
            'nom' => $nom,
            'prenom' => $prenom,
            'nom_de_famille' => $nom_de_famille,
            'date_de_naissance' => $date_de_naissance,
            'lieu_de_naissance' => $lieu_de_naissance,
            'departement_de_naissance' => $departement_de_naissance,
            'pays_de_naissance' => $pays_de_naissance,
            'pays_national' => $pays_national,
            'no_insee' => $no_insee,
            'pers_id' => $pers_id,
            'date_debut' => $date_debut,
            'date_fin' => $date_fin,
            'corps' => $corps,
            'grade' => $grade,
            'echelon' => $echelon,
            'position' => $position,
            'quotite' => $quotite,
            'indice' => $indice,
            'statut' => $statut,
            'type_contrat' => $type_contrat,
            'reliquat_annee' => $reliquat_annee,
            'reliquat_mois' => $reliquat_mois,
            'reliquat_jours' => $reliquat_jours,
            'conserv_annees' => $conserv_annees,
            'conserv_mois' => $conserv_mois,
            'Conserv_jours' => $Conserv_jours,
            'debut_aff' => $debut_aff,
            'fin_aff' => $fin_aff,
            'aff_niv1' => $aff_niv1,
            'aff_niv2' => $aff_niv2,
            'aff_globale' => $aff_globale,
            'quot_aff' => $quot_aff,
            'anc_gen' => $anc_gen,
            'anc_svc' => $anc_svc,
            'debut_occ' => $debut_occ,
            'fin_occ' => $fin_occ,
            'quot_occ' => $quot_occ,
            'quot_fin' => $quot_fin,
            'emploi' => $emploi,
            'implantation' => $implantation,
            'chapitre' => $chapitre,
            'adresse' => $adresse,
            'code_postal' => $code_postal,
            'ville' => $ville,
            'code_spec' => $code_spec,
            'specialisation' => $specialisation,
            ]);

        return $modifIdMangue;
    }
}

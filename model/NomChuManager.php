<?php

require_once 'model/Manager.php';

class NomChuManager extends mgmtHU\Model\Manager
{
    public function getAllNomChu()
    {
        $db = $this->dbConnect();
        $allNomChu = $db->prepare('SELECT * FROM nom_chu');
        $allNomChu->execute([]);

        return $allNomChu;
    }

    public function createNomChu($identifiant, $discipline, $specialite, $pole, $site, $service, $titre, $nom, $prenom, $num_ordre, $fonction, $statut, $temps_partiel, $affectation)
    {
        $db = $this->dbConnect();
        $newNomChu = $db->prepare('INSERT INTO nom_chu (identifiant, discipline, specialite, pole, site, service, titre, nom, prenom, num_ordre, fonction, statut, temps_partiel, affectation) 

        VALUES (:identifiant, :discipline, :specialite, :pole, :site, :service, :titre, :nom, :prenom, :num_ordre, :fonction, :statut, :temps_partiel, :affectation);');

        $newNomChu->execute([
            'identifiant' => $identifiant,
            'discipline' => $discipline,
            'specialite' => $specialite,
            'pole' => $pole,
            'site' => $site,
            'service' => $service,
            'titre' => $titre,
            'nom' => $nom,
            'prenom' => $prenom,
            'num_ordre' => $num_ordre,
            'fonction' => $fonction,
            'statut' => $statut,
            'temps_partiel' => $temps_partiel,
            'affectation' => $affectation,
            ]);

        return $newNomChu;
    }

    public function modifNomChu($identifiant, $discipline, $specialite, $pole, $site, $service, $titre, $nom, $prenom, $num_ordre, $fonction, $statut, $temps_partiel, $affectation)
    {
        $db = $this->dbConnect();
        $modifNomChu = $db->prepare('


            UPDATE `nom_chu` 

            SET 

            discipline = :discipline,
            specialite = :specialite,
            pole = :pole,
            site = :site,
            service = :service,
            titre = :titre,
            nom = :nom,
            prenom = :prenom,
            num_ordre = :num_ordre,
            fonction = :fonction,
            statut = :statut,
            temps_partiel = :temps_partiel,
            affectation = :affectation


            WHERE nom_chu.identifiant = :identifiant;


        ');

        $modifNomChu->execute([
            'identifiant' => $identifiant,
            'discipline' => $discipline,
            'specialite' => $specialite,
            'pole' => $pole,
            'site' => $site,
            'service' => $service,
            'titre' => $titre,
            'nom' => $nom,
            'prenom' => $prenom,
            'num_ordre' => $num_ordre,
            'fonction' => $fonction,
            'statut' => $statut,
            'temps_partiel' => $temps_partiel,
            'affectation' => $affectation,
            ]);

        return $modifNomChu;
    }
}

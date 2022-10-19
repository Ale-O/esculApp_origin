<?php

require_once 'model/Manager.php';

class saveSearchManager extends mgmtHU\Model\Manager
{
    public function getAllSaveSearch()
    {
        $select = $this->selectSaveSearchManager();

        $db = $this->dbConnect();
        $allSaveSearch = $db->prepare('
                '.$select.'
                ORDER BY qui
                ');
        $allSaveSearch->execute([]);

        return $allSaveSearch;
    }

    public function getSaveSearchById($identifiant)
    {
        $select = $this->selectSaveSearchManager();

        $db = $this->dbConnect();
        $allSaveSearch = $db->prepare('
                '.$select.'
                WHERE ss.identifiant = :identifiant
                ');
        $allSaveSearch->execute([
                'identifiant' => $identifiant,
                ]);

        return $allSaveSearch;
    }

    public function getAllSaveSearchTeacher()
    {
        $select = $this->selectSaveSearchManager();

        $db = $this->dbConnect();
        $allSaveSearch = $db->prepare('
                '.$select.'
                WHERE ss.quoiTable = :quoiTable
                ORDER BY qui
                ');
        $allSaveSearch->execute([
                'quoiTable' => enseignants,
                ]);

        return $allSaveSearch;
    }

    public function getAllSaveSearchAssign()
    {
        $select = $this->selectSaveSearchManager();

        $db = $this->dbConnect();
        $allSaveSearch = $db->prepare('
                '.$select.'
                WHERE ss.quoiTable = :quoiTable
                ORDER BY qui
                ');
        $allSaveSearch->execute([
                'quoiTable' => affectation_support,
                ]);

        return $allSaveSearch;
    }

    public function getAllSaveSearchEvent()
    {
        $select = $this->selectSaveSearchManager();

        $db = $this->dbConnect();
        $allSaveSearch = $db->prepare('
                '.$select.'
                WHERE ss.quoiTable = :quoiTable
                ORDER BY qui
                ');
        $allSaveSearch->execute([
                'quoiTable' => evenement,
                ]);

        return $allSaveSearch;
    }

    public function getAllSaveSearchEventSpe($typeEvent)
    {
        $select = $this->selectSaveSearchManager();

        $db = $this->dbConnect();
        $allSaveSearch = $db->prepare('
                '.$select.'
                WHERE ss.quoiTable = :quoiTable
                ORDER BY qui
                ');
        $allSaveSearch->execute([
                'quoiTable' => $typeEvent,
                ]);

        return $allSaveSearch;
    }

    public function getAllSaveSearchSupport()
    {
        $select = $this->selectSaveSearchManager();

        $db = $this->dbConnect();
        $allSaveSearch = $db->prepare('
                '.$select.'
                WHERE ss.quoiTable = :quoiTable
                ORDER BY qui
                ');
        $allSaveSearch->execute([
                'quoiTable' => support,
                ]);

        return $allSaveSearch;
    }

    public function createSaveSearch($qui, $quoiTable, $nom, $formule)
    {
        $db = $this->dbConnect();
        $newSaveSearch = $db->prepare('INSERT INTO save_search (identifiant,qui,quand,quoiTable,nom,formule) 

            VALUES (NULL,:qui,CURRENT_TIMESTAMP,:quoiTable,:nom,:formule);');

        $newSaveSearch->execute([
                'qui' => $qui,
                'quoiTable' => $quoiTable,
                'nom' => $nom,
                'formule' => $formule,
                ]);

        return $newSaveSearch;
    }

    public function modifSaveSearch($identifiant, $qui, $quoiTable, $nom, $formule)
    {
        $db = $this->dbConnect();
        $editSaveSearch = $db->prepare('

            UPDATE `save_search` 

            SET 

            qui = :qui,
            quoiTable = :quoiTable,
            nom = :nom,
            formule = :formule

            WHERE save_search.identifiant = :identifiant;

            ');

        $editSaveSearch->execute([
                'identifiant' => $identifiant,
                'qui' => $qui,
                'quoiTable' => $quoiTable,
                'nom' => $nom,
                'formule' => $formule,
                ]);

        return $editSaveSearch;
    }

    public function suppSaveSearch($formule)
    {
        $select = $this->selectSaveSearchManager();

        $db = $this->dbConnect();
        $suppSaveSearch = $db->prepare('


                DELETE FROM `save_search` WHERE save_search.formule = :formule


                ');
        $suppSaveSearch->execute([
                'formule' => $formule,
                ]);

        return $suppSaveSearch;
    }
}

<?php

require_once 'model/Manager.php';

class SuiviManager extends mgmtHU\Model\Manager
{
    public function getAllSuivi()
    {
        $select = $this->selectSuiviManager();

        $db = $this->dbConnect();
        $allSuivi = $db->prepare('
            '.$select.'
            ORDER BY quand
            ');
        $allSuivi->execute([]);

        return $allSuivi;
    }

    public function getSuivi($qui, $quand, $quoiTable, $nomEnregistrement)
    {
        $select = $this->selectSuiviManager();

        $qui_vide = ($qui == '') ? 'OR s.qui != \'\' OR s.qui is NULL' : '';
        $quand_vide = ($quand == '') ? 'OR s.quand != \'\' OR s.quand is NULL' : '';
        $quoiTable_vide = ($quoiTable == '') ? 'OR s.quoiTable != \'\' OR s.quoiTable is NULL' : '';
        $nomEnregistremen_vide = ($nomEnregistrement == '') ? 'OR s.nomEnregistrement != \'\' OR s.nomEnregistrement is NULL' : '';

        $db = $this->dbConnect();
        $listSuivi = $db->prepare('
            '.$select.'
            WHERE (s.qui LIKE :qui '.$qui_vide.') AND (s.quand LIKE :quand '.$quand_vide.') AND (s.quoiTable LIKE :quoiTable '.$quoiTable_vide.') AND (s.nomEnregistrement LIKE :nomEnregistrement '.$nomEnregistremen_vide.')
            ORDER BY quand
            ');

        $listSuivi->execute([
            'qui' => '%'.$qui.'%',
            'quand' => '%'.$quand.'%',
            'quoiTable' => '%'.$quoiTable.'%',
            'nomEnregistrement' => '%'.$nomEnregistrement.'%',
            ]);

        return $listSuivi;
    }

    public function createSuivi($qui, $quoiTable, $nomEnregistrement, $idEnregistrement, $champsEnregistrement, $ancienneValeur, $nouvelleValeur)
    {
        $db = $this->dbConnect();
        $newSuivi = $db->prepare('INSERT INTO suivi (identifiant,qui,quand,quoiTable,nomEnregistrement,idEnregistrement,champsEnregistrement,ancienneValeur,nouvelleValeur) 

        VALUES (NULL,:qui,CURRENT_TIMESTAMP,:quoiTable,:nomEnregistrement,:idEnregistrement,:champsEnregistrement,:ancienneValeur,:nouvelleValeur);');

        $newSuivi->execute([
            'qui' => $qui,
            'quoiTable' => $quoiTable,
            'nomEnregistrement' => $nomEnregistrement,
            'idEnregistrement' => $idEnregistrement,
            'champsEnregistrement' => $champsEnregistrement,
            'ancienneValeur' => $ancienneValeur,
            'nouvelleValeur' => $nouvelleValeur,
            ]);

        return $newSuivi;
    }
}

<?php

require_once 'model/Manager.php';

class eventsZManager extends mgmtHU\Model\Manager
{
    public function getAllEventsZ($corbeille)
    {
        $select = $this->selectEventsZManager();
        $etatCorbeille = ($corbeille == 'corbeille') ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $db = $this->dbConnect();
        $allEventsZ = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.'
        ');
        $allEventsZ->execute([
        ]);

        return $allEventsZ;
    }

    public function getEventsZ($corbeille, $nom, $type, $contenu, $debut, $fin, $enseignant)
    {
        $select = $this->selectEventsZManager();
        $etatCorbeille = ($corbeille == 'corbeille') ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $nom_vide = ($nom == '') ? 'OR ev.nom != \'\' OR ev.nom is NULL' : '';
        $type_vide = ($type == '') ? 'OR t.intitule != \'\' OR t.intitule is NULL' : '';
        $contenu_vide = ($contenu == '') ? 'OR ev.contenu != \'\' OR ev.contenu is NULL' : '';
        $debut_vide = ($debut == '') ? 'OR ev.debut != \'\' OR ev.debut is NULL' : '';
        $fin_vide = ($fin == '') ? 'OR ev.fin != \'\' OR ev.fin is NULL' : '';
        $enseignant_vide = ($enseignant == '') ? 'OR e.nom != \'\' OR e.nom is NULL' : '';

        $db = $this->dbConnect();
        $allEventsZ = $db->prepare('
            '.$select.'
            WHERE (ev.nom LIKE :nom '.$nom_vide.') AND (t.intitule LIKE :type '.$type_vide.') AND (ev.contenu LIKE :contenu '.$contenu_vide.') AND (ev.debut >= :debut '.$debut_vide.') AND (ev.fin <= :fin '.$fin_vide.') AND (e.nom LIKE :enseignant '.$enseignant_vide.') AND '.$etatCorbeille.'
        ');

        $allEventsZ->execute([
            'nom' => '%'.$nom.'%',
            'type' => '%'.$type.'%',
            'contenu' => '%'.$contenu.'%',
            'debut' => $debut,
            'fin' => $fin,
            'enseignant' => '%'.$enseignant.'%',
            ]);

        return $allEventsZ;
    }

    public function getEventsZById($identifiant)
    {
        $select = $this->selectEventsZManager();

        $db = $this->dbConnect();
        $eventZ = $db->prepare('
            '.$select.'
            WHERE ev.identifiant = :identifiant
        ');

        $eventZ->execute([
            'identifiant' => $identifiant,
            ]);

        return $eventZ;
    }

    public function createEventZ($nom, $type, $contenu, $debut, $fin, $enseignant)
    {
        $db = $this->dbConnect();
        $newEventZ = $db->prepare('INSERT INTO evenement (identifiant, nom, type_evenement, contenu, debut, fin, enseignant) 

        VALUES (NULL, :nom, :type_evenement, :contenu, :debut, :fin, :enseignant);');

        $newEventZ->execute([
            'nom' => $nom,
            'type_evenement' => $type,
            'contenu' => $contenu,
            'debut' => $debut,
            'fin' => $fin,
            'enseignant' => $enseignant,
            ]);

        return $newEventZ;
    }

    public function modifEventZ($identifiant, $nom, $type, $contenu, $debut, $fin, $enseignant)
    {
        $db = $this->dbConnect();
        $modifEventZ = $db->prepare('


            UPDATE `evenement` 

            SET 

            nom = :nom,
            type_evenement = :type,
            contenu = :contenu,
            fin = :fin,
            debut = :debut,
            enseignant = :enseignant


            WHERE evenement.identifiant = :identifiant;


        ');

        $modifEventZ->execute([
            'identifiant' => $identifiant,
            'nom' => $nom,
            'type' => $type,
            'contenu' => $contenu,
            'debut' => $debut,
            'fin' => $fin,
            'enseignant' => $enseignant,
            ]);

        return $modifEventZ;
    }

    public function corbeilleEventZ($identifiant)
    {
        $db = $this->dbConnect();
        $corbeilleEventZ = $db->prepare('


            UPDATE `evenement` 

            SET Corbeille = "oui" 

            WHERE evenement.identifiant = :identifiant;


        ');

        $corbeilleEventZ->execute([
            'identifiant' => $identifiant,
            ]);

        return $corbeilleEventZ;
    }

    public function restoreEventZ($identifiant)
    {
        $db = $this->dbConnect();
        $restoreEventZ = $db->prepare('


            UPDATE `evenement` 

            SET Corbeille = NULL 

            WHERE evenement.identifiant = :identifiant;


        ');

        $restoreEventZ->execute([
            'identifiant' => $identifiant,
            ]);

        return $restoreEventZ;
    }
}

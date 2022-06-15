<?php

require_once ('model/Manager.php');




class eventsManager extends mgmtHU\Model\Manager
{
   
    
    public function getAllEvents($corbeille)
    {   


        $select = $this->selectEventsManager();
        $etatCorbeille = ($corbeille == "corbeille") ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $db = $this->dbConnect();
        $allEvents = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.'
            ORDER BY debut2
        '); 
        $allEvents->execute(array(

        ));
        return $allEvents;
    }


public function getEvents($corbeille,$nom,$type,$contenu,$debut,$fin,$enseignant)
    {


        $select = $this->selectEventsManager();
        $etatCorbeille = ($corbeille == "corbeille") ? 'ev.Corbeille is not null' : 'ev.Corbeille is null';

        $nom_vide = ($nom == "") ? 'OR ev.nom != \'\' OR ev.nom is NULL' : "";
        $type_vide = ($type == "") ? 'OR t.intitule != \'\' OR t.intitule is NULL' : "";
        $contenu_vide = ($contenu == "") ? 'OR ev.contenu != \'\' OR ev.contenu is NULL' : "";
        $debut_vide = ($debut == "") ? 'OR ev.debut != \'\' OR ev.debut is NULL' : "";
        $fin_vide = ($fin == "") ? 'OR ev.fin != \'\' OR ev.fin is NULL' : "";
        $enseignant_vide = ($enseignant == "") ? 'OR e.nom != \'\' OR e.nom is NULL' : "";


        $db = $this->dbConnect();
        $allEvents = $db->prepare('
            '.$select.'
            WHERE (ev.nom LIKE :nom '.$nom_vide.') AND (t.intitule LIKE :type '.$type_vide.') AND (ev.contenu LIKE :contenu '.$contenu_vide.') AND (ev.debut >= :debut '.$debut_vide.') AND (ev.fin <= :fin '.$fin_vide.') AND (e.nom LIKE :enseignant '.$enseignant_vide.') AND '.$etatCorbeille.'
            ORDER BY debut2
        ');

        $allEvents->execute(array(
            'nom'=> "%".$nom."%",
            'type'=> "%".$type."%",
            'contenu'=> "%".$contenu."%",
            'debut'=> $debut,
            'fin'=> $fin,
            'enseignant'=> "%".$enseignant."%"
            )); 
        return $allEvents;
    }







     public function getEventsById($identifiant)
    {

        $select = $this->selectEventsManager();

        $db = $this->dbConnect();
        $event = $db->prepare('
            '.$select.'
            WHERE ev.identifiant = :identifiant
        ');

        $event->execute(array(
            'identifiant'=> $identifiant
            )); 
        return $event;
    }




    public function createEvent($nom,$type,$contenu,$debut,$fin,$enseignant)
    {
        $db = $this->dbConnect();
        $newEvent = $db->prepare('INSERT INTO evenement (identifiant, nom, type_evenement, contenu, debut, fin, enseignant) 

        VALUES (NULL, :nom, :type_evenement, :contenu, :debut, :fin, :enseignant);');

        $newEvent->execute(array(
            'nom' => $nom,
            'type_evenement' => $type,
            'contenu' => $contenu,
            'debut' => $debut,
            'fin' => $fin,
            'enseignant' => $enseignant,
            ));
        return $newEvent;
    }
    


    public function modifEvent($identifiant,$nom,$type,$contenu,$debut,$fin,$enseignant)


    {
        $db = $this->dbConnect();
        $modifEvent = $db->prepare('


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

        $modifEvent->execute(array(
            'identifiant' => $identifiant,
            'nom' => $nom,
            'type' => $type,
            'contenu' => $contenu,
            'debut' => $debut,
            'fin' => $fin,
            'enseignant' => $enseignant,
            ));
        return $modifEvent;
    }



public function corbeilleEvent($identifiant)
    {
        $db = $this->dbConnect();
        $corbeilleEvent = $db->prepare('


            UPDATE `evenement` 

            SET Corbeille = "oui" 

            WHERE evenement.identifiant = :identifiant;


        ');

        $corbeilleEvent->execute(array(
            'identifiant' => $identifiant,
            ));
        return $corbeilleEvent;
    }


public function restoreEvent($identifiant)
    {
        $db = $this->dbConnect();
        $restoreEvent = $db->prepare('


            UPDATE `evenement` 

            SET Corbeille = NULL 

            WHERE evenement.identifiant = :identifiant;


        ');

        $restoreEvent->execute(array(
            'identifiant' => $identifiant,
            ));
        return $restoreEvent;
    }





    
}
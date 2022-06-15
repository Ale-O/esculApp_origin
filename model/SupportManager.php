<?php

require_once ('model/Manager.php');

class SupportManager extends mgmtHU\Model\Manager
{
    
    
    public function getAllSupport($corbeille)
    {   

        $select = $this->selectSupportManager();
        $etatCorbeille = ($corbeille == "corbeille") ? 'su.Corbeille is not null' : 'su.Corbeille is null';

        $db = $this->dbConnect();
        $allSupport = $db->prepare('
            '.$select.'
            WHERE '.$etatCorbeille.'
            ORDER BY numero_formate
        '); 
        $allSupport->execute(array());
        return $allSupport;
    }


     public function getSupports($corbeille,$numero_formate,$nature,$budget,$eotp,$quotite,$categorie)
    {

        $select = $this->selectSupportManager();
        $etatCorbeille = ($corbeille == "corbeille") ? 'su.Corbeille is not null' : 'su.Corbeille is null';


        $numero_formate_vide = ($numero_formate == "") ? 'OR su.numero_formate != \'\' OR su.numero_formate is NULL' : "";
        $nature_vide = ($nature == "") ? 'OR su.nature != \'\' OR su.nature is NULL' : "";
        $budget_vide = ($budget == "") ? 'OR su.budget != \'\' OR su.budget is NULL' : "";
        $eotp_vide = ($eotp == "") ? 'OR su.eotp != \'\' OR su.eotp is NULL' : "";
        $quotite_vide = ($quotite == "") ? 'OR su.quotite != \'\' OR su.quotite is NULL' : "";
        $categorie_vide = ($categorie == "") ? 'OR su.categorie != \'\' OR su.categorie is NULL' : "";


        $db = $this->dbConnect();
        $support = $db->prepare('
            '.$select.'
            WHERE (su.numero_formate LIKE :numero_formate '.$numero_formate_vide.') AND (su.nature LIKE :nature '.$nature_vide.') AND (su.budget LIKE :budget '.$budget_vide.') AND (su.eotp LIKE :eotp '.$eotp_vide.') AND (su.quotite = :quotite '.$quotite_vide.') AND (su.categorie LIKE :categorie '.$categorie_vide.') AND '.$etatCorbeille.'
            ORDER BY numero_formate
        ');

        $support->execute(array(
            'numero_formate'=> "%".$numero_formate."%",
            'nature'=> "%".$nature."%",
            'budget'=> "%".$budget."%",
            'eotp'=> "%".$eotp."%",
            'quotite'=> $quotite,
            'categorie'=> "%".$categorie."%",
            )); 
        return $support;
    }




     public function getSupportsFree($corbeille,$listIdentifiantSupportsFree)
    {

        $select = $this->selectSupportManager();
        $etatCorbeille = ($corbeille == "corbeille") ? 'su.Corbeille is not null' : 'su.Corbeille is null';


        // $listIdentifiantSupportsFreeVide = ($listIdentifiantSupportsFree == "") ? 'OR identifiant != \'\' OR identifiant is NULL' : "";

        
        $listIdentifiant = "";

        foreach ($listIdentifiantSupportsFree as $identifiant)

            {

                if ($listIdentifiant == "") 

                {

                    // $listIdentifiant = $listIdentifiant . 'identifiant = '. $identifiant .' ' ;

                    $listIdentifiant = $listIdentifiant . 'su.identifiant = '. $identifiant["identifiant_support"] .' ' ;

                }

                else if ($listIdentifiant != "") 

                {

                    // $listIdentifiant = $listIdentifiant . ' OR identifiant = '. $identifiant .' ' ;

                    $listIdentifiant = $listIdentifiant . ' OR su.identifiant = '. $identifiant["identifiant_support"] .' ' ;

                }


            }


        $db = $this->dbConnect();


        // $support = $db->prepare('
        //    '.$select.'
        //    WHERE '.$etatCorbeille.' AND ('.$listIdentifiant.')
        //    ORDER BY numero_formate
        // ');


        $support = $db->prepare('
            SELECT su.identifiant identifiant, su.numero_formate numero_formate, su.nature nature, su.budget budget, su.eotp eotp, su.quotite quotite, su.categorie categorie, su.corbeille etatCorbeille, su.prenom prenom, su.nom nom, su.absence_depart absence_depart_arrivee, DATE_FORMAT(su.debut, \'%d/%m/%Y \') debut, DATE_FORMAT(su.fin, \'%d/%m/%Y \') fin, su.debut debut2, su.fin fin2, supp.renseignement renseignement, su.identifiant_enseignant identifiant_enseignant, su.date_blocage date_blocage, su.date_liberation date_liberation
            FROM (

                    SELECT * FROM support supp
                    LEFT JOIN (


                            SELECT afs.support as support, e.prenom as prenom, e.nom as nom, abs.etat as absence_depart, e.date_dernier_changement as debut, e.fin_enseignant as fin, e.identifiant as identifiant_enseignant
                            FROM affectation_support afs
                            LEFT JOIN enseignants e ON afs.enseignant = e.identifiant
                            LEFT JOIN absence_depart_arrivee abs ON e.absence_depart_arrivee = abs.identifiant
                            INNER JOIN (
                                SELECT afs3.support as support3,
                                MAX(afs3.debut) as max_date3
                                FROM affectation_support afs3
                                GROUP BY support3 ) b
                            ON b.support3 = afs.support
                            WHERE b.max_date3 = afs.debut


                            ) afsd ON supp.identifiant = afsd.support WHERE (supp.identifiant = afsd.support) AND (supp.identifiant != 354) 

                        ) su
                    
            LEFT JOIN support supp ON su.identifiant = supp.identifiant
            WHERE '.$etatCorbeille.' AND ('.$listIdentifiant.') AND NOT (su.absence_depart is NULL AND su.fin is NULL) AND NOT (su.numero_formate LIKE :supportAssMG OR su.numero_formate LIKE :supportSurn)
            ORDER BY su.absence_depart DESC
        ');



        $support->execute(array(
            'supportAssMG'=> "%AMG%",
            'supportSurn'=> "%SUR%",            
            )); 
        return $support;
    }







     public function getSupportsById($identifiant)
    {

        $select = $this->selectSupportManager();

        $db = $this->dbConnect();
        $support = $db->prepare('
            '.$select.'
            WHERE su.identifiant = :identifiant
        ');

        $support->execute(array(
            'identifiant'=> $identifiant,
            )); 
        return $support;
    }



    public function createSupport($numero_formate,$nature,$budget,$eotp,$quotite,$categorie)
    {
        $db = $this->dbConnect();
        $newSupport = $db->prepare('INSERT INTO support (identifiant,numero_formate,nature,budget,eotp,quotite,categorie) 

        VALUES (NULL, :numero_formate, :nature, :budget, :eotp, :quotite, :categorie);');

        $newSupport->execute(array(
            'numero_formate'=> $numero_formate,
            'nature'=> $nature,
            'budget'=> $budget,
            'eotp'=> $eotp,
            'quotite'=> $quotite,
            'categorie'=> $categorie,
            ));
        return $newSupport;
    }
    




    public function modifSupport($identifiant,$numero_formate,$nature,$budget,$eotp,$quotite,$categorie,$renseignement)


    {
        $db = $this->dbConnect();
        $modifSupport = $db->prepare('


            UPDATE `support` 

            SET 

            numero_formate = :numero_formate,
            nature = :nature,
            budget = :budget,
            eotp = :eotp,
            quotite = :quotite,
            categorie = :categorie,
            renseignement = :renseignement

            WHERE support.identifiant = :identifiant;


        ');

        $modifSupport->execute(array(
            'identifiant' => $identifiant,
            'numero_formate'=> $numero_formate,
            'nature'=> $nature,
            'budget'=> $budget,
            'eotp'=> $eotp,
            'quotite'=> $quotite,
            'categorie'=> $categorie,
            'renseignement'=> $renseignement,
            ));
        return $modifSupport;
    }




    public function majSupportDateBlocage($identifiant,$date_blocage)


    {
        $db = $this->dbConnect();
        $majSupportDateBlocage = $db->prepare('


            UPDATE `support` 

            SET 

            date_blocage = :date_blocage

            WHERE support.identifiant = :identifiant;


        ');

        $majSupportDateBlocage->execute(array(
            'identifiant' => $identifiant,
            'date_blocage'=> $date_blocage,
            ));
        return $majSupportDateBlocage;
    }



    public function majSupportDateLiberation($identifiant,$date_liberation)


    {
        $db = $this->dbConnect();
        $majSupportDateLiberation = $db->prepare('


            UPDATE `support` 

            SET 

            date_liberation = :date_liberation

            WHERE support.identifiant = :identifiant;


        ');

        $majSupportDateLiberation->execute(array(
            'identifiant' => $identifiant,
            'date_liberation'=> $date_liberation,
            ));
        return $majSupportDateLiberation;
    }





public function corbeilleSupport($identifiant)
    {
        $db = $this->dbConnect();
        $corbeilleSupport = $db->prepare('


            UPDATE `support` 

            SET Corbeille = "oui" 

            WHERE support.identifiant = :identifiant;


        ');

        $corbeilleSupport->execute(array(
            'identifiant' => $identifiant,
            ));
        return $corbeilleSupport;
    }


public function restoreSupport($identifiant)
    {
        $db = $this->dbConnect();
        $restoreSupport = $db->prepare('


            UPDATE `support` 

            SET Corbeille = NULL 

            WHERE support.identifiant = :identifiant;


        ');

        $restoreSupport->execute(array(
            'identifiant' => $identifiant,
            ));
        return $restoreSupport;
    }




}
<?php 

require_once ('model/AssignManager.php');
require_once ('model/TeacherManager.php');
require_once ('model/SuiviManager.php');
require_once ('model/saveSearchManager.php');
require_once ('model/LoginManager.php');
require_once ('model/eventsManager.php');
require_once ('model/eventsSpeManager.php');
require_once ('model/IdMangueManager.php');
require_once ('model/NomChuManager.php');
require_once ('model/SupportManager.php');


function home()
{

    require ("view/fronted/homeView.php");   
}


function allTeachers()
{ 


    $TeacherManager = new TeacherManager();
    
    $req = $TeacherManager->getAllTeachersWithoutGhost('present');

    require ("view/fronted/allTeachersView.php");  

}





function listTeacher()
{
    
    $search = true;

    if (isset($_POST['name'])){
        $name =  $_POST['name'];
    }

    if (isset($_POST['prenom'])){
        $prenom =  $_POST['prenom'];
    }

    if (isset($_POST['emploi'])){
        $emploi = $_POST['emploi'];
    }

    if (isset($_POST['cnu'])){
        $cnu = $_POST['cnu'];
    }

    if (isset($_POST['affectation_hospitaliere'])){
        $affectation_hospitaliere = $_POST['affectation_hospitaliere'];
    }

    if (isset($_POST['absence_depart_arrivee'])){
        $absence_depart_arrivee = $_POST['absence_depart_arrivee'];
    }

    if (isset($_POST['actif'])){
        $actif = $_POST['actif'];
    }








    if (isset($_POST['liste_de_diffusion'])){
        $liste_de_diffusion =  $_POST['liste_de_diffusion'];
    }

    if (isset($_POST['sous_emploi'])){
        $sous_emploi =  $_POST['sous_emploi'];
    }

    if (isset($_POST['dphu'])){
        $dphu = $_POST['dphu'];
    }

    if (isset($_POST['affectation_pedagogique'])){
        $affectation_pedagogique = $_POST['affectation_pedagogique'];
    }

    if (isset($_POST['laboratoire'])){
        $laboratoire = $_POST['laboratoire'];
    }

    if (isset($_POST['next'])){
        $next = $_POST['next'];
    }

    if (isset($_POST['trajectoire_hu'])){
        $trajectoire_hu = $_POST['trajectoire_hu'];
    }
    if (isset($_POST['annee_civile'])){
        $annee_civile =  $_POST['annee_civile'];
    }

    if (isset($_POST['emploi_cible'])){
        $emploi_cible =  $_POST['emploi_cible'];
    }

    if (isset($_POST['succession'])){
        $succession = $_POST['succession'];
    }

    if (isset($_POST['commission_evaluation_hu'])){
        $commission_evaluation_hu = $_POST['commission_evaluation_hu'];
    }

    if (isset($_POST['experience'])){
        $experience = $_POST['experience'];
    }

    if (isset($_POST['mobilite'])){
        $mobilite = $_POST['mobilite'];
    }

    if (isset($_POST['hdr'])){
        $hdr = $_POST['hdr'];
    }
    if (isset($_POST['precnu'])){
        $precnu =  $_POST['precnu'];
    }

    if (isset($_POST['date_dernier_changement'])){
        $date_dernier_changement =  $_POST['date_dernier_changement'];
    }

    if (isset($_POST['fin_enseignant'])){
        $fin_enseignant = $_POST['fin_enseignant'];
    }

    if (isset($_POST['eligible_election'])){
        $eligible_election = $_POST['eligible_election'];
    }

    if (isset($_POST['grade'])){
        $grade = $_POST['grade'];
    }

    if (isset($_POST['debut_grade'])){
        $debut_grade = $_POST['debut_grade'];
    }

    if (isset($_POST['ouverture_droits_retraite'])){
        $ouverture_droits_retraite = $_POST['ouverture_droits_retraite'];
    }
    if (isset($_POST['age_limite'])){
        $age_limite =  $_POST['age_limite'];
    }

    if (isset($_POST['date_limite_age'])){
        $date_limite_age =  $_POST['date_limite_age'];
    }

    if (isset($_POST['enfant_vivant_a_50ans'])){
        $enfant_vivant_a_50ans = $_POST['enfant_vivant_a_50ans'];
    }

    if (isset($_POST['date_previsionnelle'])){
        $date_previsionnelle = $_POST['date_previsionnelle'];
    }

    if (isset($_POST['depart_effectif_ou_souhaite'])){
        $depart_effectif_ou_souhaite = $_POST['depart_effectif_ou_souhaite'];
    }

    if (isset($_POST['option_remarque_retraite'])){
        $option_remarque_retraite = $_POST['option_remarque_retraite'];
    }

    if (isset($_POST['surnombre_emeritat'])){
        $surnombre_emeritat = $_POST['surnombre_emeritat'];
    }










    $corbeille = 'present';


    if (isset($_POST['corbeille'])){
        $corbeille = 'corbeille';
    }


    $identifiantSearch = (isset($_POST['loadSearch'])) ? $_POST['loadSearch'] : "";


    if (isset($_POST['loadSearch'])){
        $presearch = true;

        $saveSearchManager = new saveSearchManager();
        $reqSaveLoad = $saveSearchManager->getSaveSearchById($identifiantSearch);
        $dataSaveLoad = $reqSaveLoad->fetch();

        $formule = $dataSaveLoad['formule'];

        $conditions = explode(";",$formule);
        $name =  $conditions[0];
        $prenom = $conditions[1];
        $emploi = $conditions[2];
        $cnu = $conditions[3];
        $affectation_hospitaliere = $conditions[4];
        $absence_depart_arrivee = $conditions[5];
        $actif = $conditions[6];
        $corbeille = $conditions[7];

        $liste_de_diffusion =  $conditions[8];
        $sous_emploi =  $conditions[9];
        $dphu = $conditions[10];
        $affectation_pedagogique = $conditions[11];
        $laboratoire = $conditions[12];
        $next = $conditions[13];
        $trajectoire_hu = $conditions[14];
        $annee_civile =  $conditions[15];
        $emploi_cible =  $conditions[16];
        $succession = $conditions[17];
        $commission_evaluation_hu = $conditions[18];
        $experience = $conditions[19];
        $mobilite = $conditions[20];
        $hdr = $conditions[21];
        $precnu =  $conditions[22];
        $date_dernier_changement =  $conditions[23];
        $fin_enseignant = $conditions[24];
        $eligible_election = $conditions[25];
        $grade = $conditions[26];
        $debut_grade = $conditions[27];
        $ouverture_droits_retraite = $conditions[28];
        $age_limite =  $conditions[29];
        $date_limite_age =  $conditions[30];
        $enfant_vivant_a_50ans = $conditions[31];
        $date_previsionnelle = $conditions[32];
        $depart_effectif_ou_souhaite = $conditions[33];
        $option_remarque_retraite = $conditions[34];
        $surnombre_emeritat = $conditions[35];




    }


    $TeacherManager = new TeacherManager();
    
    $req = $TeacherManager->getTeachers($actif,$corbeille,$name,$prenom,$emploi,$cnu,$affectation_hospitaliere,$absence_depart_arrivee,



        $liste_de_diffusion,
        $sous_emploi,
        $dphu,
        $affectation_pedagogique,
        $laboratoire,
        $next,
        $trajectoire_hu,
        $annee_civile,
        $emploi_cible,
        $succession,
        $commission_evaluation_hu,
        $experience,
        $mobilite,
        $hdr,
        $precnu,
        $date_dernier_changement,
        $fin_enseignant,
        $eligible_election,
        $grade,
        $debut_grade,
        $ouverture_droits_retraite,
        $age_limite,
        $date_limite_age,
        $enfant_vivant_a_50ans,
        $date_previsionnelle,
        $depart_effectif_ou_souhaite,
        $option_remarque_retraite,
        $surnombre_emeritat



    );

    require ("view/fronted/allTeachersView.php");   
}



function teacher()
{
    $identifiant = $_GET['identifiant'];
    
    $TeacherManager = new TeacherManager();

    $req = $TeacherManager->getTeachersById($identifiant);

    require ("view/fronted/teacherView.php");   
}


function allAssigns()
{
    $AssignManager = new AssignManager();
    
    $req = $AssignManager->getAllAssignsWithoutGhost('present');

    require ("view/fronted/listAssignView.php");    
}





function listAssign()
{

    $search = true;

    if (isset($_POST['support'])){
        $support =  $_POST['support'];
    }

    if (isset($_POST['enseignant'])){
        $enseignant = $_POST['enseignant'];
    }

    if (isset($_POST['emploi'])){
        $emploi =  $_POST['emploi'];
    }

    if (isset($_POST['sous_emploi'])){
        $sous_emploi = $_POST['sous_emploi'];
    }

    if (isset($_POST['startDate'])){
        $startDate = $_POST['startDate'];
    }

    if (isset($_POST['fin'])){
        $fin = $_POST['fin'];
    }



    if (isset($_POST['action_affectation'])){
        $action_affectation = $_POST['action_affectation'];
    }



    $corbeille = 'present';


    if (isset($_POST['corbeille'])){
        $corbeille = 'corbeille';
    }


    $formule = (isset($_POST['loadSearch'])) ? $_POST['loadSearch'] : "";


    $identifiantSearch = (isset($_POST['loadSearch'])) ? $_POST['loadSearch'] : "";


    if (isset($_POST['loadSearch'])){
        $presearch = true;

        $saveSearchManager = new saveSearchManager();
        $reqSaveLoad = $saveSearchManager->getSaveSearchById($identifiantSearch);
        $dataSaveLoad = $reqSaveLoad->fetch();

        $formule = $dataSaveLoad['formule'];

        $conditions = explode(";",$formule);
        $support =  $conditions[0];
        $enseignant = $conditions[1];
        $emploi = $conditions[2];
        $sous_emploi = $conditions[3];
        $startDate = $conditions[4];
        $fin = $conditions[5];
        $corbeille = ($conditions[6] == "") ? 'present' : 'corbeille';
        $action_affectation = $conditions[7];
    }
    
    $AssignManager = new AssignManager();

    $req = $AssignManager->getAssigns($corbeille,$support,$startDate,$fin,$enseignant,'',$emploi,$sous_emploi,$action_affectation);

    require ("view/fronted/listAssignView.php");    
}


function assign()
{
    $identifiant_affectation = $_GET['identifiant_affectation'];
    
    $AssignManager = new AssignManager();

    $req = $AssignManager->getAssignsById($identifiant_affectation);

    require ("view/fronted/assignView.php");   
}


function createAssign()
{

    $identifiant = $_GET['identifiant'];

    require ("view/fronted/createAssign.php");
}


function createAssignFromEvent($typeEvent)
{

    $identifiant = $_GET['identifiant'];


    switch ($typeEvent)
    {
        case 'Taches' :



        break;


        case 'Revision_effectifs' :

            $identifiant_support = $_GET['identifiant_support'];

            $debut = $_GET['debut'];

            $fin = date('Y-m-d', strtotime( $debut . " +1 year"));

            $debut = date('Y-m-d', strtotime( $debut . " +1 day"));



        break;


        case 'Absence_departs' :

            $identifiant_support = $_GET['identifiant_support'];

            $debut = $_GET['debut'];

            $fin = $_GET['fin'];

        break;


        case 'Avancements' :



        break;


        case 'Primes_hr' :



        break;

        default:
            throw new Exception('Aucun typeEvent trouvé pour filtre list');
    }


    require ("view/fronted/createAssign.php");
}




function newAssign()
{

    $support = ($_POST['support'] == "") ? NULL : $_POST['support'];
    $enseignant = ($_POST['enseignant'] == "") ? NULL : $_POST['enseignant'];
    $debut = ($_POST['debut'] == "") ? NULL : $_POST['debut'];
    $fin = ($_POST['fin'] == "") ? NULL : $_POST['fin'];
    $renseignements = ($_POST['renseignements'] == "") ? NULL : $_POST['renseignements'];
    
    $emploi = ($_POST['emploi'] == "") ? NULL : $_POST['emploi'];
    $sous_emploi = ($_POST['sous_emploi'] == "") ? NULL : $_POST['sous_emploi'];

    $AssignManager = new AssignManager();
    
    $req = $AssignManager->createAssign($support,$enseignant,$debut,$fin,$renseignements,$emploi,$sous_emploi);


    $numeroEtEnseignant = $support ." ". $enseignant;


    newSuivi("affectation_support",$numeroEtEnseignant,NULL,"nouveau","nouveau","nouveau");


    majEnseignantByAssign($enseignant);


    $TeacherManager = new TeacherManager();

    $req = $TeacherManager->getTeachersById($enseignant);

    require ("view/fronted/teacherView.php");
}




function createMultipleAssign()
{

    $identifiant = $_GET['identifiant'];

    $listSupport = $_GET['listSupport'];
    $arrayData = explode(",", $_GET['listSupport']);


    require ("view/fronted/createMultipleAssign.php");
}




function newMultipleAssign()
{


    $listSupport = $_GET['listSupport'];
    $arrayData = explode(",", $_GET['listSupport']);

    $enseignant = ($_POST['enseignant'] == "") ? NULL : $_POST['enseignant'];
    $emploi = ($_POST['emploi'] == "") ? NULL : $_POST['emploi'];
    $sous_emploi = ($_POST['sous_emploi'] == "") ? NULL : $_POST['sous_emploi'];

    $AssignManager = new AssignManager();


    for ($i = 1; $i < count($arrayData); $i++) {


        $support = $arrayData[$i];
        $debut = ($_POST['debut' . $i . ''] == "") ? NULL : $_POST['debut' . $i . ''];
        $fin = ($_POST['fin' . $i . ''] == "") ? NULL : $_POST['fin' . $i . ''];

        
        $req = $AssignManager->createAssign($support,$enseignant,$debut,$fin,NULL,$emploi,$sous_emploi);



        $numeroEtEnseignant = $support ." ". $enseignant;


        newSuivi("affectation_support",$numeroEtEnseignant,NULL,"nouveau","nouveau","nouveau");

        
        $req = $AssignManager->getAssignsWhithoutTeachersAndByDate('present', $support, $debut, $fin);

        $dataAssign = $req->fetch();

        $dataAssign = array_shift($dataAssign); 


        $reqAssign = $AssignManager->getAssignsById($dataAssign);

        $dataAssignFind = $reqAssign->fetch();



        if ($debut === $dataAssignFind['debut2'] && $fin === $dataAssignFind['fin2'])

        {

            $AssignManager->deleteAssign($dataAssign);

        }


        else if ($debut > $dataAssignFind['debut2'] && $fin >= $dataAssignFind['fin2'])

        {

            $debutLess = date('Y-m-d', strtotime( $debut . " -1 day"));

            $AssignManager->modifAssignDate($dataAssignFind['identifiant_affectation'],$dataAssignFind['debut2'],$debutLess);

        }


        else if ($debut <= $dataAssignFind['debut2'] && $fin < $dataAssignFind['fin2'])

        {

            $finMore = date('Y-m-d', strtotime( $fin . " +1 day"));

            $AssignManager->modifAssignDate($dataAssignFind['identifiant_affectation'],$finMore,$dataAssignFind['fin2']);

        }


        else if ($debut > $dataAssignFind['debut2'] && $fin < $dataAssignFind['fin2'])

        {

            $debutLess = date('Y-m-d', strtotime( $debut . " -1 day"));
            $finMore = date('Y-m-d', strtotime( $fin . " +1 day"));

            $AssignManager->createAssign($dataAssignFind['identifiant_support'],$dataAssignFind['identifiant_enseignant'],$dataAssignFind['debut2'],$debutLess,$dataAssignFind['renseignements'],$dataAssignFind['emploi_enseignant'],$dataAssignFind['sous_emploi_enseignant']);

            $AssignManager->createAssign($dataAssignFind['identifiant_support'],$dataAssignFind['identifiant_enseignant'],$finMore,$dataAssignFind['fin2'],$dataAssignFind['renseignements'],$dataAssignFind['emploi_enseignant'],$dataAssignFind['sous_emploi_enseignant']);

            $AssignManager->deleteAssign($dataAssign);

        }






    }

    
        
    $req = $AssignManager->deleteAssign($arrayData[0]);



    majEnseignantByAssign($enseignant);


    $TeacherManager = new TeacherManager();

    $req = $TeacherManager->getTeachersById($enseignant);

    require ("view/fronted/teacherView.php");


}






function createTeacher()
{

    require ("view/fronted/createTeacher.php");
}


function newTeacher()
{

            $nom = ($_POST['nom'] == "") ? NULL : $_POST['nom'];
            $prenom = ($_POST['prenom'] == "") ? NULL : $_POST['prenom'];
            $nom_jeune_fille = ($_POST['nom_jeune_fille'] == "") ? NULL : $_POST['nom_jeune_fille'];
            $absence_depart_arrivee = ($_POST['absence_depart_arrivee'] == "") ? NULL : $_POST['absence_depart_arrivee'];
            $commentaire = ($_POST['commentaire'] == "") ? NULL : $_POST['commentaire'];
            $affectation_support = ($_POST['affectation_support'] == "") ? NULL : $_POST['affectation_support'];
            $cnu = ($_POST['cnu'] == "") ? NULL : $_POST['cnu'];
            $emploi = ($_POST['emploi'] == "") ? NULL : $_POST['emploi'];
            $sous_emploi = ($_POST['sous_emploi'] == "") ? NULL : $_POST['sous_emploi'];
            $next = ($_POST['next'] == "") ? NULL : $_POST['next'];
            $liste_de_diffusion = ($_POST['liste_de_diffusion'] == "") ? NULL : $_POST['liste_de_diffusion'];
            $courriel_univ = ($_POST['courriel_univ'] == "") ? NULL : $_POST['courriel_univ'];
            $courriel_chu = ($_POST['courriel_chu'] == "") ? NULL : $_POST['courriel_chu'];
            $courriel_autre = ($_POST['courriel_autre'] == "") ? NULL : $_POST['courriel_autre'];
            $grade = ($_POST['grade'] == "") ? NULL : $_POST['grade'];
            $dphu = ($_POST['dphu'] == "") ? NULL : $_POST['dphu'];
            $affectation_pedagogique = ($_POST['affectation_pedagogique'] == "") ? NULL : $_POST['affectation_pedagogique'];
            $nom_chu = ($_POST['nom_chu'] == "") ? NULL : $_POST['nom_chu'];
            $laboratoire = ($_POST['laboratoire'] == "") ? NULL : $_POST['laboratoire'];
            $trajectoire_hu = ($_POST['trajectoire_hu'] == "") ? NULL : $_POST['trajectoire_hu'];
            $emploi_cible = ($_POST['emploi_cible'] == "") ? NULL : $_POST['emploi_cible'];
            $annee_civile = ($_POST['annee_civile'] == "") ? NULL : $_POST['annee_civile'];
            $succession = ($_POST['succession'] == "") ? NULL : $_POST['succession'];
            $commission_evaluation_hu = ($_POST['commission_evaluation_hu'] == "") ? NULL : $_POST['commission_evaluation_hu'];
            $experience = ($_POST['experience'] == "") ? NULL : $_POST['experience'];
            $mobilite = ($_POST['mobilite'] == "") ? NULL : $_POST['mobilite'];
            $hdr = ($_POST['hdr'] == "") ? NULL : $_POST['hdr'];
            $precnu = ($_POST['precnu'] == "") ? NULL : $_POST['precnu'];
            $commentaire_trajectoire_hu = ($_POST['commentaire_trajectoire_hu'] == "") ? NULL : $_POST['commentaire_trajectoire_hu'];
            $date_dernier_changement = ($_POST['date_dernier_changement'] == "") ? NULL : $_POST['date_dernier_changement'];
            $actif = ($_POST['actif'] == "") ? NULL : $_POST['actif'];
            $id_mangue = ($_POST['id_mangue'] == "") ? NULL : $_POST['id_mangue'];
            $telephone = ($_POST['telephone'] == "") ? NULL : $_POST['telephone'];
            $fin_enseignant = ($_POST['fin_enseignant'] == "") ? NULL : $_POST['fin_enseignant'];


    $TeacherManager = new TeacherManager();
    
    $req = $TeacherManager->createTeacher($nom, $prenom, $nom_jeune_fille, $absence_depart_arrivee, $commentaire, $affectation_support, $cnu, $emploi, $sous_emploi, $next, $liste_de_diffusion, $courriel_univ, $courriel_chu, $courriel_autre, $grade, $dphu, $affectation_pedagogique, $nom_chu, $laboratoire, $trajectoire_hu, $emploi_cible, $annee_civile, $succession, $commission_evaluation_hu, $experience, $mobilite, $hdr, $precnu, $commentaire_trajectoire_hu, $date_dernier_changement, $actif, $id_mangue, $telephone, $fin_enseignant);


            $prenomETNom = $nom ." ". $prenom;


    newSuivi("enseignant",$prenomETNom,NULL,"nouveau","nouveau","nouveau");


    allTeachers();    
}

function editTeacher()
{

    $identifiant = $_GET['identifiant'];

    require ("view/fronted/editTeacher.php");
}


function modifTeacher()
{
            
            $identifiant = $_POST['identifiant'];
            $nom = ($_POST['nom'] == "") ? NULL : $_POST['nom'];
            $prenom = ($_POST['prenom'] == "") ? NULL : $_POST['prenom'];
            $nom_jeune_fille = ($_POST['nom_jeune_fille'] == "") ? NULL : $_POST['nom_jeune_fille'];
            $surnombre_emeritat = ($_POST['surnombre_emeritat'] == "") ? NULL : $_POST['surnombre_emeritat'];
            $absence_depart_arrivee = ($_POST['absence_depart_arrivee'] == "") ? NULL : $_POST['absence_depart_arrivee'];
            $commentaire = ($_POST['commentaire'] == "") ? NULL : $_POST['commentaire'];
            $affectation_support = ($_POST['affectation_support'] == "") ? NULL : $_POST['affectation_support'];
            $cnu = ($_POST['cnu'] == "") ? NULL : $_POST['cnu'];
            $emploi = ($_POST['emploi'] == "") ? NULL : $_POST['emploi'];
            $sous_emploi = ($_POST['sous_emploi'] == "") ? NULL : $_POST['sous_emploi'];
            $next = ($_POST['next'] == "") ? NULL : $_POST['next'];
            $liste_de_diffusion = ($_POST['liste_de_diffusion'] == "") ? NULL : $_POST['liste_de_diffusion'];
            $courriel_univ = ($_POST['courriel_univ'] == "") ? NULL : $_POST['courriel_univ'];
            $courriel_chu = ($_POST['courriel_chu'] == "") ? NULL : $_POST['courriel_chu'];
            $courriel_autre = ($_POST['courriel_autre'] == "") ? NULL : $_POST['courriel_autre'];
            $grade = ($_POST['grade'] == "") ? NULL : $_POST['grade'];
            $ouverture_droits_retraite = ($_POST['ouverture_droits_retraite'] == "") ? NULL : $_POST['ouverture_droits_retraite'];
            $age_limite = ($_POST['age_limite'] == "") ? NULL : $_POST['age_limite'];
            $date_limite_age = ($_POST['date_limite_age'] == "") ? NULL : $_POST['date_limite_age'];
            $enfant_vivant_a_50ans = ($_POST['enfant_vivant_a_50ans'] == "") ? NULL : $_POST['enfant_vivant_a_50ans'];
            $date_previsionnelle = ($_POST['date_previsionnelle'] == "") ? NULL : $_POST['date_previsionnelle'];
            $depart_effectif_ou_souhaite = ($_POST['depart_effectif_ou_souhaite'] == "") ? NULL : $_POST['depart_effectif_ou_souhaite'];
            $option_remarque_retraite = ($_POST['option_remarque_retraite'] == "") ? NULL : $_POST['option_remarque_retraite'];
            $dphu = ($_POST['dphu'] == "") ? NULL : $_POST['dphu'];
            $affectation_pedagogique = ($_POST['affectation_pedagogique'] == "") ? NULL : $_POST['affectation_pedagogique'];
            $nom_chu = ($_POST['nom_chu'] == "") ? NULL : $_POST['nom_chu'];
            $laboratoire = ($_POST['laboratoire'] == "") ? NULL : $_POST['laboratoire'];
            $trajectoire_hu = ($_POST['trajectoire_hu'] == "") ? NULL : $_POST['trajectoire_hu'];
            $emploi_cible = ($_POST['emploi_cible'] == "") ? NULL : $_POST['emploi_cible'];
            $annee_civile = ($_POST['annee_civile'] == "") ? NULL : $_POST['annee_civile'];
            $succession = ($_POST['succession'] == "") ? NULL : $_POST['succession'];
            $commission_evaluation_hu = ($_POST['commission_evaluation_hu'] == "") ? NULL : $_POST['commission_evaluation_hu'];
            $experience = ($_POST['experience'] == "") ? NULL : $_POST['experience'];
            $mobilite = ($_POST['mobilite'] == "") ? NULL : $_POST['mobilite'];
            $hdr = ($_POST['hdr'] == "") ? NULL : $_POST['hdr'];
            $precnu = ($_POST['precnu'] == "") ? NULL : $_POST['precnu'];
            $commentaire_trajectoire_hu = ($_POST['commentaire_trajectoire_hu'] == "") ? NULL : $_POST['commentaire_trajectoire_hu'];
            $date_dernier_changement = ($_POST['date_dernier_changement'] == "") ? NULL : $_POST['date_dernier_changement'];
            $eligible_election = ($_POST['eligible_election'] == "") ? NULL : $_POST['eligible_election'];
            $actif = ($_POST['actif'] == "") ? NULL : $_POST['actif'];
            $id_mangue = ($_POST['id_mangue'] == "") ? NULL : $_POST['id_mangue'];
            $telephone = ($_POST['telephone'] == "") ? NULL : $_POST['telephone'];
            $fin_enseignant = ($_POST['fin_enseignant'] == "") ? NULL : $_POST['fin_enseignant'];
            $debut_grade = ($_POST['debut_grade'] == "") ? NULL : $_POST['debut_grade'];

            $prenomETNom = $nom ." ". $prenom;

            $ancNom = $_POST['ancNom'];
            $ancPrenom = $_POST['ancPrenom'];
            $ancNom_jeune_fille = $_POST['ancNom_jeune_fille'];
            $ancSurnombre_emeritat = $_POST['ancSurnombre_emeritat'];
            $ancAbsence_depart_arrivee = $_POST['ancAbsence_depart_arrivee'];
            $ancCommentaire = $_POST['ancCommentaire'];
            $ancAffectation_support = $_POST['ancAffectation_support'];
            $ancCnu = $_POST['ancCnu'];
            $ancEmploi = $_POST['ancEmploi'];
            $ancSous_emploi = $_POST['ancSous_emploi'];
            $ancNext = $_POST['ancNext'];
            $ancListe_de_diffusion = $_POST['ancListe_de_diffusion'];
            $ancCourriel_univ = $_POST['ancCourriel_univ'];
            $ancCourriel_chu = $_POST['ancCourriel_chu'];
            $ancCourriel_autre = $_POST['ancCourriel_autre'];
            $ancGrade = $_POST['ancGrade'];
            $ancOuverture_droits_retraite = $_POST['ancOuverture_droits_retraite'];
            $ancAge_limite = $_POST['ancAge_limite'];
            $ancDate_limite_age = $_POST['ancDate_limite_age'];
            $ancEnfant_vivant_a_50ans = $_POST['ancEnfant_vivant_a_50ans'];
            $ancDate_previsionnelle = $_POST['ancDate_previsionnelle'];
            $ancDepart_effectif_ou_souhaite = $_POST['ancDepart_effectif_ou_souhaite'];
            $ancOption_remarque_retraite = $_POST['ancOption_remarque_retraite'];
            $ancDphu = $_POST['ancDphu'];
            $ancAffectation_pedagogique = $_POST['ancAffectation_pedagogique'];
            $ancNom_chu = $_POST['ancNom_chu'];
            $ancLaboratoire = $_POST['ancLaboratoire'];
            $ancTrajectoire_hu = $_POST['ancTrajectoire_hu'];
            $ancEmploi_cible = $_POST['ancEmploi_cible'];
            $ancAnnee_civile = $_POST['ancAnnee_civile'];
            $ancSuccession = $_POST['ancSuccession'];
            $ancCommission_evaluation_hu = $_POST['ancCommission_evaluation_hu'];
            $ancExperience = $_POST['ancExperience'];
            $ancMobilite = $_POST['ancMobilite'];
            $ancHdr = $_POST['ancHdr'];
            $ancPrecnu = $_POST['ancPrecnu'];
            $ancCommentaire_trajectoire_hu = $_POST['ancCommentaire_trajectoire_hu'];
            $ancDate_dernier_changement = $_POST['ancDate_dernier_changement'];
            $ancEligible_election = $_POST['ancEligible_election'];
            $ancActif = $_POST['ancActif'];
            $ancIdentifiant_mangue = $_POST['ancIdentifiant_mangue'];
            $ancTelephone = $_POST['ancTelephone'];
            $ancFin_enseignant = $_POST['ancFin_enseignant'];
            $ancDebut_grade = $_POST['debut_grade'];


    $TeacherManager = new TeacherManager();
    
    $req = $TeacherManager->modifTeacher($identifiant, $nom, $prenom, $nom_jeune_fille, $surnombre_emeritat, $absence_depart_arrivee, $commentaire, $affectation_support, $cnu, $emploi, $sous_emploi, $next, $liste_de_diffusion, $courriel_univ, $courriel_chu, $courriel_autre, $grade, $ouverture_droits_retraite, $age_limite,$date_limite_age, $enfant_vivant_a_50ans, $date_previsionnelle, $depart_effectif_ou_souhaite, $option_remarque_retraite, $dphu, $affectation_pedagogique, $nom_chu, $laboratoire, $trajectoire_hu, $emploi_cible, $annee_civile, $succession, $commission_evaluation_hu, $experience, $mobilite, $hdr, $precnu, $commentaire_trajectoire_hu, $date_dernier_changement, $eligible_election, $actif, $id_mangue, $telephone, $fin_enseignant,$debut_grade);


        if ($ancNom != $nom) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"nom",$ancNom,$nom);
    }

        if ($ancPrenom != $prenom) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"prenom",$ancPrenom,$prenom);
    }

        if ($ancNom_jeune_fille != $nom_jeune_fille) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"nom_jeune_fille",$ancNom_jeune_fille,$nom_jeune_fille);
    }

        if ($ancSurnombre_emeritat != $surnombre_emeritat) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"surnombre_emeritat",$ancSurnombre_emeritat,$surnombre_emeritat);
    }

        if ($ancAbsence_depart_arrivee != $absence_depart_arrivee) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"absence_depart_arrivee",$ancAbsence_depart_arrivee,$absence_depart_arrivee);
    }

        if ($ancCommentaire != $commentaire) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"commentaire",$ancCommentaire,$commentaire);
    }

        if ($ancAffectation_support != $affectation_support) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"affectation_support",$ancAffectation_support,$affectation_support);
    }

        if ($ancCnu != $cnu) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"cnu",$ancCnu,$cnu);
    }

        if ($ancEmploi != $emploi) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"emploi",$ancEmploi,$emploi);
    }

        if ($ancSous_emploi != $sous_emploi) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"sous_emploi",$ancSous_emploi,$sous_emploi);
    }

        if ($ancNext != $next) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"next",$ancNext,$next);
    }

        if ($ancListe_de_diffusion != $liste_de_diffusion) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"liste_de_diffusion",$ancListe_de_diffusion,$liste_de_diffusion);
    }

        if ($ancCourriel_univ != $courriel_univ) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"courriel_univ",$ancCourriel_univ,$courriel_univ);
    }

        if ($ancCourriel_chu != $courriel_chu) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"courriel_chu",$ancCourriel_chu,$courriel_chu);
    }

        if ($ancCourriel_autre != $courriel_autre) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"courriel_autre",$ancCourriel_autre,$courriel_autre);
    }

        if ($ancGrade != $grade) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"grade",$ancGrade,$grade);
    }

        if ($ancOuverture_droits_retraite != $ouverture_droits_retraite) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"ouverture_droits_retraite",$ancOuverture_droits_retraite,$ouverture_droits_retraite);
    }

        if ($ancAge_limite != $age_limite) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"age_limite",$ancAge_limite,$age_limite);
    }

        if ($ancDate_limite_age != $date_limite_age) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"date_limite_age",$ancDate_limite_age,$date_limite_age);
    }

        if ($ancEnfant_vivant_a_50ans != $enfant_vivant_a_50ans) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"enfant_vivant_a_50ans",$ancEnfant_vivant_a_50ans,$enfant_vivant_a_50ans);
    }

        if ($ancDate_previsionnelle != $date_previsionnelle) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"date_previsionnelle",$ancDate_previsionnelle,$date_previsionnelle);
    }

        if ($ancDepart_effectif_ou_souhaite != $depart_effectif_ou_souhaite) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"depart_effectif_ou_souhaite",$ancDepart_effectif_ou_souhaite,$depart_effectif_ou_souhaite);
    }

        if ($ancOption_remarque_retraite != $option_remarque_retraite) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"option_remarque_retraite",$ancOption_remarque_retraite,$option_remarque_retraite);
    }

        if ($ancDphu != $dphu) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"dphu",$ancDphu,$dphu);
    }

        if ($ancAffectation_pedagogique != $affectation_pedagogique) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"affectation_pedagogique",$ancAffectation_pedagogique,$affectation_pedagogique);
    }

        if ($ancNom_chu != $nom_chu) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"nom_chu",$ancNom_chu,$nom_chu);
    }

        if ($ancLaboratoire != $laboratoire) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"laboratoire",$ancLaboratoire,$laboratoire);
    }

        if ($ancTrajectoire_hu != $trajectoire_hu) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"trajectoire_hu",$ancTrajectoire_hu,$trajectoire_hu);
    }

        if ($ancEmploi_cible != $emploi_cible) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"emploi_cible",$ancEmploi_cible,$emploi_cible);
    }

        if ($ancAnnee_civile != $annee_civile) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"annee_civile",$ancAnnee_civile,$annee_civile);
    }

        if ($ancSuccession != $succession) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"succession",$ancSuccession,$succession);
    }

        if ($ancCommission_evaluation_hu != $commission_evaluation_hu) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"commission_evaluation_hu",$ancCommission_evaluation_hu,$commission_evaluation_hu);
    }

        if ($ancExperience != $experience) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"experience",$ancExperience,$experience);
    }

        if ($ancMobilite != $mobilite) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"mobilite",$ancMobilite,$mobilite);
    }

        if ($ancHdr != $hdr) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"hdr",$ancHdr,$hdr);
    }

        if ($ancPrecnu != $precnu) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"precnu",$ancPrecnu,$precnu);
    }

        if ($ancCommentaire_trajectoire_hu != $commentaire_trajectoire_hu) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"commentaire_trajectoire_hu",$ancCommentaire_trajectoire_hu,$commentaire_trajectoire_hu);
    }

        if ($ancDate_dernier_changement != $date_dernier_changement) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"date_dernier_changement",$ancDate_dernier_changement,$date_dernier_changement);
    }

        if ($ancEligible_election != $eligible_election) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"eligible_election",$ancEligible_election,$eligible_election);
    }

        if ($ancActif != $actif) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"actif",$ancActif,$actif);
    }

        if ($ancIdentifiant_mangue != $id_mangue) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"identifiant_mangue",$ancIdentifiant_mangue,$id_mangue);
    }

        if ($ancTelephone != $telephone) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"telephone",$ancTelephone,$telephone);
    }

        if ($ancFin_enseignant != $fin_enseignant) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"fin",$ancFin_enseignant,$fin_enseignant);
    }

        if ($ancDebut_grade != $debut_grade) {
        newSuivi("enseignants",$prenomETNom,$identifiant,"debut_grade",$ancDebut_grade,$debut_grade);
    }



    majEnseignantByAssign($identifiant);
    majEnseignantByRevisionEffectif($identifiant);
    majEnseignantByAbsence($identifiant);


    $TeacherManager = new TeacherManager();
    $req = $TeacherManager->getTeachersById($identifiant);
    require ("view/fronted/teacherView.php");



}



function editAssign()
{

    $identifiant_affectation = $_GET['identifiant_affectation'];

    require ("view/fronted/editAssign.php");
}


function modifAssign()
{
            
            $identifiant = $_POST['identifiant'];
            $support = ($_POST['support'] == "") ? NULL : $_POST['support'];
            $enseignant = ($_POST['enseignant'] == "") ? NULL : $_POST['enseignant'];
            $debut = ($_POST['debut'] == "") ? NULL : $_POST['debut'];
            $fin = ($_POST['fin'] == "") ? NULL : $_POST['fin'];
            $renseignements = ($_POST['renseignements'] == "") ? NULL : $_POST['renseignements']; 
            $nouvelle_fin_potentielle = ($_POST['nouvelle_fin_potentielle'] == "") ? NULL : $_POST['nouvelle_fin_potentielle'];
            $successeur_potentiel = ($_POST['successeur_potentiel'] == "") ? NULL : $_POST['successeur_potentiel']; 
            $chef_successeur = ($_POST['chef_successeur'] == "") ? NULL : $_POST['chef_successeur'];
            $action_affectation = ($_POST['action_affectation'] == "") ? NULL : $_POST['action_affectation'];
            $annee_civile = ($_POST['annee_civile'] == "") ? NULL : $_POST['annee_civile'];
            $validation_fiche = ($_POST['validation_fiche'] == "") ? NULL : $_POST['validation_fiche'];
            $emploi = ($_POST['emploi'] == "") ? NULL : $_POST['emploi'];
            $sous_emploi = ($_POST['sous_emploi'] == "") ? NULL : $_POST['sous_emploi'];

            $numeroEtEnseignant = $_POST['numeroEtEnseignant'];

            $ancSupport = $_POST['ancSupport'];
            $ancEnseignant = $_POST['ancEnseignant'];
            $ancDebut = $_POST['ancDebut'];
            $ancFin = $_POST['ancFin'];
            $ancRenseignements = $_POST['ancRenseignements']; 
            $ancNouvelle_fin_potentielle = $_POST['ancNouvelle_fin_potentielle'];
            $ancSuccesseur_potentiel = $_POST['ancSuccesseur_potentiel']; 
            $ancChef_successeur = $_POST['ancChef_successeur'];
            $ancAction_affectation = $_POST['ancAction_affectation']; 
            $ancAnnee_civile = $_POST['ancAnnee_civile'];
            $ancValidation_fiche = $_POST['ancValidation_fiche'];
            $ancEmploi = $_POST['ancEmploi'];
            $ancSous_emploi = $_POST['ancSous_emploi'];



    $AssignManager = new AssignManager();
    
    $req = $AssignManager->modifAssign($identifiant, $support, $enseignant, $debut, $fin, $renseignements, $nouvelle_fin_potentielle, $successeur_potentiel, $chef_successeur, $action_affectation, $annee_civile, $validation_fiche,$emploi,$sous_emploi);


        if ($ancSupport != $support) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"support",$ancSupport,$support);
    }

        if ($ancEnseignant != $enseignant) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"enseignant",$ancEnseignant,$enseignant);
    }

        if ($ancDebut != $debut) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"debut",$ancDebut,$debut);
    }

        if ($ancFin != $fin) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"fin",$ancFin,$fin);
    }

        if ($ancRenseignements != $renseignements) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"renseignements",$ancRenseignements,$renseignements);
    }

        if ($ancNouvelle_fin_potentielle != $nouvelle_fin_potentielle) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"nouvelle_fin_potentielle",$ancNouvelle_fin_potentielle,$nouvelle_fin_potentielle);
    }

        if ($ancSuccesseur_potentiel != $successeur_potentiel) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"successeur_potentiel",$ancSuccesseur_potentiel,$successeur_potentiel);
    }

        if ($ancChef_successeur != $chef_successeur) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"chef_successeur",$ancChef_successeur,$chef_successeur);
    }

        if ($ancAction_affectation != $action_affectation) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"action_affectation",$ancAction_affectation,$action_affectation);
    }

        if ($ancAnnee_civile != $annee_civile) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"annee_civile",$ancAnnee_civile,$annee_civile);
    }

        if ($ancValidation_fiche != $validation_fiche) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"validation_fiche",$ancValidation_fiche,$validation_fiche);
    }

        if ($ancEmploi != $emploi) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"emploi",$ancEmploi,$emploi);
    }

        if ($ancSous_emploi != $sous_emploi) {
        newSuivi("affectation_support",$numeroEtEnseignant,$identifiant,"sous_emploi",$ancSous_emploi,$sous_emploi);
    }



    majEnseignantByAssign($enseignant);


    $AssignManager = new AssignManager();

    $req = $AssignManager->getAssignsById($identifiant);

    require ("view/fronted/assignView.php"); 
}



function deleteTeacher()
{

    $prenomETNom = $_GET['prenom']." ".$_GET['nom'];

    $identifiant = $_GET['identifiant'];

    $TeacherManager = new TeacherManager();
    
    $req = $TeacherManager->corbeilleTeacher($identifiant);

    newSuivi("enseignant",$prenomETNom,$identifiant,"suppression","suppression","suppression");

    allTeachers();
}

function restoreTeacher()
{

    $prenomETNom = $_GET['prenom']." ".$_GET['nom'];

    $identifiant = $_GET['identifiant'];

    $TeacherManager = new TeacherManager();
    
    $req = $TeacherManager->restoreTeacher($identifiant);

    newSuivi("enseignant",$prenomETNom,$identifiant,"restauration","restauration","restauration");

    allTeachers();
}




function deleteAssign()
{

    $numeroEtEnseignant = $_GET['numero']." ".$_GET['prenom']." ".$_GET['nom'];

    $identifiant_affectation = $_GET['identifiant_affectation'];

    $identifiant_enseignant = $_GET['identifiant_enseignant'];

    $AssignManager = new AssignManager();
    
    $req = $AssignManager->corbeilleAssign($identifiant_affectation);

    newSuivi("affectation_support",$numeroEtEnseignant,$identifiant_affectation,"suppression","suppression","suppression");

    majEnseignantByAssign($identifiant_enseignant);

    allAssigns();
}

function restoreAssign()
{

    $numeroEtEnseignant = $_GET['numero']." ".$_GET['prenom']." ".$_GET['nom'];

    $identifiant_affectation = $_GET['identifiant_affectation'];

    $identifiant_enseignant = $_GET['identifiant_enseignant'];    

    $AssignManager = new AssignManager();
    
    $req = $AssignManager->restoreAssign($identifiant_affectation);

    newSuivi("affectation_support",$numeroEtEnseignant,$identifiant_affectation,"restauration","restauration","restauration");

    majEnseignantByAssign($identifiant_enseignant);

    allAssigns();
}


function confirmDeleteTeacher()
{

    $identifiant = $_GET['identifiant'];

    $TeacherManager = new TeacherManager();

    $req = $TeacherManager->getTeachersById($identifiant);

    require ("view/fronted/confirmDeleteTeacher.php");
}


function confirmDeleteAssign()
{

    $identifiant_affectation = $_GET['identifiant_affectation'];

    $AssignManager = new AssignManager();

    $req = $AssignManager->getAssignsById($identifiant_affectation);

    require ("view/fronted/confirmDeleteAssign.php");
}


function newSuivi($quoiTable,$nomEnregistrement,$idEnregistrement,$champsEnregistrement,$ancienneValeur,$nouvelleValeur)
{

    $qui = $_SESSION['nom'].' '.$_SESSION['prenom'];

    $SuiviManager = new SuiviManager();
    
    $req = $SuiviManager->createSuivi($qui,$quoiTable,$nomEnregistrement,$idEnregistrement,$champsEnregistrement,$ancienneValeur,$nouvelleValeur);
    
}


function suivi()
{
    $SuiviManager = new SuiviManager();
    
    $req = $SuiviManager->getAllSuivi();

    require ("view/fronted/allSuiviView.php");    
}


function listSuivi()
{

    $qui =  $_POST['qui'];
    $quand = $_POST['quand'];
    $quoiTable = $_POST['quoiTable'];
    $nomEnregistrement = $_POST['nomEnregistrement'];


    $SuiviManager = new SuiviManager();
    
    $req = $SuiviManager->getSuivi($qui,$quand,$quoiTable,$nomEnregistrement);

    require ("view/fronted/allSuiviView.php");    
}

function copyTeacher()
{

    $identifiant = $_GET['identifiant'];

    require ("view/fronted/copyTeacher.php");
}





function saveSearch()
{


    $modifSearch = $_POST['modifSearch'];


    if ($modifSearch != ""){


        $qui = $_SESSION['nom'].' '.$_SESSION['prenom'];

        $quoiTable = $_POST['quoiTable'];
        $nom = $_POST['nomSave'];
        $formule = $_POST['formule'];

        $saveSearchManager = new saveSearchManager();
        
        $req = $saveSearchManager->modifSaveSearch($modifSearch,$qui,$quoiTable,$nom,$formule);

        home(); 


    }

    else {


        $qui = $_SESSION['nom'].' '.$_SESSION['prenom'];

        $quoiTable = $_POST['quoiTable'];
        $nom = $_POST['nomSave'];
        $formule = $_POST['formule'];

        $saveSearchManager = new saveSearchManager();
        
        $req = $saveSearchManager->createSaveSearch($qui,$quoiTable,$nom,$formule);

        home(); 


    }


        





    
}



function suppSaveSearch()
{

    $formule = $_GET['formule'];

    $saveSearchManager = new saveSearchManager();
    
    $req = $saveSearchManager->suppSaveSearch($formule);

    home(); 
    
}




function exportCsv($filename,$data
,$colonne1
,$colonne2
,$colonne3
,$colonne4
,$colonne5
,$colonne6
,$colonne7
,$colonne8
,$colonne9
,$colonne10
,$colonne11
,$colonne12
,$colonne13
,$colonne14
,$colonne15
,$colonne16
,$colonne17
,$colonne18
,$colonne19
,$colonne20
,$colonne21
,$colonne22
,$colonne23
,$colonne24
,$colonne25
,$colonne26
,$colonne27
,$colonne28
,$colonne29
,$colonne30
,$colonne31
,$colonne32
,$colonne33
,$colonne34
,$colonne35
,$colonne36
,$colonne37
,$colonne38
,$colonne39
,$colonne40
,$colonne41
,$colonne42
,$colonne43
,$colonne44
,$colonne45
,$colonne46
,$colonne47
,$colonne48
,$colonne49
)
{


    


    $excel = "";
    $excel .=  "$colonne1;\t$colonne2;\t$colonne3;\t$colonne4;\t$colonne5;\t$colonne6;\t$colonne7;\t$colonne8;\t$colonne9;\t$colonne10;\t$colonne11;\t$colonne12;\t$colonne13;\t$colonne14;\t$colonne15;\t$colonne16;\t$colonne17;\t$colonne18;\t$colonne19;\t$colonne20;\t$colonne21;\t$colonne22;\t$colonne23;\t$colonne24;\t$colonne25;\t$colonne26;\t$colonne27;\t$colonne28;\t$colonne29;\t$colonne30;\t$colonne31;\t$colonne32;\t$colonne33;\t$colonne34;\t$colonne35;\t$colonne36;\t$colonne37;\t$colonne38;\t$colonne39;\t$colonne40;\t$colonne41;\t$colonne42;\t$colonne43;\t$colonne44;\t$colonne45;\t$colonne46;\t$colonne47;\t$colonne48;\t$colonne49\n";

    foreach($data as $row) {


$rowColonne1 = ($colonne1 == "") ? '' : $row[$colonne1];
$rowColonne2 = ($colonne2 == "") ? '' : $row[$colonne2];
$rowColonne3 = ($colonne3 == "") ? '' : $row[$colonne3];
$rowColonne4 = ($colonne4 == "") ? '' : $row[$colonne4];
$rowColonne5 = ($colonne5 == "") ? '' : $row[$colonne5];
$rowColonne6 = ($colonne6 == "") ? '' : $row[$colonne6];
$rowColonne7 = ($colonne7 == "") ? '' : $row[$colonne7];
$rowColonne8 = ($colonne8 == "") ? '' : $row[$colonne8];
$rowColonne9 = ($colonne9 == "") ? '' : $row[$colonne9];
$rowColonne10 = ($colonne10 == "") ? '' : $row[$colonne10];
$rowColonne11 = ($colonne11 == "") ? '' : $row[$colonne11];
$rowColonne12 = ($colonne12 == "") ? '' : $row[$colonne12];
$rowColonne13 = ($colonne13 == "") ? '' : $row[$colonne13];
$rowColonne14 = ($colonne14 == "") ? '' : $row[$colonne14];
$rowColonne15 = ($colonne15 == "") ? '' : $row[$colonne15];
$rowColonne16 = ($colonne16 == "") ? '' : $row[$colonne16];
$rowColonne17 = ($colonne17 == "") ? '' : $row[$colonne17];
$rowColonne18 = ($colonne18 == "") ? '' : $row[$colonne18];
$rowColonne19 = ($colonne19 == "") ? '' : $row[$colonne19];
$rowColonne20 = ($colonne20 == "") ? '' : $row[$colonne20];
$rowColonne21 = ($colonne21 == "") ? '' : $row[$colonne21];
$rowColonne22 = ($colonne22 == "") ? '' : $row[$colonne22];
$rowColonne23 = ($colonne23 == "") ? '' : $row[$colonne23];
$rowColonne24 = ($colonne24 == "") ? '' : $row[$colonne24];
$rowColonne25 = ($colonne25 == "") ? '' : $row[$colonne25];
$rowColonne26 = ($colonne26 == "") ? '' : $row[$colonne26];
$rowColonne27 = ($colonne27 == "") ? '' : $row[$colonne27];
$rowColonne28 = ($colonne28 == "") ? '' : $row[$colonne28];
$rowColonne29 = ($colonne29 == "") ? '' : $row[$colonne29];
$rowColonne30 = ($colonne30 == "") ? '' : $row[$colonne30];
$rowColonne31 = ($colonne31 == "") ? '' : $row[$colonne31];
$rowColonne32 = ($colonne32 == "") ? '' : $row[$colonne32];
$rowColonne33 = ($colonne33 == "") ? '' : $row[$colonne33];
$rowColonne34 = ($colonne34 == "") ? '' : $row[$colonne34];
$rowColonne35 = ($colonne35 == "") ? '' : $row[$colonne35];
$rowColonne36 = ($colonne36 == "") ? '' : $row[$colonne36];
$rowColonne37 = ($colonne37 == "") ? '' : $row[$colonne37];
$rowColonne38 = ($colonne38 == "") ? '' : $row[$colonne38];
$rowColonne39 = ($colonne39 == "") ? '' : $row[$colonne39];
$rowColonne40 = ($colonne40 == "") ? '' : $row[$colonne40];
$rowColonne41 = ($colonne41 == "") ? '' : $row[$colonne41];
$rowColonne42 = ($colonne42 == "") ? '' : $row[$colonne42];
$rowColonne43 = ($colonne43 == "") ? '' : $row[$colonne43];
$rowColonne44 = ($colonne44 == "") ? '' : $row[$colonne44];
$rowColonne45 = ($colonne45 == "") ? '' : $row[$colonne45];
$rowColonne46 = ($colonne46 == "") ? '' : $row[$colonne46];
$rowColonne47 = ($colonne47 == "") ? '' : $row[$colonne47];
$rowColonne48 = ($colonne48 == "") ? '' : $row[$colonne48];
$rowColonne49 = ($colonne49 == "") ? '' : $row[$colonne49];




        $excel .= "$rowColonne1;\t$rowColonne2;\t$rowColonne3;\t$rowColonne4;\t$rowColonne5;\t$rowColonne6;\t$rowColonne7;\t$rowColonne8;\t$rowColonne9;\t$rowColonne10;\t$rowColonne11;\t$rowColonne12;\t$rowColonne13;\t$rowColonne14;\t$rowColonne15;\t$rowColonne16;\t$rowColonne17;\t$rowColonne18;\t$rowColonne19;\t$rowColonne20;\t$rowColonne21;\t$rowColonne22;\t$rowColonne23;\t$rowColonne24;\t$rowColonne25;\t$rowColonne26;\t$rowColonne27;\t$rowColonne28;\t$rowColonne29;\t$rowColonne30;\t$rowColonne31;\t$rowColonne32;\t$rowColonne33;\t$rowColonne34;\t$rowColonne35;\t$rowColonne36;\t$rowColonne37;\t$rowColonne38;\t$rowColonne39;\t$rowColonne40;\t$rowColonne41;\t$rowColonne42;\t$rowColonne43;\t$rowColonne44;\t$rowColonne45;\t$rowColonne46;\t$rowColonne47;\t$rowColonne48;\t$rowColonne49\n";
    }

    // header('Content-Encoding: UTF-8');
    // header('Content-type: text/csv; charset=UTF-8');
    // header('Content-disposition: attachment; filename="'.$filename.'.csv"');
    // echo "\xEF\xBB\xBF";
    // print $excel;
    // exit;


    // header('Content-Description: File Transfer');
    // header('Content-Type: application/octet-stream');
    // header('Content-Disposition: attachment; filename="'.$filename.'.csv"');
    // header('Content-Transfer-Encoding: binary');
    // header('Expires: 0');
    // header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    // header('Pragma: public');
    // echo "\xEF\xBB\xBF"; // UTF-8 BOM
    // echo $excel;
    // exit();
    
    
    header ( 'HTTP/1.1 200 OK' );
    header ( 'Date: ' . date ( 'D M j G:i:s T Y' ) );
    header ( 'Last-Modified: ' . date ( 'D M j G:i:s T Y' ) );
    header ( 'Content-Type: application/vnd.ms-excel') ;
    header ( 'Content-Disposition: attachment;filename="'.$filename.'.csv"' );
    print chr(255) . chr(254) . mb_convert_encoding($excel, 'UTF-16LE', 'UTF-8');
    exit;


}



function exportAllTeacher()
{

    $TeacherManager = new TeacherManager();
    
    $req = $TeacherManager->getAllTeachers('present');

    $allTeachers = $req->fetchAll();

    exportCsv("enseignants",$allTeachers,'identifiant', 'nom', 'prenom', 'nom_jeune_fille', 'statut_surnombre_emeritat', 'etat_absence_depart_arrivee', 'commentaire', 'numero_support', 'identifiant_cnu', 'libelle_cnu', 'intitule_emploi', 'intitule_sous_emploi', 'financement_next', 'etat_liste_de_diffusion', 'courriel_univ', 'courriel_chu', 'courriel_autre', 'telephone', 'ouverture_droits_retraite', 'age_limite', 'date_limite_age', 'enfant_vivant_a_50ans', 'date_previsionnelle', 'depart_effectif_ou_souhaite', 'option_remarque_retraite', 'intitule_dphu', 'intitule_affectation_pedagogique', 'nom_chu', 'affectation_hospitaliere', 'code_laboratoire', 'etat_trajectoire_hu', 'intitule_emploi_cible', 'annee_annee_civile', 'numero_formate_succession', 'annee_civile_commission_hu', 'annee_civile_commission_hu2', 'etat_experience', 'etat_mobilite', 'etat_hdr', 'etat_precnu', 'commentaire_trajectoire_hu', 'etat_actif', 'etat_eligible_election', 'etat_grade', 'debut_grade2', 'date_dernier_changement2', 'fin_enseignant2','etatCorbeille','');

    allTeachers(); 
    
}



function exportListTeacher()
{

    $corbeille = $_GET['corbeille'];
    $name = $_GET['nom'];
    $affectation_hospitaliere = $_GET['affectation_hospitaliere'];

    $actif = $_GET['actif'];
    $prenom = $_GET['prenom'];
    $emploi = $_GET['emploi'];
    $cnu = $_GET['cnu'];
    $absence_depart_arrivee = $_GET['absence_depart_arrivee'];

    $liste_de_diffusion = $_GET['liste_de_diffusion'];
    $sous_emploi = $_GET['sous_emploi'];
    $dphu = $_GET['dphu'];
    $affectation_pedagogique = $_GET['affectation_pedagogique'];
    $laboratoire = $_GET['laboratoire'];
    $next = $_GET['next'];
    $trajectoire_hu = $_GET['trajectoire_hu'];
    $annee_civile = $_GET['annee_civile'];
    $emploi_cible = $_GET['emploi_cible'];
    $succession = $_GET['succession'];
    $commission_evaluation_hu = $_GET['commission_evaluation_hu'];
    $experience = $_GET['experience'];
    $mobilite = $_GET['mobilite'];
    $hdr = $_GET['hdr'];
    $precnu = $_GET['precnu'];
    $date_dernier_changement = $_GET['date_dernier_changement'];
    $fin_enseignant = $_GET['fin_enseignant'];
    $eligible_election = $_GET['eligible_election'];
    $grade = $_GET['grade'];
    $debut_grade = $_GET['debut_grade'];
    $ouverture_droits_retraite = $_GET['ouverture_droits_retraite'];
    $age_limite = $_GET['age_limite'];
    $date_limite_age = $_GET['date_limite_age'];
    $enfant_vivant_a_50ans = $_GET['enfant_vivant_a_50ans'];
    $date_previsionnelle = $_GET['date_previsionnelle'];
    $depart_effectif_ou_souhaite = $_GET['depart_effectif_ou_souhaite'];
    $option_remarque_retraite = $_GET['option_remarque_retraite'];
    $surnombre_emeritat = $_GET['surnombre_emeritat'];

    


    $TeacherManager = new TeacherManager();
    
    $req = $TeacherManager->getTeachers($actif,$corbeille,$name,$prenom,$emploi,$cnu,$affectation_hospitaliere,$absence_depart_arrivee,



        $liste_de_diffusion,
        $sous_emploi,
        $dphu,
        $affectation_pedagogique,
        $laboratoire,
        $next,
        $trajectoire_hu,
        $annee_civile,
        $emploi_cible,
        $succession,
        $commission_evaluation_hu,
        $experience,
        $mobilite,
        $hdr,
        $precnu,
        $date_dernier_changement,
        $fin_enseignant,
        $eligible_election,
        $grade,
        $debut_grade,
        $ouverture_droits_retraite,
        $age_limite,
        $date_limite_age,
        $enfant_vivant_a_50ans,
        $date_previsionnelle,
        $depart_effectif_ou_souhaite,
        $option_remarque_retraite,
        $surnombre_emeritat


    );


    $listTeachers = $req->fetchAll();

    exportCsv("enseignants",$listTeachers,'identifiant', 'nom', 'prenom', 'nom_jeune_fille', 'statut_surnombre_emeritat', 'etat_absence_depart_arrivee', 'commentaire', 'numero_support', 'identifiant_cnu', 'libelle_cnu', 'intitule_emploi', 'intitule_sous_emploi', 'financement_next', 'etat_liste_de_diffusion', 'courriel_univ', 'courriel_chu', 'courriel_autre', 'telephone', 'ouverture_droits_retraite', 'age_limite', 'date_limite_age', 'enfant_vivant_a_50ans', 'date_previsionnelle', 'depart_effectif_ou_souhaite', 'option_remarque_retraite', 'intitule_dphu', 'intitule_affectation_pedagogique', 'nom_chu', 'affectation_hospitaliere', 'code_laboratoire', 'etat_trajectoire_hu', 'intitule_emploi_cible', 'annee_annee_civile', 'numero_formate_succession', 'annee_civile_commission_hu', 'annee_civile_commission_hu2', 'etat_experience', 'etat_mobilite', 'etat_hdr', 'etat_precnu', 'commentaire_trajectoire_hu', 'etat_actif', 'etat_eligible_election', 'etat_grade', 'debut_grade2', 'date_dernier_changement2', 'fin_enseignant2','etatCorbeille','');

    allTeachers(); 
    
}


function exportAllAssign()
{

    $AssignManager = new AssignManager();
    
    $req = $AssignManager->getAllAssigns('present');

    $allAssigns = $req->fetchAll();

    exportCsv("affectation_support",$allAssigns, 'numero_formate_support', 'nom_enseignant', 'prenom_enseignant', 'cnu', 'pole', 'service', 'emploi_enseignant', 'sous_emploi_enseignant', 'debut2', 'fin2', 'renseignements', 'nouvelle_fin_potentielle', 'successeur_potentiel', 'nom_chef_successeur', 'action_affectation', 'annee_annee_civile', 'etat_validation_fiche', 'etatCorbeille','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


    allAssigns(); 
    
}



function exportListAssign()
{

    $corbeille = $_GET['corbeille'];
    $support = $_GET['support'];
    $startDate = $_GET['startDate'];
    $fin = $_GET['fin'];
    $enseignant = $_GET['enseignant'];
    $emploi = $_GET['emploi'];
    $sous_emploi = $_GET['sous_emploi'];

    $action_affectation = $_GET['action_affectation'];

    $AssignManager = new AssignManager();

    $req = $AssignManager->getAssigns($corbeille,$support,$startDate,$fin,$enseignant,'',$emploi,$sous_emploi,$action_affectation);

    $listAssigns = $req->fetchAll();

    exportCsv("affectation_support",$listAssigns, 'numero_formate_support', 'nom_enseignant', 'prenom_enseignant', 'cnu', 'pole', 'service', 'emploi_enseignant', 'sous_emploi_enseignant', 'debut2', 'fin2', 'renseignements', 'nouvelle_fin_potentielle', 'successeur_potentiel', 'nom_chef_successeur', 'action_affectation', 'annee_annee_civile', 'etat_validation_fiche', 'etatCorbeille','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

    allAssigns();
    
}




function login()
{

    require ("view/fronted/loginView.php");
    
}


function profil()
{

    require ("view/fronted/editProfil.php");
    
}

function changeProfil()
{

    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];
    $newPassword = $_POST['newPassword'];


    $LoginManager = new LoginManager();
    $req = $LoginManager->getLoginById($identifiant);
    $data = $req->fetch();


    if ($password == $data['password']) {

    $LoginManager = new loginManager();
    $req = $LoginManager->modifLogin($identifiant, $newPassword);


    home();

    }


    else {

    $error = 'incorrectPassword';
    require ("view/fronted/editProfil.php");

    }

}











function allEvents()
{ 

    $eventsManager = new eventsManager();

    $req = $eventsManager->getAllEvents('present');

    require ("view/fronted/listEventsView.php");   

}



function listEvents()
{

    $search = true;

    if (isset($_POST['nom'])){
        $nom =  $_POST['nom'];
    }

    if (isset($_POST['type'])){
        $type = $_POST['type'];
    }

    if (isset($_POST['contenu'])){
        $contenu =  $_POST['contenu'];
    }

    if (isset($_POST['debut'])){
        $debut = $_POST['debut'];
    }

    if (isset($_POST['fin'])){
        $fin = $_POST['fin'];
    }

    if (isset($_POST['enseignant'])){
        $enseignant = $_POST['enseignant'];
    }


    $corbeille = 'present';


    if (isset($_POST['corbeille'])){
        $corbeille = 'corbeille';
    }

    $formule = (isset($_POST['loadSearch'])) ? $_POST['loadSearch'] : "";


    $identifiantSearch = (isset($_POST['loadSearch'])) ? $_POST['loadSearch'] : "";


    if (isset($_POST['loadSearch'])){
        $presearch = true;

        $saveSearchManager = new saveSearchManager();
        $reqSaveLoad = $saveSearchManager->getSaveSearchById($identifiantSearch);
        $dataSaveLoad = $reqSaveLoad->fetch();

        $formule = $dataSaveLoad['formule'];

        $conditions = explode(";",$formule);
        $nom =  $conditions[0];
        $type = $conditions[1];
        $contenu = $conditions[2];
        $debut = $conditions[3];
        $fin = $conditions[4];
        $enseignant = $conditions[5];
        $corbeille = ($conditions[6] == "") ? 'present' : 'corbeille';
    }
    
    $eventsManager = new eventsManager();

    $req = $eventsManager->getEvents($corbeille,$nom,$type,$contenu,$debut,$fin,$enseignant);

    require ("view/fronted/listEventsView.php");    
}



function event()
{
    $identifiant = $_GET['identifiant'];
    
    $eventsManager = new eventsManager();

    $req = $eventsManager->getEventsById($identifiant);

    require ("view/fronted/eventView.php");   
}



function createEvent()
{

    require ("view/fronted/createEvent.php");

}


function newEvent()
{
    $nom = ($_POST['nom'] == "") ? NULL : $_POST['nom'];
    $type = ($_POST['type'] == "") ? NULL : $_POST['type'];
    $contenu = ($_POST['contenu'] == "") ? NULL : $_POST['contenu'];
    $debut = ($_POST['debut'] == "") ? NULL : $_POST['debut'];
    $fin = ($_POST['fin'] == "") ? NULL : $_POST['fin'];
    $enseignant = ($_POST['enseignant'] == "") ? NULL : $_POST['enseignant'];

    $eventsManager = new eventsManager();

    $req = $eventsManager->createEvent($nom,$type,$contenu,$debut,$fin,$enseignant);


    newSuivi("evenement",$nom,NULL,"nouveau","nouveau","nouveau");


    allEvents();    
}



function editEvent()
{

    $identifiant = $_GET['identifiant'];

    require ("view/fronted/editEvent.php");
}



function modifEvent()
{
      
    $identifiant = $_POST['identifiant'];      
    $nom = ($_POST['nom'] == "") ? NULL : $_POST['nom'];
    $type = ($_POST['type'] == "") ? NULL : $_POST['type'];
    $contenu = ($_POST['contenu'] == "") ? NULL : $_POST['contenu'];
    $debut = ($_POST['debut'] == "") ? NULL : $_POST['debut'];
    $fin = ($_POST['fin'] == "") ? NULL : $_POST['fin'];
    $enseignant = ($_POST['enseignant'] == "") ? NULL : $_POST['enseignant'];



    $ancNom = $_POST['ancNom'];
    $ancType = $_POST['ancType'];
    $ancContenu = $_POST['ancContenu'];
    $ancDebut = $_POST['ancDebut'];
    $ancFin = $_POST['ancFin'];
    $ancEnseignant = $_POST['ancEnseignant'];



    $eventsManager = new eventsManager();

    $req = $eventsManager->modifEvent($identifiant,$nom,$type,$contenu,$debut,$fin,$enseignant);


    if ($ancNom != $nom) {
        newSuivi("evenement",$nom,$identifiant,"nom",$ancNom,$nom);
    }

    if ($ancType != $type) {
        newSuivi("evenement",$nom,$identifiant,"type",$ancType,$type);
    }

    if ($ancContenu != $contenu) {
        newSuivi("evenement",$nom,$identifiant,"contenu",$ancContenu,$contenu);
    }

    if ($ancDebut != $debut) {
        newSuivi("evenement",$nom,$identifiant,"debut",$ancDebut,$debut);
    }

    if ($ancFin != $fin) {
        newSuivi("evenement",$nom,$identifiant,"fin",$ancFin,$fin);
    }

    if ($ancEnseignant != $enseignant) {
        newSuivi("evenement",$nom,$identifiant,"enseignant",$ancEnseignant,$enseignant);
    }


    $eventsManager = new eventsManager();

    $req = $eventsManager->getEventsById($identifiant);

    require ("view/fronted/eventView.php");  

}


function confirmDeleteEvent()
{

    $identifiant = $_GET['identifiant'];

    $eventsManager = new eventsManager();

    $req = $eventsManager->getEventsById($identifiant);

    require ("view/fronted/confirmDeleteEvent.php");
}


function deleteEvent()
{


    $identifiant = $_GET['identifiant'];

    $nom = $_GET['nom'];

    $eventsManager = new eventsManager();

    $req = $eventsManager->corbeilleEvent($identifiant);

    newSuivi("evenement",$nom,$identifiant,"suppression","suppression","suppression");

    allEvents();
}

function restoreEvent()
{


    $identifiant = $_GET['identifiant'];

    $nom = $_GET['nom'];

    $eventsManager = new eventsManager();

    $req = $eventsManager->restoreEvent($identifiant);

    newSuivi("evenement",$nom,$identifiant,"restauration","restauration","restauration");

    allEvents();
}


function exportAllEvents()
{

    $eventsManager = new eventsManager();

    $req = $eventsManager->getAllEvents('present');

    $allEvents = $req->fetchAll();

    exportCsv("evenement",$allEvents, 'nom', 'type','debut', 'fin', 'contenu','enseignant', '', '', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

    allEvents(); 
    
}



function exportListEvents()
{

    $corbeille = $_GET['corbeille'];
    $nom = $_GET['nom'];
    $type = $_GET['type'];
    $contenu = $_GET['contenu'];
    $debut = $_GET['debut'];
    $fin = $_GET['fin'];
    $enseignant = $_GET['enseignant'];

    $eventsManager = new eventsManager();

    $req = $eventsManager->getEvents($corbeille,$nom,$type,$contenu,$debut,$fin,$enseignant);

    $listEvents = $req->fetchAll();

    exportCsv("evenement",$listEvents,'nom', 'type','debut', 'fin', 'contenu','enseignant', '', '', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

    allEvents(); 
    
}


function copyEvent()
{

    $identifiant = $_GET['identifiant'];

    require ("view/fronted/copyEvent.php");
}






















function allEventsSpe($typeEvent)
{ 

    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->getAllEventsSpe($typeEvent,'present');

    require ("view/fronted/Spe/listEventsView.php");   

}



function listEventsSpe($typeEvent)
{

    $search = true;

    if (isset($_POST['nom'])){
        $nom =  $_POST['nom'];
    }

    if (isset($_POST['type'])){
        $type = $_POST['type'];
    }

    if (isset($_POST['contenu'])){
        $contenu =  $_POST['contenu'];
    }

    if (isset($_POST['debut'])){
        $debut = $_POST['debut'];
    }

    if (isset($_POST['fin'])){
        $fin = $_POST['fin'];
    }

    if (isset($_POST['enseignant'])){
        $enseignant = $_POST['enseignant'];
    }


    $parametre2 = "";
    $parametre3 = "";


    if (isset($_POST['thematiqueTaches'])){
        $parametre1 = $_POST['thematiqueTaches'];
    }


    if (isset($_POST['nature_primes_hr'])){
        $parametre1 = $_POST['nature_primes_hr'];
    }


    if (isset($_POST['avis_avancement'])){
        $parametre1 = $_POST['avis_avancement'];
    }


    if (isset($_POST['absence_depart_arrivee'])){
        $parametre1 = $_POST['absence_depart_arrivee'];
    }


    if (isset($_POST['emploi_cible'])){
        $parametre1 = $_POST['emploi_cible'];
    }





    if (isset($_POST['montant'])){
        $parametre2 = $_POST['montant'];
    }

    if (isset($_POST['grade_cible'])){
        $parametre2 = $_POST['grade_cible'];
    }

    if (isset($_POST['support_cible'])){
        $parametre2 = $_POST['support_cible'];
    }



    if (isset($_POST['heures'])){
        $parametre3 = $_POST['heures'];
    }    







    $corbeille = 'present';


    if (isset($_POST['corbeille'])){
        $corbeille = 'corbeille';
    }

    $formule = (isset($_POST['loadSearch'])) ? $_POST['loadSearch'] : "";


    $identifiantSearch = (isset($_POST['loadSearch'])) ? $_POST['loadSearch'] : "";


    if (isset($_POST['loadSearch'])){
        $presearch = true;

        $saveSearchManager = new saveSearchManager();
        $reqSaveLoad = $saveSearchManager->getSaveSearchById($identifiantSearch);
        $dataSaveLoad = $reqSaveLoad->fetch();

        $formule = $dataSaveLoad['formule'];

        $conditions = explode(";",$formule);
        $nom =  $conditions[0];
        $type = $conditions[1];
        $contenu = $conditions[2];
        $debut = $conditions[3];
        $fin = $conditions[4];
        $enseignant = $conditions[5];
        $corbeille = ($conditions[6] == "") ? 'present' : 'corbeille';


            switch ($typeEvent)
            {
                case 'Taches' :

                    $parametre1 = $conditions[7];

                break;


                case 'Revision_effectifs' :

                    $parametre1 = $conditions[7];

                break;


                case 'Absence_departs' :

                    $parametre1 = $conditions[7];

                break;


                case 'Avancements' :

                    $parametre1 = $conditions[7];

                    $parametre2 = $conditions[8];

                break;


                case 'Primes_hr' :

                    $parametre1 = $conditions[7];

                    $parametre2 = $conditions[8];
                    $parametre3 = $conditions[9];


                break;

                default:
                    throw new Exception('Aucun typeEvent trouvé pour filtre list');
            }
        




    }
    
    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->getEventsSpe($typeEvent,$corbeille,$nom,$type,$contenu,$debut,$fin,$enseignant,'',$parametre1,$parametre2,$parametre3);

    require ("view/fronted/Spe/listEventsView.php");    
}




function eventSpe($typeEvent)
{
    $identifiant = $_GET['identifiant'];
    
    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->getEventsSpeById($typeEvent,$identifiant);

    require ("view/fronted/Spe/eventView.php");   
}



function createEventSpe($typeEvent)
{

    $identifiant_enseignant = ($_GET['identifiant_enseignant'] == "") ? NULL : $_GET['identifiant_enseignant'];

    $TeacherManagerById = new TeacherManager();
    $reqEnseignant = $TeacherManagerById->getTeachersById($identifiant_enseignant);
    $dataEnseigant = $reqEnseignant->fetch();


    if (!empty($dataEnseigant)) {

        $nom_enseignant = ($dataEnseigant['nom'] == "") ? NULL : $dataEnseigant['nom'];

    }

    else

    {

        $identifiant_enseignant = NULL;
        $nom_enseignant = NULL;

    }
    




    require ("view/fronted/Spe/createEvent.php");


}


function newEventSpe($typeEvent)
{
    $nom = ($_POST['nom'] == "") ? NULL : $_POST['nom'];
    $type = ($_POST['type'] == "") ? NULL : $_POST['type'];
    $contenu = ($_POST['contenu'] == "") ? NULL : $_POST['contenu'];


    $debut = ($_POST['debut'] == "") ? NULL : $_POST['debut'];
//  $debut = ($data2['debut_grade'] == "") ? NULL : $data2['debut_grade'];


    $fin = ($_POST['fin'] == "") ? NULL : $_POST['fin'];
    $enseignant = ($_POST['enseignant'] == "") ? NULL : $_POST['enseignant'];


    $TeacherManager = new TeacherManager();
    $req2 = $TeacherManager->getTeachersById($enseignant);
    $data2 = $req2->fetch();






    $parametre2 = "";
    $parametre3 = "";




        switch ($typeEvent)
        {
            case 'Taches' :

                $parametre1 = ($_POST['thematiqueTaches'] == "") ? NULL : $_POST['thematiqueTaches'];

            break;


            case 'Revision_effectifs' :

                $parametre1 = ($_POST['emploi_cible'] == "") ? NULL : $_POST['emploi_cible'];
                $parametre2 = ($_POST['support_cible'] == "") ? NULL : $_POST['support_cible'];

                $SupportManager = new SupportManager();
    
                $reqMajSupportDateBlocage = $SupportManager->majSupportDateBlocage($parametre2,$fin);
                

                $AssignManager = new AssignManager();

                $reqAssign = $AssignManager->getAssignsByCurrentDate('present', $enseignant);

                $dataAssign = $reqAssign->fetch();


                $reqMajSupportDateLiberation = $SupportManager->majSupportDateLiberation($dataAssign['identifiant_support'],$fin);

            break;


            case 'Absence_departs' :

                $parametre1 = ($_POST['absence_depart_arrivee'] == "") ? NULL : $_POST['absence_depart_arrivee'];

            break;


            case 'Avancements' :

                $parametre1 = ($_POST['avis_avancement'] == "") ? NULL : $_POST['avis_avancement'];

                $parametre2 = ($_POST['grade_cible'] == "") ? NULL : $_POST['grade_cible'];

            break;


            case 'Primes_hr' :

                $parametre1 = ($_POST['nature_primes_hr'] == "") ? NULL : $_POST['nature_primes_hr'];
                $parametre2 = ($_POST['montant'] == "") ? NULL : $_POST['montant'];
                $parametre3 = ($_POST['heures'] == "") ? NULL : $_POST['heures'];


            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour filtre list');
        }





    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->createEventSpe($typeEvent,$nom,$type,$contenu,$debut,$fin,$enseignant,$parametre1,$parametre2,$parametre3);




    newSuivi($typeEvent,$nom,NULL,"nouveau","nouveau","nouveau");




        switch ($typeEvent)
        {
            case 'Taches' :



            break;


            case 'Revision_effectifs' :

                majEnseignantByRevisionEffectif($enseignant);

            break;


            case 'Absence_departs' :

                majEnseignantByAbsence($enseignant);

            break;


            case 'Avancements' :



            break;


            case 'Primes_hr' :




            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour filtre list');
        }





    allEventsSpe($typeEvent);    
}



function editEventSpe($typeEvent)
{

    $identifiant = $_GET['identifiant'];

    require ("view/fronted/Spe/editEvent.php");
}



function modifEventSpe($typeEvent)
{
      
    $identifiant = $_POST['identifiant'];      
    $nom = ($_POST['nom'] == "") ? NULL : $_POST['nom'];
    $type = ($_POST['type'] == "") ? NULL : $_POST['type'];
    $contenu = ($_POST['contenu'] == "") ? NULL : $_POST['contenu'];
    $debut = ($_POST['debut'] == "") ? NULL : $_POST['debut'];
    $fin = ($_POST['fin'] == "") ? NULL : $_POST['fin'];
    $enseignant = ($_POST['enseignant'] == "") ? NULL : $_POST['enseignant'];



    $ancNom = $_POST['ancNom'];
    $ancType = $_POST['ancType'];
    $ancContenu = $_POST['ancContenu'];
    $ancDebut = $_POST['ancDebut'];
    $ancFin = $_POST['ancFin'];
    $ancEnseignant = $_POST['ancEnseignant'];


    $parametre2 = "";
    $parametre3 = "";



        switch ($typeEvent)
        {
            case 'Taches' :

                $parametre1 = ($_POST['thematiqueTaches'] == "") ? NULL : $_POST['thematiqueTaches'];
                $ancParametre1 = $_POST['ancThematiqueTaches'];

            break;


            case 'Revision_effectifs' :

                $parametre1 = ($_POST['emploi_cible'] == "") ? NULL : $_POST['emploi_cible'];
                $ancParametre1 = $_POST['ancEmploi_cible'];

                $parametre2 = ($_POST['support_cible'] == "") ? NULL : $_POST['support_cible'];
                $ancParametre2 = $_POST['ancSupport_cible'];


                $SupportManager = new SupportManager();
    
                $reqMajSupportDateBlocage = $SupportManager->majSupportDateBlocage($parametre2,$fin);
                

                $AssignManager = new AssignManager();

                $reqAssign = $AssignManager->getAssignsByCurrentDate('present', $enseignant);

                $dataAssign = $reqAssign->fetch();


                $reqMajSupportDateLiberation = $SupportManager->majSupportDateLiberation($dataAssign['identifiant_support'],$fin);


            break;


            case 'Absence_departs' :

                $parametre1 = ($_POST['absence_depart_arrivee'] == "") ? NULL : $_POST['absence_depart_arrivee'];
                $ancParametre1 = $_POST['ancAbsence_depart_arrivee'];

            break;


            case 'Avancements' :

                $parametre1 = ($_POST['avis_avancement'] == "") ? NULL : $_POST['avis_avancement'];
                $ancParametre1 = $_POST['ancAvis_avancement'];

                $parametre2 = ($_POST['grade_cible'] == "") ? NULL : $_POST['grade_cible'];
                $ancParametre2 = $_POST['ancGrade_cible'];

            break;


            case 'Primes_hr' :

                $parametre1 = ($_POST['nature_primes_hr'] == "") ? NULL : $_POST['nature_primes_hr'];
                $ancParametre1 = $_POST['ancNature_Primes_hr'];

                $parametre2 = ($_POST['montant'] == "") ? NULL : $_POST['montant'];
                $ancParametre2 = $_POST['ancMontant'];

                $parametre3 = ($_POST['heures'] == "") ? NULL : $_POST['heures'];
                $ancParametre3 = $_POST['ancHeures'];



            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour filtre list');
        }







    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->modifEventSpe($typeEvent,$identifiant,$nom,$type,$contenu,$debut,$fin,$enseignant,$parametre1,$parametre2,$parametre3);


    if ($ancNom != $nom) {
        newSuivi($typeEvent,$nom,$identifiant,"nom",$ancNom,$nom);
    }

    if ($ancType != $type) {
        newSuivi($typeEvent,$nom,$identifiant,"type_evenement_spe",$ancType,$type);
    }

    if ($ancContenu != $contenu) {
        newSuivi($typeEvent,$nom,$identifiant,"contenu",$ancContenu,$contenu);
    }

    if ($ancDebut != $debut) {
        newSuivi($typeEvent,$nom,$identifiant,"debut",$ancDebut,$debut);
    }

    if ($ancFin != $fin) {
        newSuivi($typeEvent,$nom,$identifiant,"fin",$ancFin,$fin);
    }

    if ($ancEnseignant != $enseignant) {
        newSuivi($typeEvent,$nom,$identifiant,"enseignants",$ancEnseignant,$enseignant);
    }


    switch ($typeEvent)
    {
        case 'Taches' :

            if ($ancParametre1 != $parametre1) {
            newSuivi($typeEvent,$nom,$identifiant,"thematique_taches",$ancParametre1,$parametre1);
            }

        break;


        case 'Revision_effectifs' :

            if ($ancParametre1 != $parametre1) {
            newSuivi($typeEvent,$nom,$identifiant,"emploi",$ancParametre1,$parametre1);
            }

            if ($ancParametre2 != $parametre2) {
            newSuivi($typeEvent,$nom,$identifiant,"support_cible",$ancParametre2,$parametre2);
            }

        break;


        case 'Absence_departs' :

            if ($ancParametre1 != $parametre1) {
            newSuivi($typeEvent,$nom,$identifiant,"absence_depart_arrivee",$ancParametre1,$parametre1);
            }

        break;


        case 'Avancements' :

            if ($ancParametre1 != $parametre1) {
            newSuivi($typeEvent,$nom,$identifiant,"avis_avancement",$ancParametre1,$parametre1);
            }

            if ($ancParametre2 != $parametre2) {
            newSuivi($typeEvent,$nom,$identifiant,"grade_cible",$ancParametre2,$parametre2);
            }

        break;


        case 'Primes_hr' :

            if ($ancParametre1 != $parametre1) {
            newSuivi($typeEvent,$nom,$identifiant,"nature_primes_hr",$ancParametre1,$parametre1);
            }

            if ($ancParametre2 != $parametre2) {
            newSuivi($typeEvent,$nom,$identifiant,"montant",$ancParametre2,$parametre2);
            }

            if ($ancParametre3 != $parametre3) {
            newSuivi($typeEvent,$nom,$identifiant,"heures",$ancParametre3,$parametre3);
            }

        break;

        default:
            throw new Exception('Aucun typeEvent trouvé pour filtre list');
    }





        switch ($typeEvent)
        {
            case 'Taches' :



            break;


            case 'Revision_effectifs' :

                majEnseignantByRevisionEffectif($enseignant);

            break;


            case 'Absence_departs' :

                majEnseignantByAbsence($enseignant);

            break;


            case 'Avancements' :



            break;


            case 'Primes_hr' :




            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour filtre list');
        }



    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->getEventsSpeById($typeEvent,$identifiant);

    require ("view/fronted/Spe/eventView.php");  

 
}


function confirmDeleteEventSpe($typeEvent)
{

    $identifiant = $_GET['identifiant'];

    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->getEventsSpeById($typeEvent,$identifiant);

    require ("view/fronted/Spe/confirmDeleteEvent.php");
}


function deleteEventSpe($typeEvent)
{


    $identifiant = $_GET['identifiant'];

    $nom = $_GET['nom'];

    $enseignant = $_GET['enseignant'];

    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->corbeilleEventSpe($typeEvent,$identifiant);

    newSuivi($typeEvent,$nom,$identifiant,"suppression","suppression","suppression");



        switch ($typeEvent)
        {
            case 'Taches' :



            break;


            case 'Revision_effectifs' :

                majEnseignantByRevisionEffectif($enseignant);

            break;


            case 'Absence_departs' :

                majEnseignantByAbsence($enseignant);

            break;


            case 'Avancements' :



            break;


            case 'Primes_hr' :




            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour filtre list');
        }



    allEventsSpe($typeEvent);
}


function restoreEventSpe($typeEvent)
{


    $identifiant = $_GET['identifiant'];

    $nom = $_GET['nom'];

    $enseignant = $_GET['enseignant'];

    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->restoreEventSpe($typeEvent,$identifiant);

    newSuivi($typeEvent,$nom,$identifiant,"restauration","restauration","restauration");

        switch ($typeEvent)
        {
            case 'Taches' :



            break;


            case 'Revision_effectifs' :

                majEnseignantByRevisionEffectif($enseignant);

            break;


            case 'Absence_departs' :

                majEnseignantByAbsence($enseignant);

            break;


            case 'Avancements' :



            break;


            case 'Primes_hr' :




            break;

            default:
                throw new Exception('Aucun typeEvent trouvé pour filtre list');
        }

    allEventsSpe($typeEvent);
}


function exportAllEventsSpe($typeEvent)
{

    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->getAllEventsSpe($typeEvent,'present');

    $allEventsSpe = $req->fetchAll();
    

    switch ($typeEvent)
    {
        case 'Taches' :

            exportCsv($typeEvent,$allEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'intitule_thematiqueTaches', '', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;


        case 'Revision_effectifs' :

            exportCsv($typeEvent,$allEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'intitule_emploi_cible', 'numero_formate_support_cible', 'etat_experience', 'etat_mobilite', 'etat_hdr', 'etat_precnu', 'annee_civile_commission_hu', 'commentaire_trajectoire_hu', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;


        case 'Absence_departs' :

            exportCsv($typeEvent,$allEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'etat_absence_depart_arrivee', 'numero_formate_support', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;


        case 'Avancements' :

            exportCsv($typeEvent,$allEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'intitule_avis_avancement', 'etat_grade_cible', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;


        case 'Primes_hr' :

            exportCsv($typeEvent,$allEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'intitule_nature_primes_hr', 'montant', 'heures', 'id_mangue', 'emploi', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;

        default:
            throw new Exception('Aucun typeEvent trouvé pour filtre list');
    }



    allEventsSpe($typeEvent); 
    
}



function exportListEventsSpe($typeEvent)
{

    $corbeille = $_GET['corbeille'];
    $nom = $_GET['nom'];
    $type = $_GET['type'];
    $contenu = $_GET['contenu'];
    $debut = $_GET['debut'];
    $fin = $_GET['fin'];
    $enseignant = $_GET['enseignant'];
    $parametre1 = $_GET['parametre1'];

    $parametre2 = $_GET['parametre2'];
    $parametre3 = $_GET['parametre3'];


    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->getEventsSpe($typeEvent,$corbeille,$nom,$type,$contenu,$debut,$fin,$enseignant,'',$parametre1,$parametre2,$parametre3);

    $listEventsSpe = $req->fetchAll();

    switch ($typeEvent)
    {
        case 'Taches' :

            exportCsv($typeEvent,$listEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'intitule_thematiqueTaches', '', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;


        case 'Revision_effectifs' :

            exportCsv($typeEvent,$listEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'intitule_emploi_cible', 'numero_formate_support_cible', 'etat_experience', 'etat_mobilite', 'etat_hdr', 'etat_precnu', 'annee_civile_commission_hu', 'commentaire_trajectoire_hu', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;


        case 'Absence_departs' :

            exportCsv($typeEvent,$listEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'etat_absence_depart_arrivee', 'numero_formate_support', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;


        case 'Avancements' :

            exportCsv($typeEvent,$listEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'intitule_avis_avancement', 'etat_grade_cible', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;


        case 'Primes_hr' :

            exportCsv($typeEvent,$listEventsSpe,'nom', 'type','debut', 'fin', 'contenu','enseignant', 'intitule_nature_primes_hr', 'montant', 'heures', 'id_mangue', 'emploi', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


        break;

        default:
            throw new Exception('Aucun typeEvent trouvé pour filtre list');
    }

    allEventsSpe($typeEvent); 
    
}


function copyEventSpe($typeEvent)
{

    $identifiant = $_GET['identifiant'];

    require ("view/fronted/Spe/copyEvent.php");
}




















function majEnseignantByAssign($identifiant_enseignant)
{



    $AssignManager = new AssignManager();

    $req = $AssignManager->getAssignsByNextDateDebut('present', $identifiant_enseignant);

    $data = $req->fetch();

    if (!empty($data)) {

        $TeacherManager = new TeacherManager();
            
        $req2 = $TeacherManager->modifTeacherByAssignDateDebut($identifiant_enseignant, $data['identifiant_affectation'], $data['emploi_identifiant'], $data['sous_emploi_identifiant'], $data['debut2']);

    }



    $AssignManager = new AssignManager();

    $req = $AssignManager->getAssignsByLastDateFin('present', $identifiant_enseignant);

    $data = $req->fetch();

    if (!empty($data)) {

        $TeacherManager = new TeacherManager();
            
        $req2 = $TeacherManager->modifTeacherByAssignDateFin($identifiant_enseignant, $data['identifiant_affectation'], $data['emploi_identifiant'], $data['sous_emploi_identifiant'], $data['fin2']);

    }


}



function majEnseignantByRevisionEffectif($identifiant_enseignant)
{

    
    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->getEventsSpeRevByLastDateFin('Revision_effectifs','present',$identifiant_enseignant);

    $data = $req->fetch();

    $identifiant_annee_civile = str_split($data['fin_annee'], 2);   

    $trajectoire_hu = 0;

    switch ($data['identifiant_type'])
    {
        case 5 :

            $trajectoire_hu = 2;

        break;


        case 6 :

            $trajectoire_hu = 1;

        break;


        case 7 :

            $trajectoire_hu = 2;

        break;


        case 8 :

            $trajectoire_hu = 3;

        break;


        case 9 :

            $trajectoire_hu = 3;

        break;

        case 10 :

            $trajectoire_hu = 0;

        break;

        case 11 :

            $trajectoire_hu = 4;

        break;

        default:
            $trajectoire_hu = 0;
    }



    if (!empty($data)) {

        $TeacherManager = new TeacherManager();
            
        $req2 = $TeacherManager->modifTeacherByRevisionEffectif($identifiant_enseignant, $data['identifiant_emploi_cible'], $identifiant_annee_civile[1], $trajectoire_hu, $data['identifiant_support_cible']);

    }


}


function majEnseignantByAbsence($identifiant_enseignant)
{

    
    $eventsSpeManager = new eventsSpeManager();

    $req = $eventsSpeManager->getEventsSpeAbsByLastDateFin('Absence_departs','present',$identifiant_enseignant);

    $data = $req->fetch();   

    if (!empty($data)) {

        $TeacherManager = new TeacherManager();
            
        $req2 = $TeacherManager->modifTeacherByAbsence($identifiant_enseignant, $data['identifiant_absence_depart_arrivee']);

    }


}



function majEnseignantByMangue($identifiant_mangue)
{

    
    $IdMangueManager = new IdMangueManager();

    $req = $IdMangueManager->getIdMangueById($identifiant_mangue);

    $data = $req->fetch(); 

    $time1 = strtotime($data['fin_aff']); 

    $date_fin2 = ($time1 == "") ? NULL : date('Y-d-m',$time1);

    $time2 = strtotime($data['date_debut']);

    $date_debut2 = ($time2 == "") ? NULL : date('Y-d-m',$time2);

    $gradeEchelon = $data['grade'] ." - ". $data['echelon'];

    if (!empty($data)) {

        $TeacherManager = new TeacherManager();

        $req2 = $TeacherManager->modifTeacherByMangue($identifiant_mangue, $date_fin2, $gradeEchelon, $date_debut2);

    }

    allTeachers();


}


function majAllEnseignantByMangue()
{

    $IdMangueManager = new IdMangueManager();

    $req = $IdMangueManager->getAllIdMangue();

    while ($data = $req->fetch())

    {

        majEnseignantByMangue($data[0]);

    }


}






















function importView()
{

    require ("view/fronted/import/importView.php");

}


function newMangueImport()
{


    require('assets/library/spreadsheet-reader-master/php-excel-reader/excel_reader2.php');

    require('assets/library/spreadsheet-reader-master/SpreadsheetReader.php');


    if(isset($_POST['Submit']))

    {

      $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];


      if(in_array($_FILES["file"]["type"],$mimes))

      {


        $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);

        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


        $Reader = new SpreadsheetReader($uploadFilePath);


        $totalSheet = count($Reader->sheets());

        $listIdentifiant = array();

        $IdMangueManager = new IdMangueManager();
        $req = $IdMangueManager->getAllImportIdMangue();

        while ($data = $req->fetch())
            {
                array_push($listIdentifiant, $data['identifiant']);
            } 


        require ("view/fronted/import/importMangueConfirmView.php");



      }


      else 

      { 
 
        require ("view/fronted/import/importMangueRefusView.php");

      }


    }


}




function newChuImport()
{


    require('assets/library/spreadsheet-reader-master/php-excel-reader/excel_reader2.php');

    require('assets/library/spreadsheet-reader-master/SpreadsheetReader.php');


    if(isset($_POST['Submit']))

    {

      $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];


      if(in_array($_FILES["file"]["type"],$mimes))

      {


        $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);

        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


        $Reader = new SpreadsheetReader($uploadFilePath);


        $totalSheet = count($Reader->sheets());

        $listIdentifiant = array();

        $NomChuManager = new NomChuManager();
        $req = $NomChuManager->getAllNomChu();

        while ($data = $req->fetch())
            {
                array_push($listIdentifiant, $data['identifiant']);
            } 


        require ("view/fronted/import/importChuConfirmView.php");



      }


      else 

      { 
 
        require ("view/fronted/import/importChuRefusView.php");

      }


    }


}




function NomChuView()
{ 


    $NomChuManager = new NomChuManager();
    
    $req = $NomChuManager->getAllNomChu();

    require ("view/fronted/allNomChuView.php");  

}





function IdMangueView()
{ 


    $IdMangueManager = new IdMangueManager();
    
    $req = $IdMangueManager->getAllIdMangue();

    require ("view/fronted/allIdMangueView.php");  

}





















function allSupport()
{ 


    $SupportManager = new SupportManager();
    
    $req = $SupportManager->getAllSupport('present');

    require ("view/fronted/listSupportView.php");  

}



function listSupport()
{

    $search = true;

    if (isset($_POST['numero_formate'])){
        $numero_formate =  $_POST['numero_formate'];
    }

    if (isset($_POST['categorie'])){
        $categorie = $_POST['categorie'];
    }




    $corbeille = 'present';


    if (isset($_POST['corbeille'])){
        $corbeille = 'corbeille';
    }


    $formule = (isset($_POST['loadSearch'])) ? $_POST['loadSearch'] : "";


    $identifiantSearch = (isset($_POST['loadSearch'])) ? $_POST['loadSearch'] : "";


    if (isset($_POST['loadSearch'])){
        $presearch = true;

        $saveSearchManager = new saveSearchManager();
        $reqSaveLoad = $saveSearchManager->getSaveSearchById($identifiantSearch);
        $dataSaveLoad = $reqSaveLoad->fetch();

        $formule = $dataSaveLoad['formule'];

        $conditions = explode(";",$formule);
        $numero_formate =  $conditions[0];
        $categorie = $conditions[1];
        $corbeille = ($conditions[2] == "") ? 'present' : 'corbeille';
    }
    
    $SupportManager = new SupportManager();

    $req = $SupportManager->getSupports($corbeille,$numero_formate,'','','','',$categorie);

    require ("view/fronted/listSupportView.php");    
}




function support()
{
    $identifiant = $_GET['identifiant'];
    
    $SupportManager = new SupportManager();

    $req = $SupportManager->getSupportsById($identifiant);

    require ("view/fronted/supportView.php");   
}




function createSupport()
{

    require ("view/fronted/createSupport.php");
}


function newSupport()
{

            $numero_formate = ($_POST['numero_formate'] == "") ? NULL : $_POST['numero_formate'];
            $nature = ($_POST['nature'] == "") ? NULL : $_POST['nature'];
            $budget = ($_POST['budget'] == "") ? NULL : $_POST['budget'];
            $eotp = ($_POST['eotp'] == "") ? NULL : $_POST['eotp'];
            $quotite = ($_POST['quotite'] == "") ? NULL : $_POST['quotite']; 
            $categorie = ($_POST['categorie'] == "") ? NULL : $_POST['categorie']; 



    $SupportManager = new SupportManager();

    $req = $SupportManager->createSupport($numero_formate,$nature,$budget,$eotp,$quotite,$categorie);


    newSuivi("support",$numero_formate,NULL,"nouveau","nouveau","nouveau");


    allSupport();    
}



function copySupport()
{

    $identifiant = $_GET['identifiant'];

    require ("view/fronted/copySupport.php");
}




function editSupport()
{

    $identifiant = $_GET['identifiant'];

    require ("view/fronted/editSupport.php");
}


function modifSupport()
{
            
            $identifiant = $_POST['identifiant'];
            $numero_formate = ($_POST['numero_formate'] == "") ? NULL : $_POST['numero_formate'];
            $nature = ($_POST['nature'] == "") ? NULL : $_POST['nature'];
            $budget = ($_POST['budget'] == "") ? NULL : $_POST['budget'];
            $eotp = ($_POST['eotp'] == "") ? NULL : $_POST['eotp'];
            $quotite = ($_POST['quotite'] == "") ? NULL : $_POST['quotite']; 
            $categorie = ($_POST['categorie'] == "") ? NULL : $_POST['categorie']; 
            $renseignement = ($_POST['renseignement'] == "") ? NULL : $_POST['renseignement']; 

            $ancNumero_formate = $_POST['ancNumero_formate'];
            $ancNature = $_POST['ancNature'];
            $ancBudget = $_POST['ancBudget'];
            $ancEotp = $_POST['ancEotp'];
            $ancQuotite = $_POST['ancQuotite']; 
            $ancCategorie = $_POST['ancCategorie'];
            $ancRenseignement = $_POST['ancRenseignement'];



    $SupportManager = new SupportManager();
    
    $req = $SupportManager->modifSupport($identifiant,$numero_formate,$nature,$budget,$eotp,$quotite,$categorie,$renseignement);


        if ($ancNumero_formate != $numero_formate) {
        newSuivi("support",$numero_formate,$identifiant,"numero",$ancNumero_formate,$numero_formate);
    }

        if ($ancNature != $nature) {
        newSuivi("support",$numero_formate,$identifiant,"nature",$ancNature,$nature);
    }

        if ($ancBudget != $budget) {
        newSuivi("support",$numero_formate,$identifiant,"budget",$ancBudget,$budget);
    }

        if ($ancEotp != $eotp) {
        newSuivi("support",$numero_formate,$identifiant,"eotp",$ancEotp,$eotp);
    }

        if ($ancQuotite != $quotite) {
        newSuivi("support",$numero_formate,$identifiant,"quotite",$ancQuotite,$quotite);
    }

        if ($ancCategorie != $categorie) {
        newSuivi("support",$numero_formate,$identifiant,"categorie",$ancCategorie,$categorie);
    }

        if ($ancRenseignement != $renseignement) {
        newSuivi("support",$numero_formate,$identifiant,"categorie",$ancRenseignement,$renseignement);
    }



    $SupportManager = new SupportManager();

    $req = $SupportManager->getSupportsById($identifiant);

    require ("view/fronted/supportView.php"); 
}






function confirmDeleteSupport()
{

    $identifiant = $_GET['identifiant'];

    $SupportManager = new SupportManager();

    $req = $SupportManager->getSupportsById($identifiant);

    require ("view/fronted/confirmDeleteSupport.php");
}



function deleteSupport()
{

    $numero_formate = $_GET['numero_formate'];

    $identifiant = $_GET['identifiant'];


    $SupportManager = new SupportManager();
    
    $req = $SupportManager->corbeilleSupport($identifiant);

    newSuivi("support",$numero_formate,$identifiant,"suppression","suppression","suppression");



    allSupport();
}



function restoreSupport()
{

    $numero_formate = $_GET['numero_formate'];

    $identifiant = $_GET['identifiant'];

    $SupportManager = new SupportManager();
    
    $req = $SupportManager->restoreSupport($identifiant);

    newSuivi("support",$numero_formate,$identifiant,"restauration","restauration","restauration");

    allSupport();
}




function exportAllSupport()
{

    $SupportManager = new SupportManager();
    
    $req = $SupportManager->getAllSupport('present');

    $allSupport = $req->fetchAll();

    exportCsv("support",$allSupport, 'numero_formate', 'nature', 'budget', 'eotp', 'quotite', 'categorie', '', '', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');


    allSupport(); 
    
}



function exportListSupport()
{

    $corbeille = $_GET['corbeille'];
    $numero_formate = $_GET['numero_formate'];
    $categorie = $_GET['categorie'];

    $SupportManager = new SupportManager();

    $req = $SupportManager->getSupports($corbeille,$numero_formate,'','','','',$categorie);

    $listSupports = $req->fetchAll();

    exportCsv("support",$listSupports, 'numero_formate', 'nature', 'budget', 'eotp', 'quotite', 'categorie', '', '', '', '', '', '', '', '', '', '', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

    allSupport();
    
}



function gpec()

    {



        $debut = date("Y-m-d");









        $listIdentifiantSupportsFree = array( 
            array( 
                "identifiant_support" => "0", 
                "debut" => "0", 
                "fin" => "0", 
                "debut2" => "0", 
                "fin2" => "0", 
            )
        ); 




        $AssignManager = new AssignManager();

        $reqAssigns = $AssignManager->getAssignsWhithoutTeachers('present', $debut);




        while ($dataAssigns = $reqAssigns->fetch())

        {


            array_push($listIdentifiantSupportsFree, 
                array(
                    "identifiant_support" => $dataAssigns['identifiant_support'], 
                    "debut" => $dataAssigns['debut'], 
                    "fin" => $dataAssigns['fin'],
                    "debut2" => $dataAssigns['debut2'], 
                    "fin2" => $dataAssigns['fin2'],
                )
            );

        }








        // $eventsSpeManager = new eventsSpeManager();

        // $reqEventsSpeRev = $eventsSpeManager->getEventsSpeRevLiberationSupport('Revision_effectifs','present', $debut);






        // while ($dataEventsSpeRev = $reqEventsSpeRev->fetch())

        // {


        //    array_push($listIdentifiantSupportsFree, 
        //        array(
        //            "identifiant_support" => $dataEventsSpeRev['identifiant_support'], 
        //            "debut" => $dataEventsSpeRev['fin'], 
        //            "fin" => NULL,
        //            "debut2" => $dataEventsSpeRev['fin2'], 
        //            "fin2" => NULL,
        //        )
        //    );

        //}








        // $eventsSpeManager = new eventsSpeManager();

        // $reqEventsSpeAbs = $eventsSpeManager->getEventsSpeAbsByDates('Absence_departs','present', $debut);






        // while ($dataEventsSpeAbs = $reqEventsSpeAbs->fetch())

        // {





        //        $date_fin = $dataEventsSpeAbs['fin'];
        //        $date_fin = ($dataEventsSpeAbs['identifiant_absence_depart_arrivee'] == 49 OR $dataEventsSpeAbs['identifiant_absence_depart_arrivee'] == 50) ? NULL : $dataEventsSpeAbs['fin']; 

        //        $date_fin2 = $dataEventsSpeAbs['fin2'];
        //        $date_fin2 = ($dataEventsSpeAbs['identifiant_absence_depart_arrivee'] == 49 OR $dataEventsSpeAbs['identifiant_absence_depart_arrivee'] == 50) ? NULL : $dataEventsSpeAbs['fin2']; 

        //        array_push($listIdentifiantSupportsFree, 
        //            array(
        //                "identifiant_support" => $dataEventsSpeAbs['identifiant_support'], 
        //                "debut" => $dataEventsSpeAbs['debut'], 
        //                "fin" => $date_fin,
        //                "debut2" => $dataEventsSpeAbs['debut2'], 
        //                "fin2" => $date_fin2,
        //            )
        //        );






        // }





        if (!empty($listIdentifiantSupportsFree)) {



        }




        $SupportManager = new SupportManager();

        $reqSupport = $SupportManager->getSupportsFree('present',$listIdentifiantSupportsFree);





        $AssignManager = new AssignManager();
        
        $reqAssign = $AssignManager->getAssignsWhithoutSupport('present', $debut);






        require ("view/fronted/listGpecView.php");


    }





function sendHypotheseAjaxPost($idAffectationSupport, $dataSend)
{




    $AssignManager = new AssignManager();

    $req = $AssignManager->modifAssignHypothese($idAffectationSupport,$dataSend);



}





function responseCountEventsAjax()
{


    $eventsSpeManager = new eventsSpeManager();

    $res = $eventsSpeManager->getCountEventsAjax();


      //Initialiser un tableau
      $dataRes = array();
      //Récupérer les lignes
      while ( $row = $res->fetch(PDO::FETCH_ASSOC))  {
         $dataRes[] = $row;
      }
      //Afficher le tableau au format JSON
      echo json_encode($dataRes);

}

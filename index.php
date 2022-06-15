<?php session_start(); // $_SESSION ?>

<?php

require('controller/fronted2.php');





if (isset($_GET['typeEvent'])){
        $typeEvent =  $_GET['typeEvent'];
}

if (isset($_GET['idAffectationSupport'])){
        $idAffectationSupport =  $_GET['idAffectationSupport'];
}

if (isset($_GET['dataSend'])){
        $dataSend =  $_GET['dataSend'];
}







try 
{

    if(isset($_SESSION['loggedUser'])) 
        {

        if (isset($_GET['action'])) 
            {
                switch ($_GET['action'])
                {
                    case 'allTeachers' :
                        allTeachers();
                    break;
                    case 'listAssign' :
                        listAssign();
                    break;
                    case 'listTeacher' :
                        listTeacher();
                    break;
                    case 'teacher' :
                        teacher();
                    break;
                    case 'allAssigns' :
                        allAssigns();
                    break;

                    case 'createAssign' :
                        createAssign();
                    break;

                    case 'createAssignFromEvent' :
                        createAssignFromEvent($typeEvent);
                    break;

                    case 'createMultipleAssign' :
                        createMultipleAssign();
                    break;

                    case 'newAssign' :
                        newAssign();
                    break;

                    case 'newMultipleAssign' :
                        newMultipleAssign();
                    break;

                    case 'createTeacher' :
                        createTeacher();
                    break;
                    case 'newTeacher' :
                        newTeacher();
                    break;
                    case 'editTeacher' :
                        editTeacher();
                    break;
                    case 'modifTeacher' :
                        modifTeacher();
                    break;
                    case 'editAssign' :
                        editAssign();
                    break;
                    case 'modifAssign' :
                        modifAssign();
                    break;
                    case 'deleteTeacher' :
                        deleteTeacher();
                    break;
                    case 'deleteAssign' :
                        deleteAssign();
                    break;
                    case 'confirmDeleteTeacher' :
                        confirmDeleteTeacher();
                    break;
                    case 'confirmDeleteAssign' :
                        confirmDeleteAssign();
                    break;
                    case 'assign' :
                        assign();
                    break;
                    case 'restoreTeacher' :
                        restoreTeacher();
                    break;
                    case 'restoreAssign' :
                        restoreAssign();
                    break;
                    case 'suivi' :
                        suivi();
                    break;
                    case 'listSuivi' :
                        listSuivi();
                    break;
                    case 'copyTeacher' :
                        copyTeacher();
                    break;
                    case 'saveSearch' :
                        saveSearch();
                    break;
                    case 'exportAllTeacher' :
                        exportAllTeacher();
                    break;
                    case 'exportListTeacher' :
                        exportListTeacher();
                    break;
                    case 'exportAllAssign' :
                        exportAllAssign();
                    break;
                    case 'exportListAssign' :
                        exportListAssign();
                    break;
                    case 'deconnexion' :
                        session_destroy();
                        login();
                    break;
                    case 'profil' :
                        profil();
                    break;
                    case 'changeProfil' :
                        changeProfil();
                    break;


                    case 'suppSaveSearch' :
                        suppSaveSearch();
                    break;


                    case 'allEvents' :
                        allEvents();
                    break;
                    case 'listEvents' :
                        listEvents();
                    break;
                    case 'createEvent' :
                        createEvent();
                    break;
                    case 'newEvent' :
                        newEvent();
                    break;
                    case 'event' :
                        event();
                    break;
                    case 'editEvent' :
                        editEvent();
                    break;
                    case 'copyEvent' :
                        copyEvent();
                    break;
                    case 'modifEvent' :
                        modifEvent();
                    break;
                    case 'exportAllEvents' :
                        exportAllEvents();
                    break;
                    case 'exportListEvents' :
                        exportListEvents();
                    break;
                    case 'confirmDeleteEvent' :
                        confirmDeleteEvent();
                    break;
                    case 'restoreEvent' :
                        restoreEvent();
                    break;
                    case 'deleteEvent' :
                        deleteEvent();
                    break;      
                    case 'allEventsSpe' :
                        allEventsSpe($typeEvent);
                    break;
                    case 'listEventsSpe' :
                        listEventsSpe($typeEvent);
                    break;
                    case 'createEventSpe' :
                        createEventSpe($typeEvent);
                    break;
                    case 'newEventSpe' :
                        newEventSpe($typeEvent);
                    break;
                    case 'eventSpe' :
                        eventSpe($typeEvent);
                    break;
                    case 'editEventSpe' :
                        editEventSpe($typeEvent);
                    break;
                    case 'copyEventSpe' :
                        copyEventSpe($typeEvent);
                    break;
                    case 'modifEventSpe' :
                        modifEventSpe($typeEvent);
                    break;
                    case 'exportAllEventsSpe' :
                        exportAllEventsSpe($typeEvent);
                    break;
                    case 'exportListEventsSpe' :
                        exportListEventsSpe($typeEvent);
                    break;
                    case 'confirmDeleteEventSpe' :
                        confirmDeleteEventSpe($typeEvent);
                    break;
                    case 'restoreEventSpe' :
                        restoreEventSpe($typeEvent);
                    break;
                    case 'deleteEventSpe' :
                        deleteEventSpe($typeEvent);
                    break;



                    case 'importView' :
                        importView();
                    break;
                    case 'newMangueImport' :
                        newMangueImport();
                    break;
                    case 'newChuImport' :
                        newChuImport();
                    break;


                    case 'IdMangueView' :
                        IdMangueView();
                    break;
                    case 'NomChuView' :
                        NomChuView();
                    break;



                    case 'allSupport' :
                        allSupport();
                    break;
                    case 'listSupport' :
                        listSupport();
                    break;
                    case 'support' :
                        support();
                    break;


                    case 'createSupport' :
                        createSupport();
                    break;
                    case 'newSupport' :
                        newSupport();
                    break;


                    case 'copySupport' :
                        copySupport();
                    break;


                    case 'editSupport' :
                        editSupport();
                    break;
                    case 'modifSupport' :
                        modifSupport();
                    break;



                    case 'deleteSupport' :
                        deleteSupport();
                    break;
                    case 'confirmDeleteSupport' :
                        confirmDeleteSupport();
                    break;
                    case 'restoreSupport' :
                        restoreSupport();
                    break;



                    case 'exportAllSupport' :
                        exportAllSupport();
                    break;
                    case 'exportListSupport' :
                        exportListSupport();
                    break;




                    case 'majAllEnseignantByMangue' :
                        majAllEnseignantByMangue();
                    break;



                    case 'gpec' :
                        gpec();
                    break;


                    case 'sendHypotheseAjaxPost' :
                        sendHypotheseAjaxPost($idAffectationSupport,$dataSend);
                    break;


                    case 'responseCountEventsAjax' :
                        responseCountEventsAjax();
                    break;



                    default:
                        throw new Exception('Aucun contrôleur trouvé');
                }
            }
            

            else {
                home();
            }

    }

    else {

        login();


    }

    

}

catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
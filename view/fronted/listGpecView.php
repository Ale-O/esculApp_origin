<?php ob_start(); ?>





    <?php

    if (isset($corbeille)){
        $corbeilleChecked = ($corbeille == "corbeille") ? "checked" : "";
    }





        echo '















        <div class="row">




                <div class="col-4 themed-grid-col">      










                       <hr>

                       <h4>Supports vacants à venir



                            <svg 

                                onclick="reloadListeSupportsVacants();"

                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>

                            </svg>

                        </h4>

                       
                        <div style="height: 1000px; overflow: auto">
                       <table 
                            class="table table-bordered table-striped table-condensed"

                            style = 
                            "
                            ;

                            "

                       >
                        
                       <thead>
                          <tr>
                                <th>Voir</th>
                                <th>Informations</th>
                          </tr>
                       </thead>
                       <tbody id="listeSupportsVacants"



                       >';

                            while ($data = $reqSupport->fetch())
                                {  


                                    if (isset($listIdentifiantSupportsFree)) {

                                        $id_debut_vacance = array_search($data['identifiant'], array_column($listIdentifiantSupportsFree, "identifiant_support"));

                                        $id_fin_vacance = array_search($data['identifiant'], array_column($listIdentifiantSupportsFree, "identifiant_support"));

                                        $debut_vacance = $listIdentifiantSupportsFree[$id_debut_vacance] ["debut"];

                                        $fin_vacance = $listIdentifiantSupportsFree[$id_fin_vacance] ["fin"];   

                                        $debut_vacance2 = $listIdentifiantSupportsFree[$id_debut_vacance] ["debut2"];

                                        $fin_vacance2 = $listIdentifiantSupportsFree[$id_fin_vacance] ["fin2"];  


                                    }

                                    else {

                                        $debut_vacance = "";

                                        $fin_vacance = "";    

                                    }



                                $supportValide = true;


                                if (isset($data['date_blocage']) && ($debut_vacance2 >= $data['date_blocage']))
                                  {
                                    $supportValide = false;
                                  }  
                                  


                                if ($supportValide === true) {


                                    echo '<tr id="'. $data['identifiant'] .'">


                                <td>



                                <p hidden id="p'. $data['identifiant'] .'" class="dateDebutVacance">' . $debut_vacance2 . '</p>

                                <p hidden id="p'. $data['identifiant'] .'" class="dateFinVacance">' . $fin_vacance2 . '</p>



                                <a href="index.php?action=support&identifiant=' . $data['identifiant'] . '">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>

                                </a>
                                </td>



                                <td>


                                      <div 






                                          style = 
                                            "
                                            border : dashed black;
                                            background-color: #dcdcf7;
                                            margin: 10px;
                                            padding: 10px;
                                            "



                                          id="draggable-' . $data['identifiant'] . '"
                                          draggable="true"
                                          ondragstart="onDragStart(event);"

    


                                        >


                                            <svg 

                                                onclick="removeParent(this);"

                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>


                                            


                                            <p></p>                                                                             

                                            <p><abbr title="

                                                ';

    require_once ('model/AssignManager.php');
    $AssignManagerSpe = new AssignManager();
    $reqAssignSpe = $AssignManagerSpe->getAssigns('present',$data['numero_formate'],'','','','','','','');
    while ($dataAssignSpe = $reqAssignSpe->fetch())
        { 
                    echo '
' . $dataAssignSpe['nom_enseignant'] . ' ' . $dataAssignSpe['prenom_enseignant'] . '
' . $dataAssignSpe['emploi_enseignant'] . ' - début : ' . $dataAssignSpe['debut'] . ' - fin : ' . $dataAssignSpe['fin'] . '

                    '
                    ;
        }

    $reqAssignSpe->closeCursor();

        echo '

                                            ">' . $data['numero_formate'] . '</abbr> -  <a href="index.php?action=teacher&identifiant=' . $data['identifiant_enseignant'] . '">' . $data['nom'] . ' ' . $data['prenom'] . '</a>  </p>

                                            <p> début : ' . $debut_vacance . '   -   fin :  ' . $fin_vacance . '</p>

                                            <p></p> 


                                      </div>





                                </td>

                                    </tr>

                                    '
                                    ;


                        }


                                                }

                        echo '</tbody></table></div>';

                        $reqSupport->closeCursor();










                echo '







                </div>




                    
                <div class="col-8 themed-grid-col">















                       <hr>

                       <h4>Demandes sans supports à venir</h4>


                       <div style="height: 1000px; overflow: auto">
                       <table class="table table-bordered table-striped table-condensed">
                        
                       <thead>
                          <tr>
                                <th>Actions</th>
                                <th>Informations</th>
                                <th>Supports</th>
                          </tr>
                       </thead>
                       <tbody>';

                            while ($data = $reqAssign->fetch())
                                {  
                                    echo '<tr id="'. $data['identifiant_affectation'] .'">



                                <td>


                                <a href="index.php?action=assign&identifiant_affectation=' . $data['identifiant_affectation'] . '">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>

                                </a>


                                <br>
                                <br>





                                <svg 

                                id="'. $data['identifiant_affectation'] .'"

                                onclick="filterSupportsVacants(this);"

                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>


                                    <p hidden id="p'. $data['identifiant_affectation'] .'" class="dateDebut">' . $data['debut2'] . '</p>

                                    <p hidden id="p'. $data['identifiant_affectation'] .'" class="dateFin">' . $data['fin2'] . '</p>


                                </svg>


                                <br>
                                <br>


                                <button 

                                class="btn btn-primary"

                                id="'. $data['identifiant_affectation'] .'"
                                onclick="sendHypothesePost(this);"


                                >

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                </svg>

                                </button>


                                <br>
                                <br>

                                '
                                ;


                                $arrayData = explode(",", $data['hypothese']);
                                $countArrayData = (int)count($arrayData);

                                if ($countArrayData > 1) 
                                {

                                    echo '

                                    <a href="index.php?action=createMultipleAssign&identifiant=' . $data['identifiant_enseignant'] . '&listSupport=' . $data['hypothese'] . '">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
                                      <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                                    </svg>

                                    </a>

                                    '
                                    ;

                                }

                                echo '




                                </td>




                                <td>









                                    <p><a href="index.php?action=teacher&identifiant=' . $data['identifiant_enseignant'] . '">' . $data['nom_enseignant'] . ' ' . $data['prenom_enseignant'] . '</a></p>

                                    <p>' . $data['emploi_enseignant'] . '   ' . $data['sous_emploi_enseignant'] . '</p>

                                    <p> début : ' . $data['debut'] . '   -   fin :  ' . $data['fin'] . '</p>


                                </td>



                                <td>


                                      <div


                                        id="p'. $data['identifiant_affectation'] .'"
                                        class = "dropable"

                                        ondragover="onDragOver(event);"
                                        ondrop="onDrop(event, this);"

                                        >

                                        déposer votre suppport ici




                                        ';


                                        if ($countArrayData > 1) 
                                        {


                                            for ($i = 1 ; $i < count($arrayData) ; $i++)
                                            {
                                                require_once ('model/SupportManager.php');
                                                $SupportManagerById = new SupportManager();
                                                $reqSupportById = $SupportManagerById->getSupportsById($arrayData[$i]);
                                                $dataSupportById = $reqSupportById->fetch();




                                                    echo '
                                                      <div 
                                                          style = 
                                                            "
                                                            border : dashed black;
                                                            background-color: #dcdcf7;
                                                            margin: 10px;
                                                            padding: 10px;
                                                            "
                                                          id="draggable-' . $dataSupportById['identifiant'] . '"
                                                          class="deletable"
                                                          draggable="true"
                                                          ondragstart="onDragStart(event);"
                                                        >
                                                            <svg 
                                                                onclick="removeParent(this);"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                            </svg>

                                                            <svg 
                                                                onclick="filterSupports(' . $dataSupportById['identifiant'] . ');"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                            </svg>




                                                            <p></p>

                                                            <p><abbr title="
                                                                ';
                    require_once ('model/AssignManager.php');
                    $AssignManagerSpe = new AssignManager();
                    $reqAssignSpe = $AssignManagerSpe->getAssigns('present',$dataSupportById['numero_formate'],'','','','','','','');
                    while ($dataAssignSpe = $reqAssignSpe->fetch())
                        { 
                                    echo '
    ' . $dataAssignSpe['nom_enseignant'] . ' ' . $dataAssignSpe['prenom_enseignant'] . '
    ' . $dataAssignSpe['emploi_enseignant'] . ' - début : ' . $dataAssignSpe['debut'] . ' - fin : ' . $dataAssignSpe['fin'] . '
                                    '
                                    ;
                        }
                        echo '
                                                            ">' . $dataSupportById['numero_formate'] . '</abbr> -  <a href="index.php?action=teacher&identifiant=' . $dataSupportById['identifiant_enseignant'] . '">' . $dataSupportById['nom'] . ' ' . $dataSupportById['prenom'] . '</a>  </p>
                                                            <p> début : ' . $debut_vacance . '   -   fin :  ' . $fin_vacance . '</p>
                                                            <p></p> 
                                                      </div>
                                                    '
                                                    ;

                                            } 

                                            $reqSupportById->closeCursor();

                                        }


                                    echo '




                                      </div>


                                </td>

                                    </tr>';
                                                }
                        echo '</tbody></table></div>';

                        $reqAssign->closeCursor();









                echo '



                          

                      



        </div>


            '
            ;






    ?>






                    
<?php $content = ob_get_clean(); ?>
<?php require('view/fronted/template/template.php'); ?>


                    

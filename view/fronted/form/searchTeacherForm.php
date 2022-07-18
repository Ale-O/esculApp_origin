<form action="index.php?action=listTeacher" method="post">
    <legend>Recherche d'un enseignant</legend>






        <div class="row">

            <div class="col-3 themed-grid-col">
                      
                    <div class="form-group">
                        <label for="name" class="form-label">Nom de l'enseignant </label>
                        <input type="text" name="name" class="form-control" />
                    </div>

            </div>

            <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="prenom" class="form-label">Prénom de l'enseignant </label>
                        <input type="text" name="prenom" class="form-control" />
                    </div>

            </div>

            <div class="col-3 themed-grid-col">
                      
                    <div class="form-group">
                        <label for="emploi" class="form-label">Emploi</label>
                        <select name="emploi" class="form-select" id="emploi">
                        <option value="" selected>Sélectionner</option>

                                        <?php 
                            require_once ('model/EmploiManager.php');
                            $EmploiManager = new EmploiManager();
                            $reqList = $EmploiManager->getAllEmploi();
                            while ($dataList = $reqList->fetch())
                                        {  
                                            echo '
                                                <option value="' . $dataList['intitule'] . '">' . $dataList['intitule'] . '</option>
                                            ';
                                        }
                                    $reqList->closeCursor();
                            ?>

                        </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

            </div>

            <div class="col-3 themed-grid-col">      

                <div class="form-group">
                    <label for="sous_emploi" class="form-label">Sous-emploi</label>
                        <select name="sous_emploi" class="form-select" id="sous_emploi">
                            <option value="" selected>Sélectionner</option>

                                <?php 
                    require_once ('model/SousEmploiManager.php');
                    $SousEmploiManager = new SousEmploiManager();
                    $reqList = $SousEmploiManager->getAllSousEmploi();
                    while ($dataList = $reqList->fetch())
                                {  
                                    echo '
                                        <option value="' . $dataList['intitule_sous_emploi'] . '">' . $dataList['intitule_sous_emploi'] . '</option>
                                    ';
                                }
                            $reqList->closeCursor();
                    ?>

                        </select>
                    <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                </div>

            </div>



        </div>



        <br>



        <div class="row">

            <div class="col-3 themed-grid-col">
                      
                <div class="form-group">
                    <label for="affectation_hospitaliere" class="form-label">Affectation hospitalière : </label>
                    <input type="text" name="affectation_hospitaliere" class="form-control" />
                </div>

            </div>

            <div class="col-3 themed-grid-col">      

                <div class="form-group">
                    <label for="absence_depart_arrivee" class="form-label">Absence/Départ</label>
                    <select name="absence_depart_arrivee" class="form-select" id="absence_depart_arrivee">
                    <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/Absence_depart_arriveeManager.php');
                        $Absence_depart_arriveeManager = new Absence_depart_arriveeManager();
                        $reqList = $Absence_depart_arriveeManager->getAllAbsence_depart_arrivee();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['etat'] . '">' . $dataList['etat'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                    </select>
                    <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                </div>

            </div>

            <div class="col-3 themed-grid-col">


                <div class="form-group">
                    <label for="actif" class="form-label">Actif</label>
                    <select name="actif" class="form-select" id="actif">
                    <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/ActifManager.php');
                        $actifManager = new actifManager();
                        $reqList = $actifManager->getAllActif();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['etat'] . '">' . $dataList['etat'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                    </select>
                    <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                </div>

            </div>

            <div class="col-3 themed-grid-col">
                      
                    <div class="form-group">
                        <label for="cnu" class="form-label">Discipline CNU</label>
                        <select name="cnu" class="form-select" id="cnu">
                        <option value="" selected>Sélectionner</option>

                                        <?php 
                            require_once ('model/CnuManager.php');
                            $CnuManager = new CnuManager();
                            $reqList = $CnuManager->getAllCnu();
                            while ($dataList = $reqList->fetch())
                                        {  
                                            echo '
                                                <option value="' . $dataList['libelle'] . '">' . $dataList['libelle'] . ' - ' . $dataList['code'] . '</option>
                                            ';
                                        }
                                    $reqList->closeCursor();
                            ?>

                        </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>
                    
            </div>

        </div>

        <br>

























    <a class="nav-link" href="#" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse-search" aria-controls="contents-collapse">
      <span data-feather="plus-circle"></span>
      Afficher plus de champs
    </a>


<br>
<br>



   <fieldset class="collapse" id="contents-collapse-search">
       <legend>Recherche avancée</legend>


<br>
<br>
<hr>
<br>
<br>







        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="dphu" class="form-label">DPHU</label>
                            <select name="dphu" class="form-select" id="dphu" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/DphuManager.php');
                        $DphuManager = new DphuManager();
                        $reqList = $DphuManager->getAllDphu();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['intitule'] . '">' . $dataList['intitule'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="affectation_pedagogique" class="form-label">Affectation pedagogique</label>
                            <select name="affectation_pedagogique" class="form-select" id="affectation_pedagogique" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/AffectationPedagogiqueManager.php');
                        $AffectationPedagogiqueManager = new AffectationPedagogiqueManager();
                        $reqList = $AffectationPedagogiqueManager->getAllAffectationPedagogique();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['intitule_affectation_pedagogique'] . '">' . $dataList['intitule_affectation_pedagogique'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="laboratoire" class="form-label">Laboratoire</label>
                            <select name="laboratoire" class="form-select" id="laboratoire" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/LaboratoireManager.php');
                        $LaboratoireManager = new LaboratoireManager();
                        $reqList = $LaboratoireManager->getAllLaboratoire();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['code'] . '">' . $dataList['nom'] . ' - ' . $dataList['code'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                        
                                            <div class="form-group">
                        <label for="next" class="form-label">NExT</label>
                            <select name="next" class="form-select" id="next" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/NextManager.php');
                        $NextManager = new NextManager();
                        $reqList = $NextManager->getAllNext();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['next'] . '">' . $dataList['next'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>  

                      
                </div>


        </div>














<br>







        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="trajectoire_hu" class="form-label">Trajectoire HU</label>
                            <select name="trajectoire_hu" class="form-select" id="trajectoire_hu" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/TrajectoireHuManager.php');
                        $TrajectoireHuManager = new TrajectoireHuManager();
                        $reqList = $TrajectoireHuManager->getAllTrajectoireHu();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['etat'] . '">' . $dataList['etat'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>


                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="annee_civile" class="form-label">Annee civile cible</label>
                            <select name="annee_civile" class="form-select" id="annee_civile" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/AnneeCivileManager.php');
                        $AnneeCivileManager = new AnneeCivileManager();
                        $reqList = $AnneeCivileManager->getAllAnneeCivile();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['annee'] . '">' . $dataList['annee'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="emploi_cible" class="form-label">Emploi cible</label>
                            <select name="emploi_cible" class="form-select" id="emploi_cible" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/EmploiManager.php');
                        $EmploiManager = new EmploiManager();
                        $reqList = $EmploiManager->getAllEmploi();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['intitule'] . '">' . $dataList['intitule'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="succession" class="form-label">Support cible</label>
                            <select name="succession" class="form-select" id="succession" >
                                <option value="" selected>Sélectionner</option>

                        <?php 
                        require_once ('model/SupportManager.php');
                        $SupportManager = new SupportManager();
                        $reqList = $SupportManager->getAllSupport('present');
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['numero_formate'] . '" >' . $dataList['numero_formate'] .'</option>
                                        ';  
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>
                      
                </div>


        </div>


        <br>






        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience</label>
                            <select name="experience" class="form-select" id="experience" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/ExperienceManager.php');
                        $ExperienceManager = new ExperienceManager();
                        $reqList = $ExperienceManager->getAllExperience();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['etat'] . '">' . $dataList['etat'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="mobilite" class="form-label">Mobilité</label>
                            <select name="mobilite" class="form-select" id="mobilite" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/MobiliteManager.php');
                        $MobiliteManager = new MobiliteManager();
                        $reqList = $MobiliteManager->getAllMobilite();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['etat'] . '">' . $dataList['etat'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="hdr" class="form-label">HDR</label>
                            <select name="hdr" class="form-select" id="hdr" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/HdrManager.php');
                        $HdrManager = new HdrManager();
                        $reqList = $HdrManager->getAllHdr();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['etat'] . '">' . $dataList['etat'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="precnu" class="form-label">Precnu</label>
                            <select name="precnu" class="form-select" id="precnu" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/PrecnuManager.php');
                        $PrecnuManager = new PrecnuManager();
                        $reqList = $PrecnuManager->getAllPrecnu();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['etat'] . '">' . $dataList['etat'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>
                      
                </div>


        </div>

<br>

        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="commission_evaluation_hu" class="form-label">Commission d'évaluation HU</label>
                            <select name="commission_evaluation_hu" class="form-select" id="commission_evaluation_hu" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/CommissionHuManager.php');
                        $CommissionHuManager = new CommissionHuManager();
                        $reqList = $CommissionHuManager->getAllCommissionHu();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['annee_civile'] . '">Commission - ' . $dataList['annee_civile'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      



                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>

                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


        <br>








<br>



        <div class="row">




                <div class="col-3 themed-grid-col">      

                    <p>
                        <label for="date_dernier_changement" class="form-label">Date dernier changement de statut (à partir du)</label>
                        <input type="date" name="date_dernier_changement" class="form-control" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="fin_enseignant" class="form-label">Date de fin (avant le)</label>
                        <input type="date" name="fin_enseignant" class="form-control"  />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="liste_de_diffusion" class="form-label">Liste de diffusion</label>
                            <select name="liste_de_diffusion" class="form-select" id="liste_de_diffusion" >
                                <option value="" selected>Sélectionner</option>

                                    <?php 
                        require_once ('model/ListeDiffusionManager.php');
                        $ListeDiffusionManager = new ListeDiffusionManager();
                        $reqList = $ListeDiffusionManager->getAllListeDiffusion();
                        while ($dataList = $reqList->fetch())
                                    {  
                                        echo '
                                            <option value="' . $dataList['etat'] . '">' . $dataList['etat'] . '</option>
                                        ';
                                    }
                                $reqList->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>
                      
                </div>


                <div class="col-3 themed-grid-col">      

                        <div class="form-group">
                            <label for="eligible_election" class="form-label">Eligible élection</label>
                                <select name="eligible_election" class="form-select" id="eligible_election" >
                                    <option value="" selected>Sélectionner</option>

                            <?php 
                            require_once ('model/EligibleElectionManager.php');
                            $EligibleElectionManager = new EligibleElectionManager();
                            $reqList = $EligibleElectionManager->getAllEligibleElection();
                            while ($dataList = $reqList->fetch())
                                        {  
                                            echo '
                                                <option value="' . $dataList['etat'] . '">' . $dataList['etat'] . '</option>
                                            ';
                                        }
                                    $reqList->closeCursor();
                            ?>

                                </select>
                            <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                        </div>

                </div>


        </div>







<br>













        <div class="row">




                <div class="col-3 themed-grid-col">      

                        <p>
                            <label for="ouverture_droits_retraite" class="form-label">Ouverture droits retraite</label>
                            <input type="text" name="ouverture_droits_retraite"  class="form-control" />
                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="age_limite" class="form-label">Age limite</label>
                            <input type="text" name="age_limite" class="form-control" />
                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="date_limite_age" class="form-label">Date limite âge (à partir du)</label>
                            <input type="date" name="date_limite_age"  class="form-control" />
                        </p>
                      
                </div>

                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="enfant_vivant_a_50ans" class="form-label">Enfant vivant à 50ans</label>
                            <input type="number" name="enfant_vivant_a_50ans"  class="form-control" />
                        </p>

                </div>


        </div>


        <div class="row">




                <div class="col-3 themed-grid-col">      

                        <p>
                            <label for="date_previsionnelle" class="form-label">Date prévisionnelle de départ (à partir du)</label>
                            <input type="date" name="date_previsionnelle" class="form-control" />
                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="depart_effectif_ou_souhaite" class="form-label">Départ effectif ou souhaité (à partir du)</label>
                            <input type="date" name="depart_effectif_ou_souhaite"  class="form-control" />
                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="option_remarque_retraite" class="form-label">Option remarque retraite</label>
                            <input type="text" name="option_remarque_retraite"  class="form-control" />
                        </p>
                      
                </div>


                <div class="col-3 themed-grid-col">
                          
                <div class="form-group">
                    <label for="surnombre_emeritat" class="form-label">Surnombre Emeritat</label>
                        <select name="surnombre_emeritat" class="form-select" id="surnombre_emeritat" >
                            <option value="" selected>Sélectionner</option>

                    <?php 
                    require_once ('model/SurnombreEmeritatManager.php');
                    $SurnombreEmeritatManager = new SurnombreEmeritatManager();
                    $reqList = $SurnombreEmeritatManager->getAllSurnombreEmeritat();
                    while ($dataList = $reqList->fetch())
                                {  
                                    echo '
                                        <option value="' . $dataList['statut'] . '" >' . $dataList['statut'] .'</option>
                                    ';  
                                }
                            $reqList->closeCursor();
                    ?>

                        </select>
                    <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                </div>

                </div>


        </div>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="grade" class="form-label">Grade</label>
                        <input type="text" name="grade" class="form-control" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">      

                        <p>
                            <label for="debut_grade" class="form-label">Date de début dans le grade (à partir du)</label>
                            <input type="date" name="debut_grade" class="form-control" />
                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>

                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>

                        </p>
                      
                </div>


        </div>






<br>
<br>
<hr>
<br>
<br>


   </fieldset>









































            <div class="col-3 themed-grid-col">
                      
                <div class="form-group">
                    <label for="corbeille" class="form-label">Corbeille : </label>
                    <input type="checkbox" name="corbeille"/>
                </div>
                    
            </div>

        <br>

        <button class="btn btn-primary">Rechercher</button>

</form>
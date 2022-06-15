<br>
<hr>
<br> 

<ul class="nav nav-pills">
  <li class="nav-item"><a href="#signaletique" class="nav-link">Signalétique</a></li>
  <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
  <li class="nav-item"><a href="#emploi" class="nav-link">Emploi</a></li>
  <li class="nav-item"><a href="#affectation_universitaire" class="nav-link">Affectation universitaire</a></li>
  <li class="nav-item"><a href="#connexion_bases_externes" class="nav-link">Connexions bases externes</a></li>
  <li class="nav-item"><a href="#affectation_scientifique" class="nav-link">Affectation scientifique</a></li>
  <li class="nav-item"><a href="#support" class="nav-link">Support</a></li>
  <li class="nav-item"><a href="#trajectoire_hu" class="nav-link">Trajectoire HU</a></li>
  <li class="nav-item"><a href="#presence_absence" class="nav-link">Présence/Absence</a></li>
  <li class="nav-item"><a href="#avancement" class="nav-link">Avancement</a></li>
  <li class="nav-item"><a href="#retraite" class="nav-link">Retraite</a></li>
</ul>



<br id="signaletique">
<br>
<br>
<hr>
<br>



<form action="index.php?action=modifTeacher" method="post">




   <fieldset>
       <legend>Signalétique</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" onkeyup="this.value = this.value.toUpperCase();" required value="<?php echo $nom ?>"/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">      

                    <p>
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" required value="<?php echo $prenom ?>"/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="nom_jeune_fille" class="form-label">Nom de jeune fille</label>
                        <input type="text" name="nom_jeune_fille" class="form-control" value="<?php echo $nom_jeune_fille ?>"/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" name="telephone" class="form-control" value="<?php echo $telephone ?>"/>
                    </p>
                      
                </div>


        </div>


   </fieldset>


<br id="contact">
<br>
<br>
<hr>
<br>



   <fieldset>
       <legend>Contact</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="liste_de_diffusion" class="form-label">Liste de diffusion</label>
                            <select name="liste_de_diffusion" class="form-select" id="liste_de_diffusion" required>
                                <option value="<?php echo $identifiant_liste_de_diffusion ?>" selected>Valeur actuelle : <?php echo $etat_liste_de_diffusion ?></option>

                                    <?php 
                        require_once ('model/ListeDiffusionManager.php');
                        $ListeDiffusionManager = new ListeDiffusionManager();
                        $req = $ListeDiffusionManager->getAllListeDiffusion();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <p>
                        <label for="courriel_univ" class="form-label">Courriel universitaire</label>
                        <input type="text" name="courriel_univ" class="form-control" value="<?php echo $courriel_univ ?>"/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="courriel_chu" class="form-label">Courriel chu</label>
                        <input type="text" name="courriel_chu" class="form-control" value="<?php echo $courriel_chu ?>"/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="courriel_autre" class="form-label">Courriel autre</label>
                        <input type="text" name="courriel_autre" class="form-control" value="<?php echo $courriel_autre ?>"/>
                    </p>
                      
                </div>


        </div>


   </fieldset>



<br id="emploi">
<br>
<br>
<hr>
<br>





   <fieldset>
       <legend>Emploi</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="emploi" class="form-label">Emploi</label>
                            <select name="emploi" class="form-select" id="emploi">
                                <option value="<?php echo $identifiant_emploi ?>" selected>Valeur actuelle : <?php echo $intitule_emploi ?></option>

                                    <?php 
                        require_once ('model/EmploiManager.php');
                        $EmploiManager = new EmploiManager();
                        $req = $EmploiManager->getAllEmploi();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['intitule'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="sous_emploi" class="form-label">Sous-emploi</label>
                            <select name="sous_emploi" class="form-select" id="sous_emploi">
                                <option value="<?php echo $identifiant_sous_emploi ?>" selected>Valeur actuelle : <?php echo $intitule_sous_emploi ?></option>

                                    <?php 
                        require_once ('model/SousEmploiManager.php');
                        $SousEmploiManager = new SousEmploiManager();
                        $req = $SousEmploiManager->getAllSousEmploi();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant_sous_emploi'] . '">' . $data['intitule_sous_emploi'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>




<br id="affectation_universitaire">
<br>
<br>
<hr>
<br>





   <fieldset>
       <legend>Affectation universitaire</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="dphu" class="form-label">DPHU</label>
                            <select name="dphu" class="form-select" id="dphu" required>
                                <option value="<?php echo $identifiant_dphu ?>" selected>Valeur actuelle : <?php echo $intitule_dphu ?></option>

                                    <?php 
                        require_once ('model/DphuManager.php');
                        $DphuManager = new DphuManager();
                        $req = $DphuManager->getAllDphu();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['intitule'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="affectation_pedagogique" class="form-label">Affectation pedagogique</label>
                            <select name="affectation_pedagogique" class="form-select" id="affectation_pedagogique" required>
                                <option value="<?php echo $identifiant_affectation_pedagogique ?>" selected>Valeur actuelle : <?php echo $intitule_affectation_pedagogique ?></option>

                                    <?php 
                        require_once ('model/AffectationPedagogiqueManager.php');
                        $AffectationPedagogiqueManager = new AffectationPedagogiqueManager();
                        $req = $AffectationPedagogiqueManager->getAllAffectationPedagogique();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant_affectation_pedagogique'] . '">' . $data['intitule_affectation_pedagogique'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="cnu" class="form-label">CNU</label>
                            <select name="cnu" class="form-select" id="cnu" required>
                                <option value="<?php echo $identifiant_cnu ?>" selected>Valeur actuelle : <?php echo $libelle_cnu ?></option>

                        <?php 
                        require_once ('model/CnuManager.php');
                        $CnuManager = new CnuManager();
                        $req = $CnuManager->getAllCnu();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['libelle'] . ' - ' . $data['code'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>



<br id="connexion_bases_externes">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Connexions bases externes</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="nom_chu" class="form-label">Nom dans la base CHU</label>
                            <select name="nom_chu" class="form-select" id="nom_chu" >
                                <option value="<?php echo $nom_chu ?>" selected>Valeur actuelle : <?php echo $nom_chu ?></option>

                                    <?php 
                        require_once ('model/NomChuManager.php');
                        $NomChuManager = new NomChuManager();
                        $req = $NomChuManager->getAllNomChu();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['identifiant'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="id_mangue" class="form-label">Nom dans la base Mangue</label>
                            <select name="id_mangue" class="form-select" id="id_mangue" >
                                <option value="<?php echo $identifiant_mangue ?>" selected>Valeur actuelle : <?php echo $identifiant_mangue ?></option>

                                    <?php 
                        require_once ('model/IdMangueManager.php');
                        $IdMangueManager = new IdMangueManager();
                        $req = $IdMangueManager->getAllIdMangue();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['nom'] . ' - ' . $data['prenom'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>


<br id="affectation_scientifique">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Affectation scientifique</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="laboratoire" class="form-label">Laboratoire</label>
                            <select name="laboratoire" class="form-select" id="laboratoire" >
                                <option value="<?php echo $identifiant_laboratoire ?>" selected>Valeur actuelle : <?php echo $code_laboratoire ?></option>

                                    <?php 
                        require_once ('model/LaboratoireManager.php');
                        $LaboratoireManager = new LaboratoireManager();
                        $req = $LaboratoireManager->getAllLaboratoire();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['nom'] . ' - ' . $data['code'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      



                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>



<br id="support">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Support</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="affectation_support" class="form-label">Affectation de support</label>
                            <select name="affectation_support" class="form-select" id="affectation_support">
                                <option value="<?php echo $identifiant_affectation_support ?>" selected>Valeur actuelle : <?php echo $numero_support ?></option>

                        <?php 
                        require_once ('model/AssignManager.php');
                        $AssignManager = new AssignManager();
                        $req = $AssignManager->getAllAssigns(present);
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant_affectation'] . '">' . $data['nom_enseignant'] . ' - ' . $data['numero_formate_support'] . ' - ' . $data['debut'] . ' - ' . $data['fin'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="next" class="form-label">NExT</label>
                            <select name="next" class="form-select" id="next" >
                                <option value="<?php echo $identifiant_next ?>" selected>Valeur actuelle : <?php echo $financement_next ?></option>

                                    <?php 
                        require_once ('model/NextManager.php');
                        $NextManager = new NextManager();
                        $req = $NextManager->getAllNext();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['next'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>


<br id="trajectoire_hu">
<br>
<br>
<hr>
<br>





   <fieldset>
       <legend>Trajectoire HU</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="trajectoire_hu" class="form-label">Trajectoire HU</label>
                            <select name="trajectoire_hu" class="form-select" id="trajectoire_hu" >
                                <option value="<?php echo $identifiant_trajectoire_hu ?>" selected>Valeur actuelle : <?php echo $etat_trajectoire_hu ?></option>

                                    <?php 
                        require_once ('model/TrajectoireHuManager.php');
                        $TrajectoireHuManager = new TrajectoireHuManager();
                        $req = $TrajectoireHuManager->getAllTrajectoireHu();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>


                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="annee_civile" class="form-label">Annee civile cible</label>
                            <select name="annee_civile" class="form-select" id="annee_civile" >
                                <option value="<?php echo $identifiant_annee_civile ?>" selected>Valeur actuelle : <?php echo $annee_annee_civile ?></option>

                                    <?php 
                        require_once ('model/AnneeCivileManager.php');
                        $AnneeCivileManager = new AnneeCivileManager();
                        $req = $AnneeCivileManager->getAllAnneeCivile();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['annee'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="emploi_cible" class="form-label">Emploi cible</label>
                            <select name="emploi_cible" class="form-select" id="emploi_cible" >
                                <option value="<?php echo $identifiant_emploi_cible ?>" selected>Valeur actuelle : <?php echo $intitule_emploi_cible ?></option>

                                    <?php 
                        require_once ('model/EmploiManager.php');
                        $EmploiManager = new EmploiManager();
                        $req = $EmploiManager->getAllEmploi();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['intitule'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


        <br>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="succession" class="form-label">Support cible</label>
                            <select name="succession" class="form-select" id="succession" >
                                <option value="<?php echo $identifiant_succession ?>" selected>Valeur actuelle : <?php echo $numero_formate_succession ?></option>

                        <?php 
                        require_once ('model/SupportManager.php');
                        $SupportManager = new SupportManager();
                        $req = $SupportManager->getAllSupport('present');
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '" >' . $data['numero_formate'] .'</option>
                                        ';  
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="commission_evaluation_hu" class="form-label">Commission d'évaluation HU</label>
                            <select name="commission_evaluation_hu" class="form-select" id="commission_evaluation_hu" >
                                <option value="<?php echo $identifiant_commission_hu ?>" selected>Valeur actuelle : <?php echo $annee_civile_commission_hu ?></option>

                                    <?php 
                        require_once ('model/CommissionHuManager.php');
                        $CommissionHuManager = new CommissionHuManager();
                        $req = $CommissionHuManager->getAllCommissionHu();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant_commission'] . '">Commission - ' . $data['annee_civile'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>

                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


        <br>



        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience</label>
                            <select name="experience" class="form-select" id="experience" >
                                <option value="<?php echo $identifiant_experience ?>" selected>Valeur actuelle : <?php echo $etat_experience ?></option>

                                    <?php 
                        require_once ('model/ExperienceManager.php');
                        $ExperienceManager = new ExperienceManager();
                        $req = $ExperienceManager->getAllExperience();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <div class="form-group">
                        <label for="mobilite" class="form-label">Mobilité</label>
                            <select name="mobilite" class="form-select" id="mobilite" >
                                <option value="<?php echo $identifiant_mobilite ?>" selected>Valeur actuelle : <?php echo $etat_mobilite ?></option>

                                    <?php 
                        require_once ('model/MobiliteManager.php');
                        $MobiliteManager = new MobiliteManager();
                        $req = $MobiliteManager->getAllMobilite();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="hdr" class="form-label">HDR</label>
                            <select name="hdr" class="form-select" id="hdr" >
                                <option value="<?php echo $identifiant_hdr ?>" selected>Valeur actuelle : <?php echo $etat_hdr ?></option>

                                    <?php 
                        require_once ('model/HdrManager.php');
                        $HdrManager = new HdrManager();
                        $req = $HdrManager->getAllHdr();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="precnu" class="form-label">Precnu</label>
                            <select name="precnu" class="form-select" id="precnu" >
                                <option value="<?php echo $identifiant_precnu ?>" selected>Valeur actuelle : <?php echo $etat_precnu ?></option>

                                    <?php 
                        require_once ('model/PrecnuManager.php');
                        $PrecnuManager = new PrecnuManager();
                        $req = $PrecnuManager->getAllPrecnu();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>
                      
                </div>


        </div>




   </fieldset>




<br>
<hr>
<br>


<div class="form-group">
          
    <p>
        <label for="commentaire_trajectoire_hu" class="form-label">Commentaire trajectoire HU</label>
        
        <textarea name="commentaire_trajectoire_hu" class="form-control" rows="10"><?php echo $commentaire_trajectoire_hu ?></textarea>
    </p>

</div>





<br id="presence_absence">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Présence</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="absence_depart_arrivee" class="form-label">Absence/Depart</label>
                            <select name="absence_depart_arrivee" class="form-select" id="absence_depart_arrivee" >
                                <option value="<?php echo $identifiant_absence_depart_arrivee ?>" selected>Valeur actuelle : <?php echo $etat_absence_depart_arrivee ?></option>

                        <?php 
                        require_once ('model/Absence_depart_arriveeManager.php');
                        $Absence_depart_arriveeManager = new Absence_depart_arriveeManager();
                        $req = $Absence_depart_arriveeManager->getAllAbsence_depart_arrivee();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>

                </div>


                <div class="col-3 themed-grid-col">      

                    <p>
                        <label for="date_dernier_changement" class="form-label">Date dernier changement de statut</label>
                        <input type="date" name="date_dernier_changement" class="form-control" value="<?php echo $date_dernier_changement ?>" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="fin_enseignant" class="form-label">Date de fin</label>
                        <input type="date" name="fin_enseignant" class="form-control" value="<?php echo $fin_enseignant ?>" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="actif" class="form-label">Actif</label>
                            <select name="actif" class="form-select" id="actif" required>
                                <option value="<?php echo $identifiant_actif ?>" selected>Valeur actuelle : <?php echo $etat_actif ?></option>

                                    <?php 
                        require_once ('model/ActifManager.php');
                        $ActifManager = new ActifManager();
                        $req = $ActifManager->getAllActif();
                        while ($data = $req->fetch())
                                    {  
                                        echo '
                                            <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                        ';
                                    }
                                $req->closeCursor();
                        ?>

                            </select>
                        <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                    </div>
                      
                </div>


        </div>

        <div class="row">

                <div class="col-3 themed-grid-col">      

                        <div class="form-group">
                            <label for="eligible_election" class="form-label">Eligible élection</label>
                                <select name="eligible_election" class="form-select" id="eligible_election" >
                                    <option value="<?php echo $identifiant_eligible_election ?>" selected>Valeur actuelle : <?php echo $etat_eligible_election ?></option>

                            <?php 
                            require_once ('model/EligibleElectionManager.php');
                            $EligibleElectionManager = new EligibleElectionManager();
                            $req = $EligibleElectionManager->getAllEligibleElection();
                            while ($data = $req->fetch())
                                        {  
                                            echo '
                                                <option value="' . $data['identifiant'] . '">' . $data['etat'] . '</option>
                                            ';
                                        }
                                    $req->closeCursor();
                            ?>

                                </select>
                            <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                        </div>

                </div>

        </div>


   </fieldset>


<br>
<hr>
<br>



<div class="form-group">
          
    <p>
        <label for="commentaire" class="form-label">Commentaire</label>
        
        <textarea name="commentaire" class="form-control" rows="10"><?php echo $commentaire ?></textarea>
    </p>

</div>











<br id="avancement">
<br>
<br>
<hr>
<br>




   <fieldset>
       <legend>Avancement</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="grade" class="form-label">Grade</label>
                        <input type="text" name="grade" class="form-control" value="<?php echo $etat_grade ?>"/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">      

                        <p>
                            <label for="debut_grade" class="form-label">Date de début dans le grade</label>
                            <input type="date" name="debut_grade" value="<?php echo $debut_grade ?>" class="form-control" />
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




<br id="retraite">
<br>
<br>
<hr>
<br>







   <fieldset>
       <legend>Retraite</legend>


        <div class="row">




                <div class="col-3 themed-grid-col">      

                        <p>
                            <label for="ouverture_droits_retraite" class="form-label">Ouverture droits retraite</label>
                            <input type="text" name="ouverture_droits_retraite" value="<?php echo $ouverture_droits_retraite ?>" class="form-control" />
                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="age_limite" class="form-label">Age limite</label>
                            <input type="text" name="age_limite" value="<?php echo $age_limite ?>" class="form-control" />
                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="date_limite_age" class="form-label">Date limite âge</label>
                            <input type="date" name="date_limite_age" value="<?php echo $date_limite_age ?>" class="form-control" />
                        </p>
                      
                </div>

                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="enfant_vivant_a_50ans" class="form-label">Enfant vivant à 50ans</label>
                            <input type="number" name="enfant_vivant_a_50ans" value="<?php echo $enfant_vivant_a_50ans ?>" class="form-control" />
                        </p>

                </div>


        </div>


        <div class="row">




                <div class="col-3 themed-grid-col">      

                        <p>
                            <label for="date_previsionnelle" class="form-label">Date prévisionnelle</label>
                            <input type="date" name="date_previsionnelle" value="<?php echo $date_previsionnelle ?>" class="form-control" />
                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="depart_effectif_ou_souhaite" class="form-label">Départ effectif ou souhaité</label>
                            <input type="date" name="depart_effectif_ou_souhaite" value="<?php echo $depart_effectif_ou_souhaite ?>" class="form-control" />
                        </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                        <p>
                            <label for="option_remarque_retraite" class="form-label">Option remarque retraite</label>
                            <input type="text" name="option_remarque_retraite" value="<?php echo $option_remarque_retraite ?>" class="form-control" />
                        </p>
                      
                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


        </div>


        <br>
        <hr>
        <br>

        <div class="col-3 themed-grid-col">
                  
                <div class="form-group">
                    <label for="surnombre_emeritat" class="form-label">Surnombre Emeritat</label>
                        <select name="surnombre_emeritat" class="form-select" id="surnombre_emeritat" >
                            <option value="<?php echo $identifiant_surnombre_emeritat ?>" selected>Valeur actuelle : <?php echo $statut_surnombre_emeritat ?></option>

                    <?php 
                    require_once ('model/SurnombreEmeritatManager.php');
                    $SurnombreEmeritatManager = new SurnombreEmeritatManager();
                    $req = $SurnombreEmeritatManager->getAllSurnombreEmeritat();
                    while ($data = $req->fetch())
                                {  
                                    echo '
                                        <option value="' . $data['identifiant'] . '" >' . $data['statut'] .'</option>
                                    ';  
                                }
                            $req->closeCursor();
                    ?>

                        </select>
                    <div class="invalid-feedback">Veuillez sélectionner un choix</div>
                </div>

        </div>



   </fieldset>

<br>
<hr>
<br>



<p>
    <button class="btn btn-primary">Modifier</button>
</p>


<p>
    <label for="ancNom"></label>
    <input type="hidden" name="ancNom" value="<?php echo $nom ?>" />
</p>

<p>
    <label for="ancPrenom"></label>
    <input type="hidden" name="ancPrenom" value="<?php echo $prenom ?>" />
</p>

<p>
    <label for="ancNom_jeune_fille"></label>
    <input type="hidden" name="ancNom_jeune_fille" value="<?php echo $nom_jeune_fille ?>" />
</p>

<p>
    <label for="ancSurnombre_emeritat"></label>
    <input type="hidden" name="ancSurnombre_emeritat" value="<?php echo $identifiant_surnombre_emeritat ?>" />
</p>

<p>
    <label for="ancAbsence_depart_arrivee"></label>
    <input type="hidden" name="ancAbsence_depart_arrivee" value="<?php echo $identifiant_absence_depart_arrivee ?>" />
</p>

<p>
    <label for="ancCommentaire"></label>
    <input type="hidden" name="ancCommentaire" value="<?php echo $commentaire ?>" />
</p>

<p>
    <label for="ancAffectation_support"></label>
    <input type="hidden" name="ancAffectation_support" value="<?php echo $identifiant_affectation_support ?>" />
</p>

<p>
    <label for="ancCnu"></label>
    <input type="hidden" name="ancCnu" value="<?php echo $identifiant_cnu ?>" />
</p>

<p>
    <label for="ancEmploi"></label>
    <input type="hidden" name="ancEmploi" value="<?php echo $identifiant_emploi ?>" />
</p>

<p>
    <label for="ancSous_emploi"></label>
    <input type="hidden" name="ancSous_emploi" value="<?php echo $identifiant_sous_emploi ?>" />
</p>

<p>
    <label for="ancNext"></label>
    <input type="hidden" name="ancNext" value="<?php echo $identifiant_next ?>" />
</p>

<p>
    <label for="ancListe_de_diffusion"></label>
    <input type="hidden" name="ancListe_de_diffusion" value="<?php echo $identifiant_liste_de_diffusion ?>" />
</p>

<p>
    <label for="ancCourriel_univ"></label>
    <input type="hidden" name="ancCourriel_univ" value="<?php echo $courriel_univ ?>" />
</p>

<p>
    <label for="ancCourriel_chu"></label>
    <input type="hidden" name="ancCourriel_chu" value="<?php echo $courriel_chu ?>" />
</p>

<p>
    <label for="ancCourriel_autre"></label>
    <input type="hidden" name="ancCourriel_autre" value="<?php echo $courriel_autre ?>" />
</p>

<p>
    <label for="ancGrade"></label>
    <input type="hidden" name="ancGrade" value="<?php echo $etat_grade ?>" />
</p>

<p>
    <label for="ancOuverture_droits_retraite"></label>
    <input type="hidden" name="ancOuverture_droits_retraite" value="<?php echo $ouverture_droits_retraite ?>" />
</p>

<p>
    <label for="ancAge_limite"></label>
    <input type="hidden" name="ancAge_limite" value="<?php echo $age_limite ?>" />
</p>

<p>
    <label for="ancDate_limite_age"></label>
    <input type="hidden" name="ancDate_limite_age" value="<?php echo $date_limite_age ?>" />
</p>

<p>
    <label for="ancEnfant_vivant_a_50ans"></label>
    <input type="hidden" name="ancEnfant_vivant_a_50ans" value="<?php echo $enfant_vivant_a_50ans ?>" />
</p>

<p>
    <label for="ancDate_previsionnelle"></label>
    <input type="hidden" name="ancDate_previsionnelle" value="<?php echo $date_previsionnelle ?>" />
</p>

<p>
    <label for="ancDepart_effectif_ou_souhaite"></label>
    <input type="hidden" name="ancDepart_effectif_ou_souhaite" value="<?php echo $depart_effectif_ou_souhaite ?>" />
</p>

<p>
    <label for="ancOption_remarque_retraite"></label>
    <input type="hidden" name="ancOption_remarque_retraite" value="<?php echo $option_remarque_retraite ?>" />
</p>

<p>
    <label for="ancDphu"></label>
    <input type="hidden" name="ancDphu" value="<?php echo $identifiant_dphu ?>" />
</p>

<p>
    <label for="ancAffectation_pedagogique"></label>
    <input type="hidden" name="ancAffectation_pedagogique" value="<?php echo $identifiant_affectation_pedagogique ?>" />
</p>

<p>
    <label for="ancNom_chu"></label>
    <input type="hidden" name="ancNom_chu" value="<?php echo $nom_chu ?>" />
</p>

<p>
    <label for="ancLaboratoire"></label>
    <input type="hidden" name="ancLaboratoire" value="<?php echo $identifiant_laboratoire ?>" />
</p>

<p>
    <label for="ancTrajectoire_hu"></label>
    <input type="hidden" name="ancTrajectoire_hu" value="<?php echo $identifiant_trajectoire_hu ?>" />
</p>

<p>
    <label for="ancEmploi_cible"></label>
    <input type="hidden" name="ancEmploi_cible" value="<?php echo $identifiant_emploi_cible ?>" />
</p>

<p>
    <label for="ancAnnee_civile"></label>
    <input type="hidden" name="ancAnnee_civile" value="<?php echo $identifiant_annee_civile ?>" />
</p>

<p>
    <label for="ancSuccession"></label>
    <input type="hidden" name="ancSuccession" value="<?php echo $identifiant_succession ?>" />
</p>

<p>
    <label for="ancCommission_evaluation_hu"></label>
    <input type="hidden" name="ancCommission_evaluation_hu" value="<?php echo $identifiant_commission_hu ?>" />
</p>

<p>
    <label for="ancExperience"></label>
    <input type="hidden" name="ancExperience" value="<?php echo $identifiant_experience ?>" />
</p>

<p>
    <label for="ancMobilite"></label>
    <input type="hidden" name="ancMobilite" value="<?php echo $identifiant_mobilite ?>" />
</p>

<p>
    <label for="ancHdr"></label>
    <input type="hidden" name="ancHdr" value="<?php echo $identifiant_hdr ?>" />
</p>

<p>
    <label for="ancPrecnu"></label>
    <input type="hidden" name="ancPrecnu" value="<?php echo $identifiant_precnu ?>" />
</p>

<p>
    <label for="ancCommentaire_trajectoire_hu"></label>
    <input type="hidden" name="ancCommentaire_trajectoire_hu" value="<?php echo $commentaire_trajectoire_hu ?>" />
</p>

<p>
    <label for="ancDate_dernier_changement"></label>
    <input type="hidden" name="ancDate_dernier_changement" value="<?php echo $date_dernier_changement ?>" />
</p>

<p>
    <label for="ancEligible_election"></label>
    <input type="hidden" name="ancEligible_election" value="<?php echo $identifiant_eligible_election ?>" />
</p>

<p>
    <label for="ancActif"></label>
    <input type="hidden" name="ancActif" value="<?php echo $identifiant_actif ?>" />
</p>

<p>
    <label for="ancIdentifiant_mangue"></label>
    <input type="hidden" name="ancIdentifiant_mangue" value="<?php echo $identifiant_mangue ?>" />
</p>

<p>
    <label for="ancTelephone"></label>
    <input type="hidden" name="ancTelephone" value="<?php echo $telephone ?>" />
</p>

<p>
    <label for="ancFin_enseignant"></label>
    <input type="hidden" name="ancFin_enseignant" value="<?php echo $fin_enseignant ?>" />
</p>

<p>
    <label for="ancDebut_grade"></label>
    <input type="hidden" name="ancDebut_grade" value="<?php echo $debut_grade ?>" />
</p>



<p>
    <label for="identifiant"></label>
    <input type="hidden" name="identifiant" value="<?php echo $identifiant ?>" />
</p>



</form>

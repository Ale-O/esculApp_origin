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
</ul>


<br id="signaletique">
<br>
<br>
<hr>
<br>



<form action="index.php?action=newTeacher" method="post">



   <fieldset>
       <legend>Signalétique</legend>


        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" onkeyup="this.value = this.value.toUpperCase();" required/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">      

                    <p>
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" required/>
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="nom_jeune_fille" class="form-label">Nom de jeune fille</label>
                        <input type="text" name="nom_jeune_fille" class="form-control" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" name="telephone" class="form-control" />
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/ListeDiffusionManager.php';
                        $ListeDiffusionManager = new ListeDiffusionManager();
                        $req = $ListeDiffusionManager->getAllListeDiffusion();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['etat'].'</option>
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
                        <input type="text" name="courriel_univ" class="form-control" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="courriel_chu" class="form-label">Courriel chu</label>
                        <input type="text" name="courriel_chu" class="form-control" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="courriel_autre" class="form-label">Courriel autre</label>
                        <input type="text" name="courriel_autre" class="form-control" />
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
                            <select name="emploi" class="form-select" id="emploi" required>
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/EmploiManager.php';
                        $EmploiManager = new EmploiManager();
                        $req = $EmploiManager->getAllEmploi();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['intitule'].'</option>
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
                            <select name="sous_emploi" class="form-select" id="sous_emploi" >
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/SousEmploiManager.php';
                        $SousEmploiManager = new SousEmploiManager();
                        $req = $SousEmploiManager->getAllSousEmploi();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant_sous_emploi'].'">'.$data['intitule_sous_emploi'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/DphuManager.php';
                        $DphuManager = new DphuManager();
                        $req = $DphuManager->getAllDphu();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['intitule'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/AffectationPedagogiqueManager.php';
                        $AffectationPedagogiqueManager = new AffectationPedagogiqueManager();
                        $req = $AffectationPedagogiqueManager->getAllAffectationPedagogique();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant_affectation_pedagogique'].'">'.$data['intitule_affectation_pedagogique'].'</option>
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
                                <option value="">Sélectionner</option>

                        <?php
                        require_once 'model/CnuManager.php';
                        $CnuManager = new CnuManager();
                        $req = $CnuManager->getAllCnu();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['libelle'].' - '.$data['code'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/NomChuManager.php';
                        $NomChuManager = new NomChuManager();
                        $req = $NomChuManager->getAllNomChu();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['identifiant'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/IdMangueManager.php';
                        $IdMangueManager = new IdMangueManager();
                        $req = $IdMangueManager->getAllIdMangue();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['nom'].' - '.$data['prenom'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/LaboratoireManager.php';
                        $LaboratoireManager = new LaboratoireManager();
                        $req = $LaboratoireManager->getAllLaboratoire();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['nom'].' - '.$data['code'].'</option>
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
                        <label for="next" class="form-label">NExT</label>
                            <select name="next" class="form-select" id="next" >
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/NextManager.php';
                        $NextManager = new NextManager();
                        $req = $NextManager->getAllNext();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['next'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/TrajectoireHuManager.php';
                        $TrajectoireHuManager = new TrajectoireHuManager();
                        $req = $TrajectoireHuManager->getAllTrajectoireHu();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['etat'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/AnneeCivileManager.php';
                        $AnneeCivileManager = new AnneeCivileManager();
                        $req = $AnneeCivileManager->getAllAnneeCivile();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['annee'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/EmploiManager.php';
                        $EmploiManager = new EmploiManager();
                        $req = $EmploiManager->getAllEmploi();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['intitule'].'</option>
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
                                <option value="">Sélectionner</option>

                        <?php
                        require_once 'model/SupportManager.php';
                        $SupportManager = new SupportManager();
                        $req = $SupportManager->getAllSupport('present');
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'" >'.$data['numero_formate'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/CommissionHuManager.php';
                        $CommissionHuManager = new CommissionHuManager();
                        $req = $CommissionHuManager->getAllCommissionHu();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant_commission'].'">Commission - '.$data['annee_civile'].'</option>
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


<br>
<hr>
<br>




<div class="form-group">
          
    <p>
        <label for="commentaire_trajectoire_hu" class="form-label">Commentaire Trajectoire HU</label>
        
        <textarea name="commentaire_trajectoire_hu" class="form-control" rows="10"></textarea>
    </p>

</div>






<br>
<hr>
<br>



        <div class="row">

                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience</label>
                            <select name="experience" class="form-select" id="experience" >
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/ExperienceManager.php';
                        $ExperienceManager = new ExperienceManager();
                        $req = $ExperienceManager->getAllExperience();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['etat'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/MobiliteManager.php';
                        $MobiliteManager = new MobiliteManager();
                        $req = $MobiliteManager->getAllMobilite();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['etat'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/HdrManager.php';
                        $HdrManager = new HdrManager();
                        $req = $HdrManager->getAllHdr();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['etat'].'</option>
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
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/PrecnuManager.php';
                        $PrecnuManager = new PrecnuManager();
                        $req = $PrecnuManager->getAllPrecnu();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['etat'].'</option>
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
                                <option value="">Sélectionner</option>

                        <?php
                        require_once 'model/Absence_depart_arriveeManager.php';
                        $Absence_depart_arriveeManager = new Absence_depart_arriveeManager();
                        $req = $Absence_depart_arriveeManager->getAllAbsence_depart_arrivee();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['etat'].'</option>
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
                        <label for="date_dernier_changement" class="form-label">Date dernier changement</label>
                        <input type="date" name="date_dernier_changement" class="form-control" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <p>
                        <label for="fin_enseignant" class="form-label">Date de fin</label>
                        <input type="date" name="fin_enseignant" class="form-control" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">
                          
                    <div class="form-group">
                        <label for="actif" class="form-label">Actif</label>
                            <select name="actif" class="form-select" id="actif" required>
                                <option value="">Sélectionner</option>

                                    <?php
                        require_once 'model/ActifManager.php';
                        $ActifManager = new ActifManager();
                        $req = $ActifManager->getAllActif();
                        while ($data = $req->fetch()) {
                            echo '
                                            <option value="'.$data['identifiant'].'">'.$data['etat'].'</option>
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
        
        <textarea name="commentaire" class="form-control" rows="10"></textarea>
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
                        <input type="text" name="grade" class="form-control" />
                    </p>

                </div>


                <div class="col-3 themed-grid-col">      



                </div>


                <div class="col-3 themed-grid-col">
                          


                </div>


                <div class="col-3 themed-grid-col">
                          

                      
                </div>


        </div>


   </fieldset>








<br>
<hr>
<br>


<p>
    <button class="btn btn-primary">Créer</button>
</p>







<p>
    <label for="affectation_support"></label>
    <input type="hidden" name="affectation_support" value="0" />
</p>



</form>
